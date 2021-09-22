<?php
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pusher\Laravel\Facades\Pusher;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\GuzzleController;
use App\Http\Controllers\PaimentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\Paimentv2Controller;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UsersOnlineController;
use App\Http\Controllers\FeaturedBlogController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ResetPasswordController;
use Symfony\Component\Console\Output\StreamOutput;
use App\Http\Controllers\ProfileEmployeeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;



// Route::Redirect('/', '/fr');
Route::get('/', function(){

            $availableLangs = ['ar', 'en', 'it', 'de', 'sp', 'fr'];
            $first_browser_lang = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
            $browser_lang= Str::of($first_browser_lang)->explode('_');

            if( in_array($browser_lang[0], $availableLangs) ) {
                    $langSelected = $browser_lang[0];
                }
                else{
                     $langSelected  = 'en';

                }

            return redirect('/'.$langSelected);
});

Route::group(['prefix'=>'{language}'], function(){

// front controller
// products
    Route::post('/upload-img', [LabController::class, "uploadImage"])->name('upload-img');

    Route::get('/', [ProductController::class, "index"])->name('welcome');

       // affichage page details produit
    Route::get('/product', [ProductController::class, "show"])->name('details-product');

    Route::get('/about', [AboutController::class, 'showUsers'])->name('about');
// blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('/blog-detail', [BlogController::class, 'show'])->name('blog-detail');
    Route::get('/blog-category', [BlogController::class, 'showCategory'])->name('blog-category');

    Route::get('/about-pdf', [AboutController::class, 'pdfAbout'])->name('about-pdf');
    Route::get('/broadcast', [BroadcastController::class, 'broadcastMessage'])->name('broadcast-message');

// broadcasting
    Route::get('/broadcast-sender', [BroadcastController::class, 'sendBroadcastView'])->name('send-broadcast-view');
    Route::post('/broadcast-sender', [BroadcastController::class, 'sendBroadcast'])->name('send-broadcast');

    Route::get('/broadcast-receiver', [BroadcastController::class, 'receiveBroadcast'])->name('receive-broadcast');
    Route::post('/broadcast-receiver', [BroadcastController::class, 'sendBroadcastReply'])->name('reply-broadcast');

 // maintenance

  //Clear cache:
			// Route::get('/cache-clear', function() {
			// 	$status = Artisan::call('cache:clear');
			// 	return "<h1>Cache cleared ,  $status </h1>";
			// });

        Route::get('/run-python', [LabController::class, 'runPythonFunc']);
        Route::get('/run-node', [LabController::class, 'runNodeFunc']);
        Route::get('/run-pwd', [LabController::class, 'runPwdFunc']);
        Route::get('/run-install-node', [LabController::class, 'installNodeFunc']);

       // php artisan optimize
       // php artisan config:cache
       // php artisan route:cache

			Route::get('/route-cache', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('route:cache', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});
			Route::get('/config-cache', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('config:cache', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});
			Route::get('/optimize', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('optimize', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});
			Route::get('/migrate', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('migrate', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/storage-link', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('storage:link', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>response artisan:   $callResponse  </h1>";
			});

			Route::get('/cache-clear', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('cache:clear', [
                    // '--path' => 'database/migrations/customer',
                    // '--force' => true,
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h1>Cache cleared ,   $callResponse  </h1>";
			});

			Route::get('/queue-monitor', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('queue:monitor database:default', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});

			Route::get('/queue-listen', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('queue:listen', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});

            Route::get('/queue-clear', function() {
                $stream = fopen("php://output", "w");
                Artisan::call('queue:clear', [
                    // '--connection' => 'database',
                    //  '--queue' => 'default',
                    // '--database' => $connectionName
                ], new StreamOutput($stream));

                $callResponse = ob_get_clean();

				return "<h5>$callResponse</h5>";
			});



//auth

    Route::get('/login-form', [LoginController::class, 'loginFormDisplay'])
            ->name('login')->middleware('xguest');

    Route::post('/login', [LoginController::class, 'authLogin'])
            ->name('auth-login');

    Route::get('/register-form', [LoginController::class, 'registerFormDisplay'])
            ->name('register-form')->middleware('xguest');

    Route::post('/register', [LoginController::class, 'authRegister'])
            ->name('auth-register');

    Route::get('/logout', [LoginController::class, 'authLogout'])
            ->name('auth-logout')->middleware('xauth');


// backend controller
// profil non admin 
    Route::prefix('home')->middleware(['xauth', 'xverify'])->group(function(){

        Route::get('/profile-employee/{id}', function () {  return view('backoffice.profiles.employee.home');})
        ->name('profile-employee');

        Route::get('/profile-client/{id}', function () {  return view('backoffice.profiles.client.home'); })
                ->name('profile-client');

        Route::get('/profile-vendeur/{id}', function () {  return view('backoffice.profiles.vendeur.home'); })
                ->name('profil-vendeur');
    });

// profil admin only

    Route::prefix('backoffice')->middleware(['xauth', 'xverify', 'role:admin'])->group(function(){


        Route::get('/profile-admin/{id?}', function () {  return view('backoffice.profiles.admin.home');})
             ->name('profile-admin');

       

// admin manage categories
        Route::get('/admin-manage-categories', [CategoryController::class, 'index'])
                    ->name('admin-manage-categories');
            Route::get('/admin-create-category', [CategoryController::class, 'create'])
                        ->name('admin-category-create-view');
            Route::post('/admin-store-category', [CategoryController::class, 'store'])
                        ->name('admin-category-store');

            Route::get('/admin-edit-category/{id}', [CategoryController::class, 'edit'])
                        ->name('admin-category-edit-view');
            Route::put('/admin-update-category/{id}', [CategoryController::class, 'update'])
                        ->name('admin-category-update');
            Route::delete('/admin-delete-category/{id}', [CategoryController::class, 'destroy'])
                        ->name('admin-category-delete');


// admin manage sub categories
        Route::get('/admin-manage-subcategories', [SubCategoryController::class, 'index'])
                    ->name('admin-manage-subcategories');

            Route::get('/admin-create-subcategory', [SubCategoryController::class, 'create'])
                        ->name('admin-subcategory-create-view');
            Route::post('/admin-store-subcategory', [SubCategoryController::class, 'store'])
                        ->name('admin-subcategory-store');
            Route::get('/admin-edit-subcategory/{id}', [SubCategoryController::class, 'edit'])
                        ->name('admin-subcategory-edit-view');
            Route::put('/admin-update-subcategory/{id}', [SubCategoryController::class, 'update'])
                        ->name('admin-subcategory-update');
            Route::delete('/admin-delete-subcategory/{id}', [SubCategoryController::class, 'destroy'])
                        ->name('admin-subcategory-delete');

// admin manage products
        Route::get('/admin-manage-products', [ProductController::class, 'productsIndexAdmin'])
                    ->name('admin-manage-products');
            Route::get('/admin-create-product', [ProductController::class, 'create'])
                        ->name('admin-product-create-view');
            Route::post('/admin-store-product', [ProductController::class, 'store'])
                        ->name('admin-product-store');
            Route::get('/admin-edit-product/{id}', [ProductController::class, 'edit'])
                        ->name('admin-product-edit-view');
            Route::put('/admin-update-product/{id}', [ProductController::class, 'update'])
                        ->name('admin-product-update');
            Route::delete('/admin-delete-product/{id}', [ProductController::class, 'destroy'])
                        ->name('admin-product-delete');

// admin manage Featured blog
        Route::get('/admin-manage-featured-blogs', [FeaturedBlogController::class, 'blogsFeaturedIndexAdmin'])
                    ->name('admin-manage-featured-blogs');
            Route::get('/admin-create-featured-blog', [FeaturedBlogController::class, 'create'])
                        ->name('admin-featured-blog-create-view');
            Route::post('/admin-store-featured-blog', [FeaturedBlogController::class, 'store'])
                        ->name('admin-featured-blog-store');
            Route::get('/admin-edit-featured-blog', [FeaturedBlogController::class, 'edit'])
                        ->name('admin-featured-blog-edit-view');
            Route::put('/admin-update-featured-blog', [FeaturedBlogController::class, 'update'])
                        ->name('admin-featured-blog-update');
            Route::delete('/admin-delete-featured-blog', [FeaturedBlogController::class, 'destroy'])
                        ->name('admin-featured-blog-delete');

// admin manage  blogs
        Route::get('/admin-manage-blogs', [BlogController::class, 'blogsIndexAdmin'])
                    ->name('admin-manage-blogs');
            Route::get('/admin-create-blog', [BlogController::class, 'create'])
                        ->name('admin-blog-create-view');
            Route::post('/admin-store-blog', [BlogController::class, 'store'])
                        ->name('admin-blog-store');
            Route::get('/admin-edit-blog', [BlogController::class, 'edit'])
                        ->name('admin-blog-edit-view');
            Route::put('/admin-update-blog', [BlogController::class, 'update'])
                        ->name('admin-blog-update');
            Route::delete('/admin-delete-blog', [BlogController::class, 'destroy'])
                        ->name('admin-blog-delete');


    });


        //password reset
    // view password email form
        Route::get('/forgot-password', [ResetPasswordController::class, "passwordEmailForm"])
                ->middleware('xguest')->name('password.request');

    // send reset link to mail recepient
        Route::post('/forgot-password', [ResetPasswordController::class, "passwordResetLink"])
                ->middleware('xguest')->name('password.email');

    // generating reset form view when click reset link from mail recipient
        Route::get('/reset-password', [ResetPasswordController::class, "passwordResetForm"])
                ->middleware('xguest')->name('password.reset');

    // reset password finaly in db
        Route::post('/reset-password', [ResetPasswordController::class, "passwordUpdate"])
                ->middleware('xguest')->name('password.update');


    // email verification after registration
    // verification screen
        Route::get('/verification-form', [VerificationController::class, "verifyEmailView"])
                ->middleware('xauth')->name('verification-form');

    // if user delete the first mail notice
        Route::post('/verification-resend-link', [VerificationController::class, "verifyEmailLink"])
                ->middleware(['xauth', 'throttle:6,1'])->name('verification-resend');

     // handle request after click email link , 'signed'
        Route::get('/verification-callback', [VerificationController::class, "handleVerifyCallback"])
                ->middleware(['xauth'])->name('verification-callback');



    //services
    // socialite
     // socialite
    // La redirection vers le provider 
    Route::get("redirect/{provider}", [SocialiteController::class,"redirect"])->name('socialite.redirect');

    // Le callback du provider
    Route::get("callback/{provider}", [SocialiteController::class,"callback"])->name('socialite.callback');





// end prefix language
});


// UserController crud
    Route::get('/users', [userController::class, "index"])
        ->name('users-list');

    // affichage page details user
    Route::get('/user-detail/{id}', [UserController::class, "show"])->name('user-detail');

    Route::prefix('backoffice')->middleware(['auth', 'role:admin'])->group(function(){

        Route::patch('/user/{id}', [UserController::class, "update"])->middleware('auth')->name('update-user');
        // delete  product
        Route::delete('/user/{id}', [UserController::class, "delete"])->name('delete-user');
        // view deleted/trashed  products
        Route::get('/trashed-users', [UserController::class, "viewTrashedUsers"])->name('view-trashed-users');
        // restore product
        Route::post('/restore-user/{id}', [UserController::class, "restore"])->name('restore-user');
    });

// cart controller
// add to cart
    Route::get('/acheter/{product}', [CartController::class, "addToCart"])->name('cart-add');
    // view cart page
    Route::get('/cart-content', [CartController::class, "viewCart"])->name('cart-show');
    // view cart page
    Route::get('/cart-effacer', [CartController::class, "destroyCart"])->name('cart-destroy');
    // remove item
    Route::get('/cart-effacer-item/{rowId}', [CartController::class, "removeCartitem"])->name('remove-cart-item');
    // increment quantity by one
    Route::get('/cart-incrementer/{rowId}', [CartController::class, "incrementCartQty"])->name('increment-cart-qte');
    // decrement quantity by one
    Route::get('/cart-decrementer/{rowId}', [CartController::class, "decrementCartQty"])->name('decrement-cart-qte');

// payment ala livraison
//
    Route::get('/payment-livraison', function () { return view('paiement.paiement-livraison');})->name('payment-livraison');

// search products algolia or scout




//SERVICE MAIL EVENT COMMAND JOB SCHEDULER , LINK SDK SOCIALITE PAYPAL STRILE ZOHO CRM GMAP ETC guzzle
 ///////////////////////////////////////////////////////////////////////////////////////////
    //mail route
    Route::get('/send-email', [MailController::class, "sendMail"])->name('send.mail');

     // payment Stripe stripe/stripe-php
    Route::post('/payment-stripe-execution', [Paimentv2Controller::class, "paimentStripeExecute"])->name('payment-stripe-execution');


   //paypal paiement Controller paypal/Checkout-PHP-SDK
    // create order
        Route::post('/paiment-proceed', [Paimentv2Controller::class, "createOrder"])->name('create-order');
        //  return url
        Route::get('/capture-order', [Paimentv2Controller::class, "captureOrder"])->name('capture-order');
        // cancel url
        Route::get('/paiment-cancel', [Paimentv2Controller::class, "paimentCancelv2"])->name('paiment-cancel');

        // payment-success paypal
        Route::get('/payment-success', function () { return view('paiement.paiement-success');})->name('payment-success');
        //payment-fail
        Route::get('/payment-fail', function () { return view('paiement.paiement-fail');})->name('payment-fail');

   // guzzle http client
       Route::get('/guzzle' , [GuzzleController::class, 'GuzzleView'])->name('view-guzzle');

   // chart laravel chart
       // products stats
       Route::get('/product-stats' , [ChartController::class, 'productStats'])->name('product-stats');
       // products stats
       Route::get('/user-stats' , [ChartController::class, 'usersStats'])->name('user-stats');


