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


Route::get('/', 'HomeController@index')->name('index');

Route::get('/{role_id}/signup', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/categories/{slug}', 'CategoriesController@show')->name('categories.template')->where('slug', '[\w\d\-\_]+');

Route::get('/request_quote', 'HomeController@request')->name('request');
Route::post('/request_quote', 'HomeController@store')->name('request.store');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::prefix('career')->group(function() {
	Route::get('/', 'CareerController@index')->name('career');
	Route::get('/accountant', 'CareerAccountantController@index')->name('accountant');
	Route::post('/accountant', 'CareerAccountantController@sendmail')->name('career.accountant');
	Route::get('/seo', 'CareerSeoController@index')->name('seo');
	Route::post('/seo', 'CareerSeoController@sendmail')->name('career.seo');
	Route::get('/analyst', 'CareerAnalystController@index')->name('analyst');
	Route::post('/analyst', 'CareerAnalystController@sendmail')->name('career.analyst');
	Route::get('/redirect', 'CareerController@redirect')->name('career.redirect');
});

Route::get('/advertisement', 'AdvertController@index')->name('advertisement');

Route::get('/faq', 'FaqController@index')->name('faq');

Route::get('/cost_guide', 'CostGuideController@index')->name('costguide');

Route::get('/contractors', 'ContractorController@index')->name('contractors');
Route::post('/contractors', 'ContractorController@store')->name('contractors.store');
Route::get('/contractors/{slug}', 'ContractorController@show')->name('contractors.template');

Route::get('/market_place', 'MarketController@index')->name('market');
Route::get('/market/{category}', 'MarketController@categories');
Route::get('/market_place/{slug}', 'MarketController@products');
Route::get('/market_place/{slug}/{id}', 'MarketController@product_desc');
Route::get('/market_place/bath-products', 'MarketController@bath')->name('bath');
Route::get('/market_place/bedroom-products', 'MarketController@bedroom')->name('bedroom');
Route::get('/market_place/furniture', 'MarketController@furniture')->name('furniture');
Route::get('/market_place/holiday-decor', 'MarketController@holiday')->name('holiday');
Route::get('/market_place/home-decor', 'MarketController@home')->name('home');
Route::get('/market_place/home-improvement', 'MarketController@homeimprove')->name('homeimprovement');
Route::get('/market_place/housekeeping-and-laundry', 'MarketController@housekeeping')->name('housekeeping');
Route::get('/market_place/kitchen-and-dining', 'MarketController@kitchen')->name('kitchen');
Route::get('/market_place/living-products', 'MarketController@living')->name('living');
Route::get('/market_place/lighting', 'MarketController@lighting')->name('lighting');
Route::get('/market_place/outdoor-products', 'MarketController@outdoor')->name('outdoor');
Route::get('/market_place/storage-and-organization', 'MarketController@storage')->name('storage');

Route::get('/training', 'TrainingController@index')->name('training');
Route::get('/training/{id}', 'TrainingController@trainer')->name('training.show');

Route::get('/news_and_press_release', 'NewsAndPressController@index')->name('napr');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/blog-single/{id}','BlogController@single');
Route::get('/blog/create-article','BlogController@create_article')->name('create-article');
Route::post('/blog/create-article','BlogController@store_article')->name('create.article.submit');

Route::get('/case_study_and_testimonials', 'TestimonialController@index')->name('csandt');

Route::get('/newsletter', 'NewsLetterController@index')->name('newsletter');
Route::post('/newsletter', 'NewsLetterController@store')->name('newsletter.store');

Route::get('/privacy_policy', 'TermsController@privacy')->name('privacy');

Route::get('/terms_of_service', 'TermsController@tos')->name('tos');

Route::get('/disclaimer', 'TermsController@disclaimer')->name('disclaimer');


Route::prefix('admin')->group(function() {
Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.loginStore');
Route::get('/register', 'Auth\AdminRegisterController@index')->name('admin.register');
Route::post('/register', 'Auth\AdminRegisterController@create')->name('admin.regStore');
Route::post('/logout', 'Auth\AdminLoginController@adminlogout')->name('admin.logout');
//Additional Routes	
Route::get('/all-articles', 'Admin\AdminController@articleshow')->name('admin.article');
Route::get('/categories', 'Admin\AdminController@category');
	
Route::get('/all-contractors', 'Admin\ContractorController@allcontractors')->name('admin.all-contractors');
Route::get('/contractor-details/{id}', 'Admin\ContractorController@contractordetails');

Route::get('/all-homeowners', 'Admin\HomeownerController@allhomeowners');
Route::get('/homeowner-details/{id}', 'Admin\HomeownerController@homeownerdetails');
Route::post('/homeowner-details', 'Admin\HomeownerController@sendbids')->name('homeowner-detail.sendbids');

Route::get('/all-marketers', 'Admin\AdminController@allmarketers');
Route::get('/marketer-details/{id}', 'Admin\AdminController@marketerdetails');
Route::post('/marketer-details', 'Admin\MarketerController@marketerstatus')->name('market-detail.status');

Route::get('/all-trainers', 'Admin\AdminController@alltrainers');
Route::get('/trainer-details/{id}', 'Admin\AdminController@trainerdetails');

Route::get('/cost-guide', 'Admin\AdminController@costguide');
Route::post('/cost-guide', 'Admin\AdminController@costguidestore')->name('admin.costguide.store');
Route::get('/costguide-details/{id}', 'Admin\AdminController@costguidedetails');
Route::post('/costguide-details/{id}', 'Admin\AdminController@costguideupdate')->name('admin.costguide.update');
Route::get('costguide/{id}/delete', 'Admin\AdminController@deletecostguide');

Route::post('/users', 'Admin\AdminController@addadmin')->name('admin.add');
	
Route::get('delete-contractor/{id}', 'Admin\ContractorController@deletecontractor');

Route::get('/admin-users', 'Admin\AdminController@adminusers')->name('admin.users');
});


//Auth::routes();
Auth::routes(['verify' => true]);

// Contractors::routes();
Route::prefix('contractor')->group(function() {
Route::get('/dashboard', 'User\Contractor\HomeController@index')->name('contractor.dashboard');
Route::get('/profile', 'User\Contractor\ProfileController@index')->name('contractor.profile');
Route::post('/profile2', 'User\Contractor\ProfileController@update')->name('contractor.profile.update');
Route::post('/profile3', 'User\Contractor\ResetPasswordController@reset')->name('contractor.password.reset');
Route::get('/register', 'User\Contractor\ContractorController@register')->name('contractor.register');
Route::post('/register', 'User\Contractor\ContractorController@create')->name('contractor.store');
Route::get('/', 'User\Contractor\ContractorController@index')->name('contractor.index');
Route::post('/edit', 'User\Contractor\ContractorController@update')->name('contractor.update');
Route::get('/features_and_pricing', 'User\Contractor\HomeController@plans')->name('plans');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('payment');
});



// Trainers::routes();
Route::prefix('trainer')->group(function() {
Route::get('/dashboard', 'User\Trainer\HomeController@index')->name('trainer.dashboard');
Route::get('/profile', 'User\Trainer\ProfileController@index')->name('trainer.profile');
Route::post('/profile2', 'User\Trainer\ProfileController@update')->name('trainer.profile.update');
Route::post('/profile3', 'User\Trainer\ResetPasswordController@reset')->name('trainer.password.reset');
Route::get('/register', 'User\Trainer\TrainerController@register')->name('trainer.register');
Route::post('/register', 'User\Trainer\TrainerController@create')->name('trainer.store');
Route::get('/register/terms_and_conditions', 'User\Trainer\TrainerController@terms')->name('trainer.terms');
Route::post('/register/terms_and_conditions', 'User\Trainer\TrainerController@create_terms')->name('trainer.storeTerms');
Route::get('/', 'User\Trainer\TrainerController@index')->name('trainer.index');
Route::post('/edit', 'User\Trainer\TrainerController@update')->name('trainer.update');

});


// Marketers::routes();
Route::prefix('marketer')->group(function() {
Route::get('/dashboard', 'User\Marketer\HomeController@index')->name('marketer.dashboard');
Route::get('/profile', 'User\Marketer\ProfileController@index')->name('marketer.profile');
Route::post('/profile2', 'User\Marketer\ProfileController@update')->name('marketer.profile.update');
Route::post('/profile3', 'User\Marketer\ResetPasswordController@reset')->name('marketer.password.reset');
Route::get('/register', 'User\Marketer\MarketerController@register')->name('marketer.register');
Route::post('/register', 'User\Marketer\MarketerController@create')->name('marketer.store');
Route::get('/', 'User\Marketer\MarketerController@index')->name('marketer.index');
Route::post('/edit', 'User\Marketer\MarketerController@update')->name('marketer.update');
Route::get('/upload_products', 'User\Marketer\MarketerController@products')->name('marketer.gallery');
Route::post('/upload_products', 'User\Marketer\MarketerController@products_create')->name('marketer.products');

});


// HomeOwners::routes();
Route::prefix('homeowner')->group(function() {
Route::get('/dashboard', 'User\HomeOwner\HomeController@index')->name('homeowner.dashboard');
Route::get('/profile', 'User\HomeOwner\ProfileController@index')->name('homeowner.profile');
Route::post('/profile2', 'User\HomeOwner\ProfileController@update')->name('homeowner.profile.update');
Route::post('/profile3', 'User\HomeOwner\ResetPasswordController@reset')->name('homeowner.password.reset');
Route::get('/register', 'User\HomeOwner\HomeOwnerController@register')->name('homeowner.register');
Route::post('/register', 'User\HomeOwner\HomeOwnerController@create')->name('homeowner.store');
Route::get('/', 'User\HomeOwner\HomeOwnerController@index')->name('homeowner.index');
Route::post('/edit', 'User\HomeOwner\HomeOwnerController@update')->name('homeowner.update');
Route::get('/request_quote', 'User\HomeOwner\HomeOwnerController@rq')->name('homeowner.rq');
Route::post('/request_quote', 'User\HomeOwner\HomeOwnerController@rq_store')->name('homeowner.rq_store');
Route::get('/properties', 'User\HomeOwner\HomeOwnerController@properties')->name('homeowner.properties');

}); 


// Admin::routes();
Route::get('/admin/dashboard', 'Admin\HomeController@index')->name('admin.dashboard');
Route::get('/admin/profile/tab', 'Admin\ProfileController@index')->name('admin.profile');
Route::post('/admin/profile/edit_profile', 'Admin\ProfileController@edit')->name('admin.editProfile');
Route::post('/admin/profile/reset_password', 'Admin\ResetPasswordController@reset')->name('admin.resetPassword');
Route::get('/admin/contractor', 'Admin\ContractorController@index')->name('admin.contractor');

Route::get('/admin/category', 'Admin\CategoriesController@index')->name('admin.category');
Route::post('/admin/category', 'Admin\CategoriesController@create')->name('admin.category.store');
Route::post('/admin/category/{id}/edit', 'Admin\CategoriesController@update')->name('admin.category.edit');
Route::get('/admin/category/{id}', 'Admin\CategoriesController@delete')->name('admin.category.delete');

Route::get('/admin/marketcategory', 'Admin\MarketCategoriesController@index')->name('admin.marketcategory');
Route::post('/admin/marketcategory', 'Admin\MarketCategoriesController@create')->name('admin.marketcategory.store');
Route::post('/admin/marketcategory/{id}/edit', 'Admin\MarketCategoriesController@update')->name('admin.marketcategory.edit');
Route::get('/admin/marketcategory/{id}', 'Admin\MarketCategoriesController@delete')->name('admin.marketcategory.delete');
