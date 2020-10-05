<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Category;
use App\Components\Recusive;
use App\Product;
use App\ProductImage;
use App\ProductTag;
use App\Tag;
use App\Traits\StorageImageTrait;
use DB;
use Illuminate\Http\Request;
use Log;
use Storage;

class ProductController extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;
    private $productImage;
    private $tag;
    private $productTag;

    public function __construct(Category $category, Product $product, ProductImage $productImage, Tag $tag, ProductTag $productTag)
    {
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
        $this->productTag = $productTag;
        $this->tag = $tag;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->paginate(5);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.product.add', compact('htmlOption'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }
    // contruct de gan bien category->all

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'category_id' => $request->parent_id,
            ];
            $dataUploadFeatureImage = $this->storageTraiUpload($request, 'feature_image_path', 'Image');
            if (!empty($dataUploadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $product = $this->product->create($dataProductCreate);
            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $fileItem) {
                    $dataProductImagedetail = $this->storageTraiUploadMutiple($fileItem, 'product');
                    // $this->productImage->create([
                    //     'product_id' => $product->id,
                    //     'image_path' => $dataProductImagedetail['file_path'],
                    //     'image_name' => $dataProductImagedetail['file_name'],
                    // ]);
                    // su dung Eloquent model
                    $product->images()->create([
                        'image_path' => $dataProductImagedetail['file_path'],
                        'image_name' => $dataProductImagedetail['file_name'],

                    ]);
                    // insert tags
                    foreach ($request->tags as $tagItem) {
                        $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                        // $this->productTag->create([
                        //     'product_id' => $product->id,
                        //     'tag_id' => $tagInstance->id
                        // ]);
                        //o tren ko can su dung Eloquent 
                        $tagIds[] = $tagInstance->id;
                    }
                    $product->tags()->attach($tagIds);
                    DB::commit();
                    return redirect()->route('product.index');
                }
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message:' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
