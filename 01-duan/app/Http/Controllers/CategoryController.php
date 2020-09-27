<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    private $category;

    //khoi tao 1 bien luu tru gia tri
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    // khoi tao ham thu thi
    public function create()
    {
        
        $htmlOption = $this->getCategory($parentId = '');
        return view('category.add', compact('htmlOption'));
    }

    public function store(Request $request)
    {
        $this->category->create([
            'name'=> $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name, '-'),
        ]);
        return redirect()->route('categories.index');
    }

    // tra ve index
    public function index(){
        $categories = $this->category->latest()->paginate(5);
        return view('category.index', compact('categories'));
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }
    public function edit($id){
        $category = $this->category->find($id);
        $htmlOption =$this->getCategory($category->parent_id);
        
        return view( 'category.edit', compact('category', 'htmlOption') );
    }
    public function delete($id){
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }
    public function update($id, Request $request){
        $this->category->create([
            'name'=>$request->name,
            'parent_id'=> $request->parent_id,
            'slug'=> Str::slug($request->name, '-'),
        ]);
        return redirect()->route('categories.index');
    }

}
