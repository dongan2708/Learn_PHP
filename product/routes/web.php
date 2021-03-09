<?php

use App\Models\eshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//show shop
Route::get('/', function () {
    $eshops = eshop::orderBy('id', 'asc')->get();

    return view('eshop',[
        'eshop'=> $eshops
    ]);
});
//add product
Route::post('/eshop', function (Request $request){
    //validate
    $validator = Validator::make($request->all(),[
        'name'=> 'required|max:255',
        'description'=>'required|max:255',
        'status'=>'required'
    ]);
    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $eshop = new eshop;
    $eshop->name = $request->name;
    $eshop->image = $request->image;
    $eshop->description = $request->description;
    $eshop->qty = $request->qty;
    $eshop->status = $request->status;
    $eshop->save();
    return redirect('/');
});
//delete product
Route::delete('/eshop/{eshop}', function ($id){
    eshop::findOrFail($id)->delete();
    return redirect('/');
});
