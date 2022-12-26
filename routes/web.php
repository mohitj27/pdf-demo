<?php
// use PDF;

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

Route::get('/generate-pdf', function () {
   
    $belts = DB::select('select * from demoTable');
    //  return $belts;
    // view()->share('catalog',$belts);
    $pdf = PDF::loadView('catalog',compact('belts'));
    
    return $pdf->download('catalog.pdf');
    // return view('welcome');
});
