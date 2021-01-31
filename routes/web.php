<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware(['auth','can:isAdmin'])->group(function () {

    Route::get('/','Admin\DashboardController@index')->name('admin');
    //Admin Dashboard
    Route::prefix('dashboard')->group(function () {

        //Dashboard Users
        Route::prefix('/user')->group(function () {
            //User Index
            Route::get('/','Admin\UserController@index')->name('admin.dashboard.user');
            //User Action
            Route::get('{user}/edit','Admin\UserController@edit')->name('admin.dashboard.user.edit');
            Route::get('/{user}/delete','Admin\UserController@destroy')->name('admin.dashboard.user.delete');
            //User Create
            Route::get('/create','Admin\UserController@create')->name('admin.dashboard.user.create');
            Route::post('/store','Admin\UserController@store')->name('admin.dashboard.user.store');
            //User Update
            Route::post('/update/{user}','Admin\UserController@update')->name('admin.dashboard.user.update');
            //User Settings
            Route::get('/setting','Admin\UserController@setting')->name('admin.dashboard.user.setting');
            //User Roles
            Route::get('/setting/role','Admin\UserController@indexRole')->name('admin.dashboard.user.setting.role');
            Route::get('/setting/create/role','Admin\UserController@createRole')->name('admin.dashboard.user.setting.create.role');
            Route::post('/setting/store/role','Admin\UserController@storeRole')->name('admin.dashboard.user.setting.store.role');
            Route::get('/setting/role/{role}/edit','Admin\UserController@editRole')->name('admin.dashboard.setting.role.edit');
            Route::post('/setting/update/{role}','Admin\UserController@updateRole')->name('admin.dashboard.user.setting.update.role');
            Route::get('/setting/role/{role}/delete','Admin\UserController@deleteRole')->name('admin.dashboard.user.setting.delete.role');
            //Add Blog Category
            //Route::post('/setting/add/category','Admin\UserController@addCategory')->name('admin.dashboard.blog.setting.add.category');
        });

        //Dashboard BLogs
        Route::prefix('/blog')->name('admin.dashboard.blog')->group(function () {
            Route::get('/','Admin\BlogController@index');
            Route::get('/create','Admin\BlogController@create')->name('.create');
            Route::get('/create', 'Admin\BlogController@create')->name('.create');
            Route::get('/{slug}/edit', 'Admin\BlogController@edit')->name('.edit');
            Route::delete('/{slug}', 'Admin\BlogController@destroy')->name('.delete');
            Route::get('/search', 'Blog\BlogSearchController')->name('.search');
            Route::get('/setting','Admin\BlogController@setting')->name('.setting');
            Route::post('/{slug}/status','Admin\BlogController@status')->name('.status');
            //Add Blog Category
            //Tour Tags
            Route::get('/setting/category','Admin\BlogController@indexCategory')->name('.setting.category');
            Route::get('/setting/create/category','Admin\BlogController@createCategory')->name('.setting.create.category');
            Route::post('/setting/store/category','Admin\BlogController@storeCategory')->name('.setting.store.category');
            Route::get('/setting/category/{slug}/edit','Admin\BlogController@editCategory')->name('.setting.category.edit');
            Route::post('/setting/update/{slug}','Admin\BlogController@updateCategory')->name('.setting.update.category');
            Route::get('/setting/category/{slug}/destroy','Admin\BlogController@destroyCategory')->name('.setting.destroy.category');

            //Route::post('/setting/add/category','Admin\BlogController@addCategory')->name('admin.dashboard.blog.setting.add.category');
        });

        //Tour Routes
        Route::prefix('/tour')->name('admin.dashboard.tour')->group(function () {
            Route::get('/', 'Admin\TourController@index');
            Route::post('/{slug}/status','Admin\TourController@status')->name('.status');
            Route::get('/create', 'Admin\TourController@create')->name('.create');
            Route::get('/{slug}/edit', 'Admin\TourController@edit')->name('.edit');
            Route::get('/{slug}/profile','Admin\TourController@profile')->name('.profile');
            Route::get('/setting','Admin\TourController@setting')->name('.setting');
            Route::get('/search', 'Tour\TourSearchController')->name('.search');

            //Tour Tags
            Route::get('/setting/tag','Admin\TourController@indexTag')->name('.setting.tag');
            Route::get('/setting/create/tag','Admin\TourController@createTag')->name('.setting.create.tag');
            Route::post('/setting/store/tag','Admin\TourController@storeTag')->name('.setting.store.tag');
            Route::get('/setting/tag/{tag}/edit','Admin\TourController@editTag')->name('.setting.tag.edit');
            Route::post('/setting/update/{tag}','Admin\TourController@updateTag')->name('.setting.update.tag');
            Route::get('/setting/tag/{tag}/destroy','Admin\TourController@destroyTag')->name('.setting.destroy.tag');

        });

        //Vehicle Routes
        Route::prefix('/vehicle')->name('admin.dashboard.vehicle')->group(function () {
            Route::get('/', 'Admin\VehicleController@index');
            Route::post('/{slug}/status','Admin\VehicleController@status')->name('.status');
            Route::get('/create', 'Admin\VehicleController@create')->name('.create');
            Route::get('/{slug}/edit', 'Admin\VehicleController@edit')->name('.edit');
//            Route::get('/{slug}/profile','Admin\TourController@profile')->name('.profile');
//            Route::get('/setting','Admin\TourController@setting')->name('.setting');
//            Route::get('/search', 'Tour\TourSearchController')->name('.search');
//
//            //Tour Tags
//            Route::get('/setting/tag','Admin\TourController@indexTag')->name('.setting.tag');
//            Route::get('/setting/create/tag','Admin\TourController@createTag')->name('.setting.create.tag');
//            Route::post('/setting/store/tag','Admin\TourController@storeTag')->name('.setting.store.tag');
//            Route::get('/setting/tag/{tag}/edit','Admin\TourController@editTag')->name('.setting.tag.edit');
//            Route::post('/setting/update/{tag}','Admin\TourController@updateTag')->name('.setting.update.tag');
//            Route::get('/setting/tag/{tag}/destroy','Admin\TourController@destroyTag')->name('.setting.destroy.tag');

        });

        //Hotel Routes
        Route::prefix('/hotel')->name('admin.dashboard.hotel')->group(function () {
            Route::get('/', 'Admin\HotelController@index');
            Route::post('/{slug}/status','Admin\HotelController@status')->name('.status');
            Route::get('/create', 'Admin\HotelController@create')->name('.create');
             // Route::post('/update', 'Admin\HotelController@update')->name('.update');
            Route::get('/{slug}/edit', 'Admin\HotelController@edit')->name('.edit');
//            Route::get('/{slug}/profile','Admin\TourController@profile')->name('.profile');
//            Route::delete('/{slug}', 'Admin\TourController@destroy')->name('.delete');
            Route::get('/setting','Admin\HotelController@setting')->name('.setting');
            Route::get('/search', 'Hotel\HotelSearchController')->name('.search');

              //Rooms Routes
               Route::prefix('/{slug}/room')->name('.room')->group(function () {
                   Route::get('/', 'Admin\RoomController@index')->name('.index');
                   Route::get('/create', 'Admin\RoomController@create')->name('.create');
                   Route::get('/store', 'Admin\RoomController@store')->name('.store');
                   Route::get('/edit/{room_slug}', 'Admin\RoomController@edit')->name('.edit');
                   Route::post('/{room_slug}/status/update', 'Admin\RoomController@status')->name('.status');
               });

               //Setting Routes
            Route::get('/setting/facility','Admin\HotelController@indexFacility')->name('.setting.facility');
            Route::get('/setting/create/facility','Admin\HotelController@createFacility')->name('.setting.create.facility');
            Route::post('/setting/store/facility','Admin\HotelController@storeFacility')->name('.setting.store.facility');
            Route::get('/setting/facility/{facility}/edit','Admin\HotelController@editFacility')->name('.setting.facility.edit');
            Route::post('/setting/update/{facility}','Admin\HotelController@updateFacility')->name('.setting.update.facility');
            Route::get('/setting/facility/{facility}/destroy','Admin\HotelController@destroyFacility')->name('.setting.destroy.facility');
        });

        //Booking Routes
        Route::prefix('/booking')->name('admin.dashboard.booking')->group(function () {
            //Tour
            Route::get('/tour', 'Admin\BookingController@tour')->name('.tour');
            Route::post('/{number}/tour/status/update','Admin\BookingController@status')->name('.tour.status');
            Route::post('/{number}/tour/payment/status/update','Admin\BookingController@paymentStatus')->name('.tour.payment.status');
            Route::get('/tour/search', 'Booking\SearchController@tour')->name('.tour.search');
            Route::delete('tour/order/{number}/delete', 'Tour\TourBookController@destroy')->name('.tour.delete');

            //Hotel
            Route::get('/hotel', 'Admin\HotelBookingController@hotel')->name('.hotel');
            Route::post('/{number}/hotel/status/update','Admin\HotelBookingController@status')->name('.hotel.status');
            Route::post('/{number}/hotel/payment/status/update','Admin\HotelBookingController@paymentStatus')->name('.hotel.payment.status');
            Route::get('/tour/search', 'Booking\SearchController@tour')->name('.tour.search');
            Route::delete('tour/order/{number}/delete', 'Tour\TourBookController@destroy')->name('.tour.delete');
        });

    });
    //Admin Profile
    Route::prefix('profile')->group(function () {
        Route::get('/','Admin\ProfileController@index')->name('admin.profile');
        Route::get('/verifications','Admin\ProfileController@verification')->name('admin.verification');
        Route::post('/update','Admin\ProfileController@update')->name('admin.update.profile');
        Route::post('/update/image','Admin\ProfileController@updateImage')->name('admin.update.image');
        Route::post('/update/password','Admin\ProfileController@updatePassword')->name('admin.update.password');
    });

});
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index')->name('home');
//User Profile
Route::prefix('profile')->middleware(['auth','can:notAdmin'])->group(function () {
    Route::get('/','User\ProfileController@index')->name('profile');
    Route::get('/verifications','User\ProfileController@verification')->name('user.verification');
    Route::post('/update','User\ProfileController@update')->name('update.profile');
    Route::post('/update/image','User\ProfileController@updateImage')->name('update.image');
    Route::post('/update/password','User\ProfileController@updatePassword')->name('update.password');
});
//User Dashboard
Route::prefix('dashboard')->middleware(['auth','can:notAdmin'])->group(function () {
    Route::get('/', 'User\DashboardController@index')->name('dashboard');
    //Blog Routes
    Route::prefix('blog')->middleware(['auth','can:notAdmin'])->group(function () {
        Route::get('/', 'User\BlogController@index')->name('dashboard.blog');
        Route::get('/create', 'User\BlogController@create')->name('dashboard.blog.create');
        Route::get('/{slug}/edit', 'User\BlogController@edit')->name('dashboard.blog.edit');
        Route::delete('/{slug}', 'User\BlogController@destroy')->name('dashboard.blog.delete');
        Route::get('/search', 'Blog\BlogSearchController')->name('dashboard.blog.search');
    });
    //Tour Routes
    Route::prefix('tour')->middleware(['auth','can:notAdmin'])->group(function () {
        Route::get('/', 'User\TourController@index')->name('dashboard.tour');
        Route::get('/create', 'User\TourController@create')->name('dashboard.tour.create');
        Route::get('/{slug}/edit', 'User\TourController@edit')->name('dashboard.tour.edit');
        Route::get('/search', 'Tour\TourSearchController')->name('dashboard.tour.search');
        Route::get('/{slug}/profile','User\TourController@profile')->name('dashboard.tour.profile');
        Route::get('/{slug}/status', 'User\TourController@status')->name('dashboard.tour.status.inactive');
    });
    //Hotel Routes
    Route::prefix('hotel')->middleware(['auth','can:notAdmin'])->name('dashboard.hotel')->group(function () {
        Route::get('/', 'User\HotelController@index');
        Route::get('/create', 'User\HotelController@create')->name('.create');
        Route::get('/{slug}/edit', 'User\HotelController@edit')->name('.edit');
        Route::get('/{slug}/profile','User\HotelController@profile')->name('.profile');
        Route::delete('/{slug}', 'User\HotelController@destroy')->name('.delete');
        Route::get('/{slug}/status', 'User\HotelController@status')->name('.status.inactive');
        Route::get('/search', 'Hotel\HotelSearchController')->name('.search');

        //Rooms Routes
        Route::prefix('/{slug}/room')->name('.room')->group(function () {
            Route::get('/', 'User\RoomController@index')->name('.index');
            Route::get('/create', 'User\RoomController@create')->name('.create');
            Route::get('/store', 'User\RoomController@store')->name('.store');
            Route::get('/edit/{room_slug}', 'User\RoomController@edit')->name('.edit');
            Route::post('/{room_slug}/status/update', 'User\RoomController@status')->name('.status');

        });
        //Bookings Routes
        Route::get('/bookings', 'User\HotelBookingController@index')->name('.bookings');
        Route::post('/bookings/{number}/status/update','User\HotelBookingController@status')->name('.hotel.status');


    });
    //My Bookings Routes
    Route::prefix('booking')->middleware(['auth','can:isStandard'])->group(function () {
        //Tour Book
        Route::get('/tour/{slug}/bookings','Tour\TourBookController@index')->name('dashboard.tour.book');
        Route::post('tour/{slug}/reserve','Tour\TourBookController@book')->name('dashboard.tour.book.store');
        Route::delete('tour/order/{number}/delete', 'Tour\TourBookController@destroy')->name('dashboard.tour.book.delete');

        //Tour Payment
        Route::get('tour/order/{number}/payment','Tour\TourBookController@payment')->name('dashboard.tour.book.payment');
        Route::post('tour/order/{number}/payment/easypaisa/trxid/store','Tour\TourBookController@storePayment')->name('dashboard.tour.book.payment.store');
        //Show Tour Bookings
        Route::get('/tour', 'User\BookingController@tour')->name('dashboard.tour.booking');

        //Hotel Room Book
        Route::get('/hotel/{slug}/room/{room_slug}/bookings','Hotel\HotelBookController@index')->name('dashboard.hotel.book');
        Route::post('hotel/{slug}/room/{room_slug}/reserve','Hotel\HotelBookController@book')->name('dashboard.hotel.book.store');
        Route::delete('hotel/order/{number}/delete', 'Hotel\HotelBookController@destroy')->name('dashboard.hotel.book.delete');
        //Hotel Payment
        Route::get('hotel/order/{number}/payment','Hotel\HotelBookController@payment')->name('dashboard.hotel.book.payment');
        Route::post('hotel/order/{number}/payment/easypaisa/trxid/store','Hotel\HotelBookController@storePayment')->name('dashboard.hotel.book.payment.store');
        //Show Tour Bookings
        Route::get('/hotel', 'User\BookingController@hotel')->name('dashboard.hotel.booking');

        //Payment For All
        Route::post('/order/{order_table}/{number}/payment/store','User\BookingController@store')->name('dashboard.payment.store');

    });
});
/*
|--------------------------------------------------------------------------
| User Profile Routes
|--------------------------------------------------------------------------
*/
Route::get('profile/{username}','HomeController@showProfile')->name('show.user.profile');

