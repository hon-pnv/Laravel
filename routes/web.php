<?php
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\GiaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('cars', CarController::class);

Route::get('cars',[CarController::class,'index'])->name('cars.index');
Route::post('cars',[CarController::class,'store'])->name('cars.store');
Route::get('cars/create',[CarController::class,'create'])->name('cars.create');
Route::get('cars/{car}',[CarController::class,'show'])->name('cars.show');
Route::put('cars/{car}',[CarController::class,'update'])->name('cars.update');
Route::delete('cars/{car}',[CarController::class,'destroy'])->name('cars.destroy');
Route::get('cars/{car}/edit',[CarController::class,'edit'])->name('cars.edit');



// Route::get('cars/create',[CarController::class,'create'])->name('cars.create');
// // Thêm dòng dưới đây vào
// Route::post('cars',[CarController::class,'store'])->name('cars.store');

// Route::get('ptb1',function(){
//     return view('ptb1');
// });
// Route::post('ptb1',[GiaiController::class,'giaiptb1'])->name('ptb1.post');

// Route::post('ptb1',function(Request $req){
    // $a=$req->input('a');
    // $b=$req->input('b');
    // if($a==0)
    //     if($b==0)
    //         $kq="PT VSN";
    //     else $kq="PTVN";
    // else $kq="PT có nghiệm x=".round(-$b/$a,2);
    // return view('ptb1',compact('kq','a','b'));
    // // return view('ptb1',['kq'=>$kq]);

// })->name('ptb1.post');

// Route::get('ptb1',[GiaiController::class,'giaiptb1'])->name('ptb1');