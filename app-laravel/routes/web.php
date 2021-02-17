<?php

use Illuminate\Support\Facades\Route;

Route::resource('products', 'ProductController');



/*
Route::group([
    'prefix' => 'products'
],function(){
    Route::name('products.')->group(function(){
        Route::delete('{id}', 'ProductController@destroy')->name('destroy');
        Route::put('{id}', 'ProductController@update')->name('update');
        Route::get('{id}/edit', 'ProductController@edit')->name('edit');
        Route::get('create', 'ProductController@create')->name('create');
        Route::get('{id}', 'ProductController@show')->name('show');
        Route::get('/', 'ProductController@index')->name('index');
        Route::post('/', 'ProductController@store')->name('store');
    });
});
*/

/*
Route::middleware([])->group(function(){

    Route::prefix('admin')->group(function(){ 
        
        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

                Route::get('/produtos', 'TesteController@teste')->name('produtos');
        
                Route::get('/', function(){
                    return redirect()->route('admi.dashboard');
                })->name('home'); 
            });

        });
        
    });

});
*/

Route::get('/login', function(){
    return 'Login';
})->name('login');

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function(){
    Route::name('admin.')->group(function(){
        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

        Route::get('/produtos', 'TesteController@teste')->name('produtos');
        
        Route::get('/', function(){
            return redirect()->route('admin.dashboard');
        })->name('home'); 
    });
});

Route::get('redirect3',function (){
    return redirect()->route('url.name');
});

Route::get('/nome-url', function(){
    return '*<br>**<br>***<br>****<br>*****';
})->name('url.name');

Route::view('/view', 'welcome', ['id' => 'teste']);

Route::redirect('/redirect1', '/redirect2');

// Route::get('redirect1',function (){
//     return redirect('/redirect2');
// });

Route::get('redirect2',function (){
    return 'Redirect 02';
});


Route::get('/produtos/{idProduct?}', function ($idProduct = ''){
    return "Produto(s) {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::get('/categorias/{flag}', function ($prm1) {
    return "Produtos da categoria: {$prm1}";
});

Route::match(['post','get'], '/match', function (){
    return 'match';
});

Route::any('/any', function () {
    return 'any';
});

Route::post('/register', function () {
    return '';
});

Route::get('/empresa', function (){
    return view('site.contact');
});

Route::get('/contato', function () {
    return 'Contato';
});

Route::get('/', function () {
    return view('welcome');
});
