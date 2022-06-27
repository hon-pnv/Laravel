<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Producer;


class CarController extends Controller
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::all();
        // dd($cars);
        return view('carList',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car_create',['producers'=> Producer::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name='';
        
        $this->validate($request,[
            
            'description'=>'required',
            'model'=>'required',
            'image'=>'required'
        ],[
           
            'description.required'=>'Bạn chưa chọn mô tả',
            'model.required'=>'Bạn chưa chọn mô hình',
            'image.required'=>'Bạn chưa chọn file ảnh'
        ]);

        if($request->hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb'
            ]);
            $file = $request->file('image');
            $name=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images'); //project\public\images, public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/images
        }


        $car=new Car();
        $car->producer_id=$request->producer_id;
        $car->produced_on=$request->produced_on;
       
        $car -> image = $name;
        $car->description=$request->description;
        $car->model=$request->model;
        
        // dd($car);
    
        $car->save();

        return redirect()->route('cars.index')->with('success','Bạn đã thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car=Car::find($id);
       //dd($car);
        return view('show',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

   
    // public function edit($id)
    // {
    //     //show ra view sửa, 
    //     $car=Car::find($id);
    //     return view('car_edit',['car'=>$car]);

    //     // return view('CarEdit');
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function edit($id)
    {
        //show ra view sửa, 
        $car=Car::find($id);
        return view('car_edit',['car'=>$car],['producers'=> Producer::get()]);

        // return view('CarEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name='';
        $validated = $request->validate([
            'description' => 'required',
            'model' => 'required',
            'image' => 'required',
           
        ],[
                'description.required' => 'Chưa nhập mô tả',
                'model.required' => 'Chưa nhập model',
                'image.required' => 'Chưa nhập ảnh',
                
        ]);
        if($request -> hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb',
            ]);
            // image từ ô input
            $file = $request->file('image');
            $name =time().'_'.$file->getClientOriginalName();
            // images từ folder
            $destinationPath=public_path('images');
            $file -> move($destinationPath, $name);
        }
   
        $car = Car::find($id);
        $car -> description=$request->description;
        $car->model = $request -> model;
        $car->producer_id = $request -> producer_id;
        $car -> image = $name;
        $car -> save();
        
        return redirect()-> route('cars.index')->with('success', 'Bạn đã cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //xóa

    //     Car::find($id)->delete();
    //     // $car= Car::find($id);
    //     return redirect()->route('cars.index');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        //xóa
        $car = Car::find($id);
        // dd($car);
        $car ->delete();
        
        return redirect()->route('cars.index');
    }
}