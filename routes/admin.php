<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Holiday\HolidayController;
use App\Http\Controllers\Sociallink\SociallinkController;
use App\Http\Controllers\Pricing\PricingController;
use App\Http\Controllers\Success_Stories\Success_StoriesController;
use App\Http\Controllers\Aboutus\AboutusController;
use App\Http\Controllers\Abouthomepage\AbouthomepageController;
use App\Http\Controllers\Salary\SalaryController;
use App\Http\Controllers\Privacy_policy\Privacy_policyController;
use App\Http\Controllers\Careers\CareersController;
use App\Http\Controllers\Terms_of_use\Terms_of_useController;
use App\Http\Controllers\Blogs\BlogsController;
use App\Http\Controllers\Payment_policy\Payment_policyController;
use App\Http\Controllers\Disclaimer\DisclaimerController;
use App\Http\Controllers\Membership\MembershipController;
use App\Http\Controllers\Kundali\KundaliController;
use App\Http\Controllers\Engagement\EngagementController;
use App\Http\Controllers\Background\BackgroundController;
use App\Http\Controllers\Health\HealthController;
use App\Http\Controllers\Shopping\ShoppingController;
use App\Http\Controllers\Refer\ReferController;
use App\Http\Controllers\Join_us\Join_usController;
use App\Http\Controllers\Other_services\Other_servicesController;





Route::get('/admin',function()
{
    return 10;
    
    
});


Route::namespace('Auth')->name('auth.')->group(function () {
    Route::get('', [LoginController::class,'index'])->name('index');
    Route::post('login', [LoginController::class,'login'])->name('login');
    Route::get('logout', [LoginController::class,'logout'])->name('logout');
    Route::get('changePassword', [LoginController::class,'changePassword'])->name('changePassword');
    Route::post('updatePassword', [LoginController::class,'updatePassword'])->name('updatePassword');
});

Route::group(['middleware' => 'auth'], function () {
    Route::namespace('Dashboard')->prefix('admin.dashboard')->name('admin.dashboard.')->group(function () {
        Route::get('/admin', [DashboardController::class,'index'])->name('admin.index');
    });
});


Route::namespace('Holiday')->prefix('/holiday')->name('holiday.')->group(function () {
    Route::middleware('permission:superadmin|coordinator')->group(function () {
        Route::get('', [HolidayController::class,'index'])->name('index');
        Route::get('add', 'HolidayController@add')->name('add');
        Route::post('insert', 'HolidayController@insert')->name('insert');
        Route::get('edit/{id}', 'HolidayController@edit')->name('edit');
        Route::post('update', 'HolidayController@update')->name('update');
        Route::get('delete/{id}', 'HolidayController@delete')->name('delete');
    });
    Route::post('filter', 'HolidayController@filter')->name('filter');
});


