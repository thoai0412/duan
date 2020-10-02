<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Category;
use App\Components\Recusive;
use App\Product;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;

    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('product.add',compact('htmlOption'));
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
        $dataProductCreate=[
            'name' => $request->name,
            'price' =>$request->price,
            'content'=>$request->content,
            'user_id'=>auth()->id(),
            'category_id'=>$request->category_id

        ];
        $dataUploadFeatureImage = $this->storageTraiUpload($request, 'feature_image_path', 'product');
        if(!empty($dataUploadFeatureImage)){
            $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
            $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
        }
        $product = $this->product->create($dataProductCreate);
        dd($product);
        
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
