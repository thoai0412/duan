<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Log;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use StorageImageTrait;
    private $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }
    public function index()
    {

        $sliders = $this->slider->latest()->paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.add');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $dataInsert = [
            'name'=> $request->name,
            'description' => $request->description,
        ];
        $dataImageSlider = $this->storageTraiUpload($request, 'image_path', 'slider');
        if(!empty($dataImageSlider)) {
            $dataInsert['image_path'] = $dataImageSlider['file_path'];
            $dataInsert['image_name'] = $dataImageSlider['file_name'];
        }
        $this->slider->create($dataInsert);

        return redirect()->route('sliders.index');
        } catch (\Exception $exception){
            Log::error ('Lỗi :' . $exception->getMessage() . '---Line: ' . $exception->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = $this->slider->find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $dataUpdate = [
                'name'=> $request->name,
                'description' => $request->description,
            ];
            $dataImageSlider = $this->storageTraiUpload($request, 'image_path', 'slider');
            if(!empty($dataImageSlider)) {
                $dataUpdate['image_path'] = $dataImageSlider['file_path'];
                $dataUpdate['image_name'] = $dataImageSlider['file_name'];
            }
            $this->slider->find($id)->update($dataUpdate);
    
            return redirect()->route('sliders.index');
            } catch (\Exception $exception){
                Log::error ('Lỗi :' . $exception->getMessage() . '---Line: ' . $exception->getLine());
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index');
        // try{
        //     $this->slider->find($id)->delete();
        //     return response()->json([
        //         'code' => 200,
        //         'message'=> 'success',
        //     ], 200);
        // } catch (\Exception $exception) {
        //     Log::error('Message:' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        //     return response()->json([
        //         'code' => 500,
        //         'message'=> 'fail',

        //     ], 500);
        // }
    }
}
