<?php

use Illuminate\Support\Facades\Route;
use App\Models\students;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get("/",function(){
 
    $arr=[
        
        'students' => Students::all()
    ];
    return view('students',$arr);
    
    
});
Route::get("/information/{id}",function($id){
$student = students::find($id);
return view("information",$student);
});
Route::get("/user",function(){

});