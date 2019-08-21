<?php

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
Route::prefix('/')->group(function(){
Route::get('/', 'Web\index_cont@index')->name('View.index');
Route::get('/Sublimation/{type}', 'Web\sublimation_cont@sublimation')->name('sublimation.page');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Admin/Main', function (){

    return view('Admin.Main.index_view');
})->name('index');


Route::prefix('/Admin')->group(function (){


  Route::prefix('/Messages')->group(function () {




      Route::get('/Add', 'Admin\Messages\messages_cont@add')->name('messages.add');
      Route::post('/Add', 'Admin\Messages\messages_cont@add')->name('messages.add');

      Route::get('/{type}', 'Admin\Messages\messages_cont@index','product')->name('messages.index');

      Route::get('/update/{id}', 'Admin\Messages\messages_cont@update')->name('messages.update');
      Route::post('/update/{id}', 'Admin\Messages\messages_cont@update')->name('messages.update');

      Route::get('/read/{id}', 'Admin\Messages\messages_cont@read')->name('messages.read');
      Route::post('/read/{id}', 'Admin\Messages\messages_cont@read')->name('messages.read');

      Route::get('/delete/{id}', 'Admin\Messages\messages_cont@delete')->name('messages.delete');
      Route::post('/delete/{id}', 'Admin\Messages\messages_cont@delete')->name('messages.delete');
  });

  Route::prefix('/Machines-Video')->group(function () {


      Route::get('/{type}', 'Admin\Video\video_cont@index','product')->name('machineVideo.index');

      Route::get('/Add/{type}', 'Admin\Video\video_cont@add')->name('machineVideo.add');
      Route::post('/Add/{type}', 'Admin\Video\video_cont@add')->name('machineVideo.add');


      Route::get('/update/{id}', 'Admin\Video\video_cont@update')->name('machineVideo.update');
      Route::post('/update/{id}', 'Admin\Video\video_cont@update')->name('machineVideo.update');


      Route::get('/delete/{id}/{type}', 'Admin\Video\video_cont@delete')->name('machineVideo.delete');
      Route::post('/delete/{id}/{type}', 'Admin\Video\video_cont@delete')->name('machineVideo.delete');
  });



  Route::prefix('/Products-Video')->group(function () {


      Route::get('/{type}', 'Admin\Video\video_cont@index','product')->name('productVideo.index');

      Route::get('/Add/{type}', 'Admin\Video\video_cont@add')->name('productVideo.add');
      Route::post('/Add/{type}', 'Admin\Video\video_cont@add')->name('productVideo.add');


      Route::get('/update/{id}', 'Admin\Video\video_cont@update')->name('productVideo.update');
      Route::post('/update/{id}', 'Admin\Video\video_cont@update')->name('productVideo.update');


      Route::get('/delete/{id}/{type}', 'Admin\Video\video_cont@delete')->name('productVideo.delete');
      Route::post('/delete/{id}/{type}', 'Admin\Video\video_cont@delete')->name('productVideo.delete');
  });
  Route::prefix('/Users-Accounts')->group(function () {


      Route::get('/', 'Admin\Users\users_cont@index')->name('users.index');

      Route::get('/Add', 'Admin\Users\users_cont@add')->name('users.add');
      Route::post('/Add', 'Admin\Users\users_cont@add')->name('users.add');


      Route::get('/update/{id}', 'Admin\Users\users_cont@update')->name('users.update');
      Route::post('/update/{id}', 'Admin\Users\users_cont@update')->name('users.update');


      Route::get('/delete/{id}', 'Admin\Users\users_cont@delete')->name('users.delete');
      Route::post('/delete/{id}', 'Admin\Users\users_cont@delete')->name('users.delete');
  });
  Route::prefix('/New-items')->group(function () {


      Route::get('/', 'Admin\whatsNew\whatsNew_cont@index')->name('whatsNew.index');

      Route::get('/Add', 'Admin\whatsNew\whatsNew_cont@add')->name('whatsNew.add');
      Route::post('/Add', 'Admin\whatsNew\whatsNew_cont@add')->name('whatsNew.add');


      Route::get('/update/{id}', 'Admin\whatsNew\whatsNew_cont@update')->name('whatsNew.update');
      Route::post('/update/{id}', 'Admin\whatsNew\whatsNew_cont@update')->name('whatsNew.update');


      Route::get('/delete/{id}', 'Admin\whatsNew\whatsNew_cont@delete')->name('whatsNew.delete');
      Route::post('/delete/{id}', 'Admin\whatsNew\whatsNew_cont@delete')->name('whatsNew.delete');
  });
    Route::prefix('/Contact-Info')->group(function () {




        Route::get('/Add', 'Admin\ContactInfo\contactInfo_cont@add')->name('contactInfo.add');
        Route::post('/Add', 'Admin\ContactInfo\contactInfo_cont@add')->name('contactInfo.add');
        Route::get('/{type}', 'Admin\ContactInfo\contactInfo_cont@index')->name('contactInfo.index');

        Route::get('/update/{id}', 'Admin\ContactInfo\contactInfo_cont@update')->name('contactInfo.update');
        Route::post('/update/{id}', 'Admin\ContactInfo\contactInfo_cont@update')->name('contactInfo.update');

        Route::get('/read/{id}', 'Admin\ContactInfo\contactInfo_cont@read')->name('contactInfo.read');
        Route::post('/read/{id}', 'Admin\ContactInfo\contactInfo_cont@read')->name('contactInfo.read');


        Route::get('/delete/{id}', 'Admin\ContactInfo\contactInfo_cont@delete')->name('contactInfo.delete');
        Route::post('/delete/{id}', 'Admin\ContactInfo\contactInfo_cont@delete')->name('contactInfo.delete');
    });

    Route::prefix('/Ghost')->group(function () {


        Route::prefix('/')->group(function () {


            Route::get('/', 'Admin\Ghost\ghost_cont@index')->name('Ghost');

            Route::get('/Add', 'Admin\Ghost\ghost_cont@add')->name('ghost.add');
            Route::post('/Add', 'Admin\Ghost\ghost_cont@add')->name('ghost.add');


            Route::get('/update/{id}', 'Admin\Ghost\ghost_cont@update')->name('ghost.update');
            Route::post('/update/{id}', 'Admin\Ghost\ghost_cont@update')->name('ghost.update');


            Route::get('/delete/{id}', 'Admin\Ghost\ghost_cont@delete')->name('ghost.delete');
            Route::post('/delete/{id}', 'Admin\Ghost\ghost_cont@delete')->name('ghost.delete');
        });

        Route::prefix('/Product-Ghost')->group(function () {


            Route::get('/', 'Admin\Ghost\subGhost_cont@index')->name('subghost.index');

            Route::get('/Add', 'Admin\Ghost\subGhost_cont@add')->name('subghost.add');
            Route::post('/Add', 'Admin\Ghost\subGhost_cont@add')->name('subghost.add');


            Route::get('/update/{id}', 'Admin\Ghost\subGhost_cont@update')->name('subghost.update');
            Route::post('/update/{id}', 'Admin\Ghost\subGhost_cont@update')->name('subghost.update');


            Route::get('/delete/{id}', 'Admin\Ghost\subGhost_cont@delete')->name('subghost.delete');
            Route::post('/delete/{id}', 'Admin\Ghost\subGhost_cont@delete')->name('subghost.delete');
        });

        Route::prefix('/Info-Ghost')->group(function () {


            Route::get('/', 'Admin\Ghost\infoGhost_cont@index')->name('infoghost.index');

            Route::get('/Add', 'Admin\Ghost\infoGhost_cont@add')->name('infoghost.add');
            Route::post('/Add', 'Admin\Ghost\infoGhost_cont@add')->name('infoghost.add');


            Route::get('/update/{id}', 'Admin\Ghost\infoGhost_cont@update')->name('infoghost.update');
            Route::post('/update/{id}', 'Admin\Ghost\infoGhost_cont@update')->name('infoghost.update');


            Route::get('/delete/{id}', 'Admin\Ghost\infoGhost_cont@delete')->name('infoghost.delete');
            Route::post('/delete/{id}', 'Admin\Ghost\infoGhost_cont@delete')->name('infoghost.delete');
        });

    });


    Route::prefix('/Machine')->group(function () {


        Route::prefix('/typeMachine')->group(function () {


            Route::get('/', 'Admin\Machine\typeMachine_cont@index')->name('typeMachine.index');

            Route::get('/Add', 'Admin\Machine\typeMachine_cont@add')->name('typeMachine.add');
            Route::post('/Add', 'Admin\Machine\typeMachine_cont@add')->name('typeMachine.add');


            Route::get('/update/{id}', 'Admin\Machine\typeMachine_cont@update')->name('typeMachine.update');
            Route::post('/update/{id}', 'Admin\Machine\typeMachine_cont@update')->name('typeMachine.update');


            Route::get('/delete/{id}', 'Admin\Machine\typeMachine_cont@delete')->name('typeMachine.delete');
            Route::post('/delete/{id}', 'Admin\Machine\typeMachine_cont@delete')->name('typeMachine.delete');
        });
        Route::prefix('/show-Machine')->group(function () {


            Route::get('/', 'Admin\Machine\machine_cont@index')->name('machines.index');

            Route::get('/Add', 'Admin\Machine\machine_cont@add')->name('machine.add');
            Route::post('/Add', 'Admin\Machine\machine_cont@add')->name('machine.add');


            Route::get('/update/{id}', 'Admin\Machine\machine_cont@update')->name('machine.update');
            Route::post('/update/{id}', 'Admin\Machine\machine_cont@update')->name('machine.update');


            Route::get('/delete/{id}', 'Admin\Machine\machine_cont@delete')->name('machine.delete');
            Route::post('/delete/{id}', 'Admin\Machine\machine_cont@delete')->name('machine.delete');
        });


        Route::prefix('/Machine-Images')->group(function () {


            Route::get('/', 'Admin\Machine\galleryMachine_cont@index')->name('galleryMachine.index');

            Route::get('/Add', 'Admin\Machine\galleryMachine_cont@add')->name('galleryMachine.add');
            Route::post('/Add', 'Admin\Machine\galleryMachine_cont@add')->name('galleryMachine.add');


            Route::get('/update/{id}', 'Admin\Machine\galleryMachine_cont@update')->name('galleryMachine.update');
            Route::post('/update/{id}', 'Admin\Machine\galleryMachine_cont@update')->name('galleryMachine.update');


            Route::get('/delete/{id}', 'Admin\Machine\galleryMachine_cont@delete')->name('imageM.delete');
            Route::post('/delete/{id}', 'Admin\Machine\galleryMachine_cont@delete')->name('imageM.delete');

        });



    });

    Route::prefix('/Product')->group(function () {


        Route::prefix('/Kinds')->group(function () {


            Route::get('/', 'Admin\Product\typeP_cont@index')->name('typep.index');

            Route::get('/Add', 'Admin\Product\typeP_cont@add')->name('typep.add');
            Route::post('/Add', 'Admin\Product\typeP_cont@add')->name('typep.add');


            Route::get('/update/{id}', 'Admin\Product\typeP_cont@update')->name('typep.update');
            Route::post('/update/{id}', 'Admin\Product\typeP_cont@update')->name('typep.update');


            Route::get('/delete/{id}', 'Admin\Product\typeP_cont@delete')->name('typep.delete');
            Route::post('/delete/{id}', 'Admin\Product\typeP_cont@delete')->name('typep.delete');
        });
        Route::prefix('/Type-Product')->group(function () {


            Route::get('/', 'Admin\Product\typeProduct_cont@index')->name('typeProduct.index');

            Route::get('/Add', 'Admin\Product\typeProduct_cont@add')->name('typeProduct.add');
            Route::post('/Add', 'Admin\Product\typeProduct_cont@add')->name('typeProduct.add');


            Route::get('/update/{id}', 'Admin\Product\typeProduct_cont@update')->name('typeProduct.update');
            Route::post('/update/{id}', 'Admin\Product\typeProduct_cont@update')->name('typeProduct.update');


            Route::get('/delete/{id}', 'Admin\Product\typeProduct_cont@delete')->name('typeProduct.delete');
            Route::post('/delete/{id}', 'Admin\Product\typeProduct_cont@delete')->name('typeProduct.delete');
        });
        Route::prefix('/All-Products')->group(function () {


            Route::get('/', 'Admin\Product\Product_cont@index')->name('product.index');

            Route::get('/Add', 'Admin\Product\Product_cont@add')->name('product.add');
            Route::post('/Add', 'Admin\Product\Product_cont@add')->name('product.add');


            Route::get('/update/{id}', 'Admin\Product\Product_cont@update')->name('product.update');
            Route::post('/update/{id}', 'Admin\Product\Product_cont@update')->name('product.update');


            Route::get('/delete/{id}', 'Admin\Product\Product_cont@delete')->name('product.delete');
            Route::post('/delete/{id}', 'Admin\Product\Product_cont@delete')->name('product.delete');
        });
        Route::prefix('/Data-Products')->group(function () {


            Route::get('/', 'Admin\Product\data_cont@index')->name('data.index');

            Route::get('/Add', 'Admin\Product\data_cont@add')->name('data.add');
            Route::post('/Add', 'Admin\Product\data_cont@add')->name('data.add');


            Route::get('/update/{id}', 'Admin\Product\data_cont@update')->name('data.update');
            Route::post('/update/{id}', 'Admin\Product\data_cont@update')->name('data.update');


            Route::get('/delete/{id}', 'Admin\Product\data_cont@delete')->name('data.delete');
            Route::post('/delete/{id}', 'Admin\Product\data_cont@delete')->name('data.delete');
        });
        Route::prefix('/Product-Images')->group(function () {


            Route::get('/', 'Admin\Product\galleryProduct_cont@index')->name('galleryProduct.index');

            Route::get('/Add', 'Admin\Product\galleryProduct_cont@add')->name('galleryProduct.add');
            Route::post('/Add', 'Admin\Product\galleryProduct_cont@add')->name('galleryProduct.add');


            Route::get('/update/{id}', 'Admin\Product\galleryProduct_cont@update')->name('galleryProduct.update');
            Route::post('/update/{id}', 'Admin\Product\galleryProduct_cont@update')->name('galleryProduct.update');


            Route::get('/delete/{id}', 'Admin\Product\galleryProduct_cont@delete')->name('image.delete');
            Route::post('/delete/{id}', 'Admin\Product\galleryProduct_cont@delete')->name('image.delete');

        });






    });

    Route::prefix('/Free-Gallery')->group(function () {



        Route::prefix('/Type-Gallery')->group(function () {


            Route::get('/', 'Admin\Gallery\galleryClass_cont@index')->name('galleryClass.index');

            Route::get('/Add', 'Admin\Gallery\galleryClass_cont@add')->name('galleryClass.add');
            Route::post('/Add', 'Admin\Gallery\galleryClass_cont@add')->name('galleryClass.add');


            Route::get('/update/{id}', 'Admin\Gallery\galleryClass_cont@update')->name('galleryClass.update');
            Route::post('/update/{id}', 'Admin\Gallery\galleryClass_cont@update')->name('galleryClass.update');


            Route::get('/delete/{id}', 'Admin\Gallery\galleryClass_cont@delete')->name('galleryClass.delete');
            Route::post('/delete/{id}', 'Admin\Gallery\galleryClass_cont@delete')->name('galleryClass.delete');
        });
        Route::prefix('/Galleries')->group(function () {


            Route::get('/', 'Admin\Gallery\gallery_cont@index')->name('gallery.index');

            Route::get('/Add', 'Admin\Gallery\gallery_cont@add')->name('gallery.add');
            Route::post('/Add', 'Admin\Gallery\gallery_cont@add')->name('gallery.add');


            Route::get('/update/{id}', 'Admin\Gallery\gallery_cont@update')->name('gallery.update');
            Route::post('/update/{id}', 'Admin\Gallery\gallery_cont@update')->name('gallery.update');


            Route::get('/delete/{id}', 'Admin\Gallery\gallery_cont@delete')->name('gallery.delete');
            Route::post('/delete/{id}', 'Admin\Gallery\gallery_cont@delete')->name('gallery.delete');
        });






    });


    Route::prefix('/Monthly-Special-Offer')->group(function () {


        Route::prefix('/Offers')->group(function () {


            Route::get('/', 'Admin\Offer\monthlySpecail_cont@index')->name('monthlySpecail.index');

            Route::get('/Add', 'Admin\Offer\monthlySpecail_cont@add')->name('monthlySpecail.add');
            Route::post('/Add', 'Admin\Offer\monthlySpecail_cont@add')->name('monthlySpecail.add');


            Route::get('/update/{id}', 'Admin\Offer\monthlySpecail_cont@update')->name('monthlySpecail.update');
            Route::post('/update/{id}', 'Admin\Offer\monthlySpecail_cont@update')->name('monthlySpecail.update');


            Route::get('/delete/{id}', 'Admin\Offer\monthlySpecail_cont@delete')->name('monthlySpecail.delete');
            Route::post('/delete/{id}', 'Admin\Offer\monthlySpecail_cont@delete')->name('monthlySpecail.delete');
        });
        Route::prefix('/Offers-Details')->group(function () {


            Route::get('/', 'Admin\Offer\specialDetalis_cont@index')->name('special.index');

            Route::get('/Add', 'Admin\Offer\specialDetalis_cont@add')->name('special.add');
            Route::post('/Add', 'Admin\Offer\specialDetalis_cont@add')->name('special.add');


            Route::get('/update/{id}', 'Admin\Offer\specialDetalis_cont@update')->name('special.update');
            Route::post('/update/{id}', 'Admin\Offer\specialDetalis_cont@update')->name('special.update');


            Route::get('/delete/{id}', 'Admin\Offer\specialDetalis_cont@delete')->name('special.delete');
            Route::post('/delete/{id}', 'Admin\Offer\specialDetalis_cont@delete')->name('special.delete');
        });




    });












});