/*
|--------------------------------------------------------------------------
| Blogs Routes
|--------------------------------------------------------------------------
*/

Route::prefix('blog')->group(function (){
    //Blogs Images Upload From tinymc
    Route::post('/upload','Blog\BlogController@upload')->name('blog.upload');
    //Search Route
    Route::get('/search', 'Blog\BlogSearchController')->name('blog.search');
    //Blog Comment
    Route::post('/comment/create','CommentController@blogCreate')->name('blog.comment.create');
    Route::post('/comment/delete','CommentController@blogDelete')->name('blog.comment.delete');

});
Route::resource('/blog','Blog\BlogController');

/*
|--------------------------------------------------------------------------
| Tour Routes
|--------------------------------------------------------------------------
*/

Route::get('/tag/name',function (){
    $tag = \App\Tag::all()->pluck('name')->toArray();
    return response($tag);
})->name('tag.name');
Route::post('/{slug}/profile','Tour\TourController@profile')->name('tour.profile.store');
Route::get('/tour/search', 'Tour\TourSearchController')->name('tour.search');
Route::resource('/tour','Tour\TourController');


/*
|--------------------------------------------------------------------------
| Vehicle Routes
|--------------------------------------------------------------------------
*/

Route::resource('/vehicle','Vehicle\VehicleController');

/*
|--------------------------------------------------------------------------
| Hotel Routes
|--------------------------------------------------------------------------
*/
//search
Route::get('/hotel/search', 'Hotel\HotelSearchController')->name('hotel.search');
Route::resource('/hotel','Hotel\HotelController');
//rooms
Route::resource('/hotel/{slug}/room','Hotel\RoomController');



Route::get('/contactus','HomeController@contactus')->name('contactus');
