Route::namespace('Setting')->prefix('/setting')->name('setting.')->group(function () {
    Route::get('',[SettingController::class,'index'])->name('index');
    Route::get('add', [SettingController::class,'add'])->name('add');
    Route::post('insert', [SettingController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [SettingController::class,'edit'])->name('edit');
    Route::post('update', [SettingController::class,'update'])->name('update');
    Route::POST('delete', [SettingController::class,'delete'])->name('delete');
});

Route::namespace('User')->prefix('/user')->name('user.')->group(function () {
    Route::middleware('permission:superadmin')->group(function () {
        Route::get('',[UserController::class,'index'])->name('index');
        Route::get('add', [UserController::class,'add'])->name('add');
        Route::post('insert', [UserController::class,'insert'])->name('insert');
        Route::get('edit/{id}', [UserController::class,'edit'])->name('edit');
        Route::post('update', [UserController::class,'update'])->name('update');
        Route::get('delete/{id}', [UserController::class,'delete'])->name('delete');
        Route::get('active/{id}', [UserController::class,'active'])->name('active');
        Route::get('inactive/{id}', [UserController::class,'inactive'])->name('inactive');
    });
});


Route::namespace('Sociallink')->prefix('sociallink')->name('sociallink.')->group(function () {
    Route::get('/', [SociallinkController::class,'index'])->name('index');
    Route::get('add', [SociallinkController::class,'add'])->name('add');
    Route::post('insert', [SociallinkController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [SociallinkController::class,'edit'])->name('edit');
    Route::post('update', [SociallinkController::class,'update'])->name('update');
    Route::POST('delete', [SociallinkController::class,'delete'])->name('delete');
});

Route::namespace('Pricing')->prefix('pricing')->name('pricing.')->group(function () {
    Route::get('/', [PricingController::class,'index'])->name('index');
    Route::get('add', [PricingController::class,'add'])->name('add');
    Route::post('insert', [PricingController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [PricingController::class,'edit'])->name('edit');
    Route::post('update', [PricingController::class,'update'])->name('update');
    Route::POST('delete', [PricingController::class,'delete'])->name('delete');
});

Route::namespace('Success_Stories')->prefix('success_stories')->name('success_stories.')->group(function () {
    Route::get('/', [Success_StoriesController::class,'index'])->name('index');
    Route::get('add', [Success_StoriesController::class,'add'])->name('add');
    Route::post('insert', [Success_StoriesController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [Success_StoriesController::class,'edit'])->name('edit');
    Route::post('update', [Success_StoriesController::class,'update'])->name('update');
    Route::POST('delete', [Success_StoriesController::class,'delete'])->name('delete');
});

Route::namespace('Aboutus')->prefix('aboutus')->name('aboutus.')->group(function () {
    Route::get('/', [AboutusController::class,'index'])->name('index');
    Route::get('add', [AboutusController::class,'add'])->name('add');
    Route::post('insert', [AboutusController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [AboutusController::class,'edit'])->name('edit');
    Route::post('update', [AboutusController::class,'update'])->name('update');
    Route::POST('delete', [AboutusController::class,'delete'])->name('delete');
});

Route::namespace('Abouthomepage')->prefix('abouthomepage')->name('abouthomepage.')->group(function () {
    Route::get('/', [AbouthomepageController::class,'index'])->name('index');
    Route::get('add', [AbouthomepageController::class,'add'])->name('add');
    Route::post('insert', [AbouthomepageController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [AbouthomepageController::class,'edit'])->name('edit');
    Route::post('update', [AbouthomepageController::class,'update'])->name('update');
    Route::POST('delete', [AbouthomepageController::class,'delete'])->name('delete');
});

Route::namespace('Contactus')->prefix('contactus')->name('contactus.')->group(function () {
    Route::get('/', [ContactusController::class,'index'])->name('index');
    Route::get('add', [ContactusController::class,'add'])->name('add');
    Route::post('insert', [ContactusController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [ContactusController::class,'edit'])->name('edit');
    Route::post('update', [ContactusController::class,'update'])->name('update');
    Route::POST('delete', [ContactusController::class,'delete'])->name('delete');
});

Route::namespace('Salary')->prefix('salary')->name('salary.')->group(function () {
    Route::middleware('permission:superadmin')->group(function () {
        Route::get('delete/{id}', [SalaryController::class,'delete'])->name('delete');
        Route::get('paid/{id}', [SalaryController::class,'paid'])->name('paid');
        Route::get('unpaid/{id}', [SalaryController::class,'unpaid'])->name('unpaid');
    });

    Route::get('/', [SalaryController::class,'index'])->name('index');
});

Route::namespace('Privacy_policy')->prefix('privacy_policy')->name('privacy_policy.')->group(function () {
    Route::get('/', [Privacy_policyController::class,'index'])->name('index');
    Route::get('add', [Privacy_policyController::class,'add'])->name('add');
    Route::post('insert', [Privacy_policyController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [Privacy_policyController::class,'edit'])->name('edit');
    Route::post('update', [Privacy_policyController::class,'update'])->name('update');
    Route::POST('delete', [Privacy_policyController::class,'delete'])->name('delete');
});

Route::namespace('Careers')->prefix('careers')->name('careers.')->group(function () {
    Route::get('/', [CareersController::class,'index'])->name('index');
    Route::get('add', [CareersController::class,'add'])->name('add');
    Route::post('insert', [CareersController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [CareersController::class,'edit'])->name('edit');
    Route::post('update', [CareersController::class,'update'])->name('update');
    Route::POST('delete', [CareersController::class,'delete'])->name('delete');
});

Route::namespace('Terms_of_use')->prefix('terms_of_use')->name('terms_of_use.')->group(function () {
    Route::get('/', [Terms_of_useController::class,'index'])->name('index');
    Route::get('add', [Terms_of_useController::class,'add'])->name('add');
    Route::post('insert', [Terms_of_useController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [Terms_of_useController::class,'edit'])->name('edit');
    Route::post('update', [Terms_of_useController::class,'update'])->name('update');
    Route::POST('delete', [Terms_of_useController::class,'delete'])->name('delete');
});

Route::namespace('Blogs')->prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [BlogsController::class,'index'])->name('index');
    Route::get('add', [BlogsController::class,'add'])->name('add');
    Route::post('insert', [BlogsController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [BlogsController::class,'edit'])->name('edit');
    Route::post('update', [BlogsController::class,'update'])->name('update');
    Route::POST('delete', [BlogsController::class,'delete'])->name('delete');
});

Route::namespace('Payment_policy')->prefix('payment_policy')->name('payment_policy.')->group(function () {
    Route::get('/', [Payment_policyController::class,'index'])->name('index');
    Route::get('add', [Payment_policyController::class,'add'])->name('add');
    Route::post('insert', [Payment_policyController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [Payment_policyController::class,'edit'])->name('edit');
    Route::post('update', [Payment_policyController::class,'update'])->name('update');
    Route::POST('delete', [Payment_policyController::class,'delete'])->name('delete');
});

Route::namespace('Disclaimer')->prefix('disclaimer')->name('disclaimer.')->group(function () {
    Route::get('/', [DisclaimerController::class,'index'])->name('index');
    Route::get('add', [DisclaimerController::class,'add'])->name('add');
    Route::post('insert', [DisclaimerController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [DisclaimerController::class,'edit'])->name('edit');
    Route::post('update', [DisclaimerController::class,'update'])->name('update');
    Route::POST('delete', [DisclaimerController::class,'delete'])->name('delete');
});

Route::namespace('Membership')->prefix('membership')->name('membership.')->group(function () {
    Route::get('/', [MembershipController::class,'index'])->name('index');
    Route::get('add', [MembershipController::class,'add'])->name('add');
    Route::post('insert', [MembershipController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [MembershipController::class,'edit'])->name('edit');
    Route::post('update', [MembershipController::class,'update'])->name('update');
    Route::POST('delete', [MembershipController::class,'delete'])->name('delete');
});

Route::namespace('Kundali')->prefix('kundali')->name('kundali.')->group(function () {
    Route::get('/', [KundaliController::class,'index'])->name('index');
    Route::get('add', [KundaliController::class,'add'])->name('add');
    Route::post('insert', [KundaliController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [KundaliController::class,'edit'])->name('edit');
    Route::post('update', [KundaliController::class,'update'])->name('update');
    Route::POST('delete', [KundaliController::class,'delete'])->name('delete');
});

Route::namespace('Engagement')->prefix('engagement')->name('engagement.')->group(function () {
    Route::get('/', [EngagementController::class,'index'])->name('index');
    Route::get('add', [EngagementController::class,'add'])->name('add');
    Route::post('insert', [EngagementController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [EngagementController::class,'edit'])->name('edit');
    Route::post('update', [EngagementController::class,'update'])->name('update');
    Route::POST('delete', [EngagementController::class,'delete'])->name('delete');
});

Route::namespace('Background')->prefix('background')->name('background.')->group(function () {
    Route::get('/', [BackgroundController::class,'index'])->name('index');
    Route::get('add', [BackgroundController::class,'add'])->name('add');
    Route::post('insert', [BackgroundController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [BackgroundController::class,'edit'])->name('edit');
    Route::post('update', [BackgroundController::class,'update'])->name('update');
    Route::POST('delete', [BackgroundController::class,'delete'])->name('delete');
});

Route::namespace('Health')->prefix('health')->name('health.')->group(function () {
    Route::get('/', [HealthController::class,'index'])->name('index');
    Route::get('add', [HealthController::class,'add'])->name('add');
    Route::post('insert', [HealthController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [HealthController::class,'edit'])->name('edit');
    Route::post('update', [HealthController::class,'update'])->name('update');
    Route::POST('delete', [HealthController::class,'delete'])->name('delete');
});

Route::namespace('Shopping')->prefix('shopping')->name('shopping.')->group(function () {
    Route::get('/', [ShoppingController::class,'index'])->name('index');
    Route::get('add', [ShoppingController::class,'add'])->name('add');
    Route::post('insert', [ShoppingController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [ShoppingController::class,'edit'])->name('edit');
    Route::post('update', [ShoppingController::class,'update'])->name('update');
    Route::POST('delete', [ShoppingController::class,'delete'])->name('delete');
});

Route::namespace('Refer')->prefix('refer')->name('refer.')->group(function () {
    Route::get('/', [ReferController::class,'index'])->name('index');
    Route::get('add', [ReferController::class,'add'])->name('add');
    Route::post('insert', [ReferController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [ReferController::class,'edit'])->name('edit');
    Route::post('update', [ReferController::class,'update'])->name('update');
    Route::POST('delete', [ReferController::class,'delete'])->name('delete');
});

Route::namespace('Join_us')->prefix('join_us')->name('join_us.')->group(function () {
    Route::get('/', [Join_usController::class,'index'])->name('index');
    Route::get('add', [Join_usController::class,'add'])->name('add');
    Route::post('insert', [Join_usController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [Join_usController::class,'edit'])->name('edit');
    Route::post('update', [Join_usController::class,'update'])->name('update');
    Route::POST('delete', [Join_usController::class,'delete'])->name('delete');
});

Route::namespace('Other_services')->prefix('other_services')->name('other_services.')->group(function () {
    Route::get('/', [Other_servicesController::class,'index'])->name('index');
    Route::get('add', [Other_servicesController::class,'add'])->name('add');
    Route::post('insert', [Other_servicesController::class,'insert'])->name('insert');
    Route::get('edit/{id}', [Other_servicesController::class,'edit'])->name('edit');
    Route::post('update', [Other_servicesController::class,'update'])->name('update');
    Route::POST('delete', [Other_servicesController::class,'delete'])->name('delete');
});