<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;

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


Route::post('/userview',[userController::class,'store']);
Route::get('/usersignup',[userController::class,'create']);
Route::get('/lgout',[userController::class , 'lgout' ] );
Route::post('/userlogs',[userController::class,'check']);
route::get('/user/{id}/delete', [userController::class,'deleteview']);
route::post('/userdeleteprocess/{id}',[userController::class,'destroy']);


Route::post('/logs',[adminController::class,'check']);
Route::post('/add',[adminController::class,'store']);
Route::get('/logout',[adminController::class , 'logout' ] );
Route::get('/contactus',[adminController::class , 'contactus' ] );
Route::post('/usearch',[adminController::class,'usearch']);
Route::get('/',[adminController::class , 'indexhome' ] );

Route::post('/categoryread',[productController::class , 'store' ] );
Route::post('/productview',[productController::class , 'productview' ] );
route::get('/product/{id}/edit', [productController::class,'edit']);
route::post('/prodeditprocess/{id}',[productController::class,'update']);
Route::get('/productdelete/{id}/deleteview',[productController::class , 'proddelete' ] );
route::post('/proddeleteprocess/{id}',[productController::class,'destroy']);
route::get('/category/{id}/delete', [productController::class,'catdelete']);
route::post('/catdeleteprocess/{id}',[productController::class,'destroycat']);
Route::get('/cartadd/{FurnitureId}',[productController::class , 'cartadd' ] );
Route::get('/cartview',[productController::class , 'cartview' ] );
Route::get('/cartlist',[productController::class , 'cartlist' ] );
Route::get('removecart/{id}',[productController::class , 'removecart' ] );
Route::get('ordernow',[productController::class , 'ordernow' ] );
Route::post('/psearch',[productController::class,'search']);
Route::post('add_to_cart',[productController::class,'addtocart']);
Route::post('/orderplace',[productController::class,'orderplace']);
Route::get('/myorders',[productController::class,'myorder']);
Route::get('/vieworders',[productController::class , 'vieworders' ] );
Route::get('/orderdelete/{id}/deleteview',[productController::class , 'orderdelete' ] );
route::post('/orderdeleteprocess/{id}',[productController::class,'destroyorder']);
route::get('/order/{id}/edit', [productController::class,'orderedit']);
route::post('/ordereditprocess/{id}',[productController::class,'updateorder']);
route::get('/card', [productController::class,'card']);
route::get('/cancelorder/{id}/{userid}', [productController::class,'cancelorder']);

Route::get('/addadmin',[adminController::class , 'addadn' ] );
Route::group(['middleware'=>['AuthCheck']],function()
{

    Route::get('/adminlogin',[adminController::class , 'index' ] );
    Route::get('/adminhome',[adminController::class , 'create' ] );
   
    Route::get('/userview',[adminController::class , 'usrview' ] );
    Route::get('/addcategory',[productController::class , 'catview' ] );
    Route::get('/productview',[productController::class , 'prodview' ] );
    Route::get('/addproduct',[productController::class , 'create' ] );
   


});


Route::group(['middleware'=>['UserCheck']],function()
{    
    Route::get('/userlogin',[userController::class , 'usrlogin' ] );
    Route::get('/userhome',[userController::class,'usrhome']);
    Route::get('/allproducts',[userController::class,'allprod']);

});

