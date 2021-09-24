<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Login\LoginController;
use Illuminate\Auth\Middleware\Authentication;
use Illuminate\Support\Facades\Auth;


Route::namespace('Auth')->name('auth.')->group(function () {
    Route::get('/', 'LoginController@index')->name('index');
    Route::post('login', 'LoginController@login')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::get('changePassword', 'LoginController@changePassword')->name('changePassword');
    Route::post('updatePassword', 'LoginController@updatePassword')->name('updatePassword');
});

Route::group(['middleware' => 'auth'], function () {
    Route::namespace('Dashboard')->prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', 'DashboardController@index')->name('index');
    });

    Route::namespace('Holiday')->prefix('holiday')->name('holiday.')->group(function () {
        Route::get('/', 'HolidayController@index')->name('index');
        Route::middleware('permission:superadmin|coordinator')->group(function () {
            Route::get('add', 'HolidayController@add')->name('add');
            Route::post('insert', 'HolidayController@insert')->name('insert');
            Route::get('edit/{id}', 'HolidayController@edit')->name('edit');
            Route::post('update', 'HolidayController@update')->name('update');
            Route::get('delete/{id}', 'HolidayController@delete')->name('delete');
        });
        Route::post('filter', 'HolidayController@filter')->name('filter');
    });

    // Route::namespace('Client')->prefix('client')->name('client.')->group(function () {
    //     Route::middleware('permission:superadmin|coordinator')->group(function () {
    //         Route::get('/', 'ClientController@index')->name('index');
    //         Route::get('add', 'ClientController@add')->name('add');
    //         Route::post('insert', 'ClientController@insert')->name('insert');
    //         Route::get('edit/{id}', 'ClientController@edit')->name('edit');
    //         Route::post('update', 'ClientController@update')->name('update');
    //         Route::get('disable/{id}', 'ClientController@disable')->name('disable');
    //         Route::get('enable/{id}', 'ClientController@enable')->name('enable');
    //         Route::post('getByType', 'ClientController@getByType')->name('getByType');
    //         Route::get('downloadAttachment/{filename}', 'ClientController@downloadAttachment')->name('downloadAttachment');
    //     });
    // });

    
    // Route::namespace('User')->prefix('user')->name('user.')->group(function () {
    //     Route::middleware('permission:superadmin')->group(function () {
    //         Route::get('/', 'UserController@index')->name('index');
    //         Route::get('add', 'UserController@add')->name('add');
    //         Route::post('insert', 'UserController@insert')->name('insert');
    //         Route::get('edit/{id}', 'UserController@edit')->name('edit');
    //         Route::post('update', 'UserController@update')->name('update');
    //         Route::get('delete/{id}', 'UserController@delete')->name('delete');
    //         Route::get('active/{id}', 'UserController@active')->name('active');
    //         Route::get('inactive/{id}', 'UserController@inactive')->name('inactive');
    //     });
    // });

    // Route::namespace('Setting')->prefix('setting')->name('setting.')->group(function () {
    //     Route::get('/', 'SettingController@index')->name('index');
    //     Route::get('add', 'SettingController@add')->name('add');
    //     Route::post('insert', 'SettingController@insert')->name('insert');
    //     Route::get('edit/{id}', 'SettingController@edit')->name('edit');
    //     Route::post('update', 'SettingController@update')->name('update');
    //     Route::POST('delete', 'SettingController@delete')->name('delete');
    // });

    // Route::namespace('Sociallink')->prefix('sociallink')->name('sociallink.')->group(function () {
    //     Route::get('/', 'SociallinkController@index')->name('index');
    //     Route::get('add', 'SociallinkController@add')->name('add');
    //     Route::post('insert', 'SociallinkController@insert')->name('insert');
    //     Route::get('edit/{id}', 'SociallinkController@edit')->name('edit');
    //     Route::post('update', 'SociallinkController@update')->name('update');
    //     Route::POST('delete', 'SociallinkController@delete')->name('delete');
    // });

    // Route::namespace('Pricing')->prefix('pricing')->name('pricing.')->group(function () {
    //     Route::get('/', 'PricingController@index')->name('index');
    //     Route::get('add', 'PricingController@add')->name('add');
    //     Route::post('insert', 'PricingController@insert')->name('insert');
    //     Route::get('edit/{id}', 'PricingController@edit')->name('edit');
    //     Route::post('update', 'PricingController@update')->name('update');
    //     Route::POST('delete', 'PricingController@delete')->name('delete');
    // });
    // Route::namespace('Success_Stories')->prefix('success_stories')->name('success_stories.')->group(function () {
    //     Route::get('/', 'Success_StoriesController@index')->name('index');
    //     Route::get('add', 'Success_StoriesController@add')->name('add');
    //     Route::post('insert', 'Success_StoriesController@insert')->name('insert');
    //     Route::get('edit/{id}', 'Success_StoriesController@edit')->name('edit');
    //     Route::post('update', 'Success_StoriesController@update')->name('update');
    //     Route::POST('delete', 'Success_StoriesController@delete')->name('delete');
    // });
    // Route::namespace('Aboutus')->prefix('aboutus')->name('aboutus.')->group(function () {
    //     Route::get('/', 'AboutusController@index')->name('index');
    //     Route::get('add', 'AboutusController@add')->name('add');
    //     Route::post('insert', 'AboutusController@insert')->name('insert');
    //     Route::get('edit/{id}', 'AboutusController@edit')->name('edit');
    //     Route::post('update', 'AboutusController@update')->name('update');
    //     Route::POST('delete', 'AboutusController@delete')->name('delete');
    // });
    // Route::namespace('Abouthomepage')->prefix('abouthomepage')->name('abouthomepage.')->group(function () {
    //     Route::get('/', 'AbouthomepageController@index')->name('index');
    //     Route::get('add', 'AbouthomepageController@add')->name('add');
    //     Route::post('insert', 'AbouthomepageController@insert')->name('insert');
    //     Route::get('edit/{id}', 'AbouthomepageController@edit')->name('edit');
    //     Route::post('update', 'AbouthomepageController@update')->name('update');
    //     Route::POST('delete', 'AbouthomepageController@delete')->name('delete');
    // });
    // Route::namespace('Contactus')->prefix('contactus')->name('contactus.')->group(function () {
    //     Route::get('/', 'ContactusController@index')->name('index');
    //     Route::get('add', 'ContactusController@add')->name('add');
    //     Route::post('insert', 'ContactusController@insert')->name('insert');
    //     Route::get('edit/{id}', 'ContactusController@edit')->name('edit');
    //     Route::post('update', 'ContactusController@update')->name('update');
    //     Route::POST('delete', 'ContactusController@delete')->name('delete');
    // });
    // Route::namespace('Contactus')->prefix('contactus')->name('contactus.')->group(function () {
    //     Route::get('/', 'ContactusController@index')->name('index');
    //     Route::get('add', 'ContactusController@add')->name('add');
    //     Route::post('insert', 'ContactusController@insert')->name('insert');
    //     Route::get('edit/{id}', 'ContactusController@edit')->name('edit');
    //     Route::post('update', 'ContactusController@update')->name('update');
    //     Route::POST('delete', 'ContactusController@delete')->name('delete');
    // });
//     Route::namespace('Salary')->prefix('salary')->name('salary.')->group(function () {
//         Route::middleware('permission:superadmin')->group(function () {
//             Route::get('delete/{id}', 'SalaryController@delete')->name('delete');
//             Route::get('paid/{id}', 'SalaryController@paid')->name('paid');
//             Route::get('unpaid/{id}', 'SalaryController@unpaid')->name('unpaid');
//         });

//         Route::get('/', 'SalaryController@index')->name('index');
//     });
// });


// Route::namespace('Privacy_policy')->prefix('privacy_policy')->name('privacy_policy.')->group(function () {
//     Route::get('/', 'Privacy_policyController@index')->name('index');
//     Route::get('add', 'Privacy_policyController@add')->name('add');
//     Route::post('insert', 'Privacy_policyController@insert')->name('insert');
//     Route::get('edit/{id}', 'Privacy_policyController@edit')->name('edit');
//     Route::post('update', 'Privacy_policyController@update')->name('update');
//     Route::POST('delete', 'Privacy_policyController@delete')->name('delete');
// });

// Route::namespace('Careers')->prefix('careers')->name('careers.')->group(function () {
//     Route::get('/', 'CareersController@index')->name('index');
//     Route::get('add', 'CareersController@add')->name('add');
//     Route::post('insert', 'CareersController@insert')->name('insert');
//     Route::get('edit/{id}', 'CareersController@edit')->name('edit');
//     Route::post('update', 'CareersController@update')->name('update');
//     Route::POST('delete', 'CareersController@delete')->name('delete');
// });

// Route::namespace('Terms_of_use')->prefix('terms_of_use')->name('terms_of_use.')->group(function () {
//     Route::get('/', 'Terms_of_useController@index')->name('index');
//     Route::get('add', 'Terms_of_useController@add')->name('add');
//     Route::post('insert', 'Terms_of_useController@insert')->name('insert');
//     Route::get('edit/{id}', 'Terms_of_useController@edit')->name('edit');
//     Route::post('update', 'Terms_of_useController@update')->name('update');
//     Route::POST('delete', 'Terms_of_useController@delete')->name('delete');
// });

// Route::namespace('Blogs')->prefix('blogs')->name('blogs.')->group(function () {
//     Route::get('/', 'BlogsController@index')->name('index');
//     Route::get('add', 'BlogsController@add')->name('add');
//     Route::post('insert', 'BlogsController@insert')->name('insert');
//     Route::get('edit/{id}', 'BlogsController@edit')->name('edit');
//     Route::post('update', 'BlogsController@update')->name('update');
//     Route::POST('delete', 'BlogsController@delete')->name('delete');
// });

// Route::namespace('Payment_policy')->prefix('payment_policy')->name('payment_policy.')->group(function () {
//     Route::get('/', 'Payment_policyController@index')->name('index');
//     Route::get('add', 'Payment_policyController@add')->name('add');
//     Route::post('insert', 'Payment_policyController@insert')->name('insert');
//     Route::get('edit/{id}', 'Payment_policyController@edit')->name('edit');
//     Route::post('update', 'Payment_policyController@update')->name('update');
//     Route::POST('delete', 'Payment_policyController@delete')->name('delete');
// });

// Route::namespace('Disclaimer')->prefix('disclaimer')->name('disclaimer.')->group(function () {
//     Route::get('/', 'DisclaimerController@index')->name('index');
//     Route::get('add', 'DisclaimerController@add')->name('add');
//     Route::post('insert', 'DisclaimerController@insert')->name('insert');
//     Route::get('edit/{id}', 'DisclaimerController@edit')->name('edit');
//     Route::post('update', 'DisclaimerController@update')->name('update');
//     Route::POST('delete', 'DisclaimerController@delete')->name('delete');
// });

// Route::namespace('Membership')->prefix('membership')->name('membership.')->group(function () {
//     Route::get('/', 'MembershipController@index')->name('index');
//     Route::get('add', 'MembershipController@add')->name('add');
//     Route::post('insert', 'MembershipController@insert')->name('insert');
//     Route::get('edit/{id}', 'MembershipController@edit')->name('edit');
//     Route::post('update', 'MembershipController@update')->name('update');
//     Route::POST('delete', 'MembershipController@delete')->name('delete');
// });

// Route::namespace('Kundali')->prefix('kundali')->name('kundali.')->group(function () {
//     Route::get('/', 'KundaliController@index')->name('index');
//     Route::get('add', 'KundaliController@add')->name('add');
//     Route::post('insert', 'KundaliController@insert')->name('insert');
//     Route::get('edit/{id}', 'KundaliController@edit')->name('edit');
//     Route::post('update', 'KundaliController@update')->name('update');
//     Route::POST('delete', 'KundaliController@delete')->name('delete');
// });

// Route::namespace('Engagement')->prefix('engagement')->name('engagement.')->group(function () {
//     Route::get('/', 'EngagementController@index')->name('index');
//     Route::get('add', 'EngagementController@add')->name('add');
//     Route::post('insert', 'EngagementController@insert')->name('insert');
//     Route::get('edit/{id}', 'EngagementController@edit')->name('edit');
//     Route::post('update', 'EngagementController@update')->name('update');
//     Route::POST('delete', 'EngagementController@delete')->name('delete');
// });

// Route::namespace('Background')->prefix('background')->name('background.')->group(function () {
//     Route::get('/', 'BackgroundController@index')->name('index');
//     Route::get('add', 'BackgroundController@add')->name('add');
//     Route::post('insert', 'BackgroundController@insert')->name('insert');
//     Route::get('edit/{id}', 'BackgroundController@edit')->name('edit');
//     Route::post('update', 'BackgroundController@update')->name('update');
//     Route::POST('delete', 'BackgroundController@delete')->name('delete');
// });

// Route::namespace('Health')->prefix('health')->name('health.')->group(function () {
//     Route::get('/', 'HealthController@index')->name('index');
//     Route::get('add', 'HealthController@add')->name('add');
//     Route::post('insert', 'HealthController@insert')->name('insert');
//     Route::get('edit/{id}', 'HealthController@edit')->name('edit');
//     Route::post('update', 'HealthController@update')->name('update');
//     Route::POST('delete', 'HealthController@delete')->name('delete');
// });

// Route::namespace('Shopping')->prefix('shopping')->name('shopping.')->group(function () {
//     Route::get('/', 'ShoppingController@index')->name('index');
//     Route::get('add', 'ShoppingController@add')->name('add');
//     Route::post('insert', 'ShoppingController@insert')->name('insert');
//     Route::get('edit/{id}', 'ShoppingController@edit')->name('edit');
//     Route::post('update', 'ShoppingController@update')->name('update');
//     Route::POST('delete', 'ShoppingController@delete')->name('delete');
// });

// Route::namespace('Refer')->prefix('refer')->name('refer.')->group(function () {
//     Route::get('/', 'ReferController@index')->name('index');
//     Route::get('add', 'ReferController@add')->name('add');
//     Route::post('insert', 'ReferController@insert')->name('insert');
//     Route::get('edit/{id}', 'ReferController@edit')->name('edit');
//     Route::post('update', 'ReferController@update')->name('update');
//     Route::POST('delete', 'ReferController@delete')->name('delete');
// });

// Route::namespace('Join_us')->prefix('join_us')->name('join_us.')->group(function () {
//     Route::get('/', 'Join_usController@index')->name('index');
//     Route::get('add', 'Join_usController@add')->name('add');
//     Route::post('insert', 'Join_usController@insert')->name('insert');
//     Route::get('edit/{id}', 'Join_usController@edit')->name('edit');
//     Route::post('update', 'Join_usController@update')->name('update');
//     Route::POST('delete', 'Join_usController@delete')->name('delete');
// });

// Route::namespace('Other_services')->prefix('other_services')->name('other_services.')->group(function () {
//     Route::get('/', 'Other_servicesController@index')->name('index');
//     Route::get('add', 'Other_servicesController@add')->name('add');
//     Route::post('insert', 'Other_servicesController@insert')->name('insert');
//     Route::get('edit/{id}', 'Other_servicesController@edit')->name('edit');
//     Route::post('update', 'Other_servicesController@update')->name('update');
//     Route::POST('delete', 'Other_servicesController@delete')->name('delete');
// });


Route::get('imageupload/imageupload', 'ImageUploadController/ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController/ImageUploadController@imageUploadPost')->name('image.upload.post');
//-----------------------------------------------------------------------
// Test Routes Remove In Production
//-----------------------------------------------------------------------
Route::get("testGenerateSalary", 'TestController@testGenerateSalary');
Route::get("testCreateSuperAdmin", 'TestController@testCreateSuperAdmin');
Route::get("testCreateUsers", 'TestController@testCreateUsers');
Route::get("testCreateAttandance", 'TestController@testCreateAttandance');


Route::get('header', [HeaderController::class, 'index']);
// Route::get('logout', [HeaderController::class, 'logout']);
Route::get('footer', [FooterController::class, 'index']);
Route::get('index', [IndexController::class, 'index']);
// Route::post('insertproposal', [IndexController::class,'create']);
// Route::get('login', [LoginController::class, 'index']);

// Route::get('insertproposal', [IndexController::class, 'store']);
// Route::post('insertproposal', [IndexController::class, 'store']);

// Route::get('index', [IndexController::class, 'index']);
// Route::post('index', [IndexController::class, 'store']);
});

Route::get('/', function(){
    if (Auth::check()){
        return redirect('darshboard');
    }
    return redirect('login');
});


// Route::namespace('Login')->name('login.')->group(function () {
//     Route::get('/', 'LoginController@index')->name('index');
//     Route::post('login', 'LoginController@login')->name('login');
//     Route::get('logout', 'LoginController@logout')->name('logout');
//     Route::get('changePassword', 'LoginController@changePassword')->name('changePassword');
//     Route::post('updatePassword', 'LoginController@updatePassword')->name('updatePassword');
// });
Route::namespace('Login')->prefix('login')->name('login.')->group(function () {
    Route::get('/', 'LoginController@index')->name('index');
    // Route::post('/login', 'LoginController@authenticate')->name('login');
    Route::post('login', 'LoginController@authenticate')->name('login');
    // Route::post('/login', [ 'as' => 'login', 'uses' => 'LoginController@authenticate']);
    // Route::post('check', 'LoginController@check_user')->name('check_user');
});

Route::namespace('Index')->prefix('index')->name('index.')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    // Route::get('add', 'IndexController@add')->name('add');
    Route::post('insert', 'IndexController@insert')->name('insert');
});

Route::namespace('Web_otherservice')->prefix('web_otherservice')->name('web_otherservice.')->group(function () {
    Route::get('/', 'Web_otherserviceController@index')->name('index');
    // Route::get('add', 'IndexController@add')->name('add');
    // Route::post('insert', 'Web_otherserviceController@insert')->name('insert');
});

Route::namespace('Web_joinus')->prefix('web_joinus')->name('web_joinus.')->group(function () {
    Route::get('/', 'Web_joinusController@index')->name('index');
});

Route::namespace('Web_refer_and_earn')->prefix('web_refer_and_earn')->name('web_refer_and_earn.')->group(function () {
    Route::get('/', 'Web_refer_and_earnController@index')->name('index');
});

Route::namespace('Web_shopping_for_engagement')->prefix('web_shopping_for_engagement')->name('web_shopping_for_engagement.')->group(function () {
    Route::get('/', 'Web_shopping_for_engagementController@index')->name('index');
});

Route::namespace('Web_pre_marital')->prefix('web_pre_marital')->name('web_pre_marital.')->group(function () {
    Route::get('/', 'Web_pre_maritalController@index')->name('index');
});

Route::namespace('Web_pre_marriage')->prefix('web_pre_marriage')->name('web_pre_marriage.')->group(function () {
    Route::get('/', 'Web_pre_marriageController@index')->name('index');
});

Route::namespace('Web_pre_post')->prefix('web_pre_post')->name('web_pre_post.')->group(function () {
    Route::get('/', 'Web_pre_postController@index')->name('index');
});

Route::namespace('Web_pre_post')->prefix('web_pre_post')->name('web_pre_post.')->group(function () {
    Route::get('/', 'Web_pre_postController@index')->name('index');
});

Route::namespace('Web_kundali')->prefix('web_kundali')->name('web_kundali.')->group(function () {
    Route::get('/', 'Web_kundaliController@index')->name('index');
});

Route::namespace('Web_membership_plains')->prefix('web_membership_plains')->name('web_membership_plains.')->group(function () {
    Route::get('/', 'Web_membership_plainsController@index')->name('index');
});

Route::namespace('Web_dashboard')->prefix('web_dashboard')->name('web_dashboard.')->group(function () {
    Route::get('/', 'Web_dashboardController@index')->name('index');
});

Route::namespace('Web_profile')->prefix('web_profile')->name('web_profile.')->group(function () {
    Route::get('/', 'Web_profileController@index')->name('index');
    // Route::get('web_profile_delete', 'Web_profileController@delete')->name('delete');
});

Route::namespace('Web_profile_delete')->prefix('web_profile_delete')->name('web_profile_delete.')->group(function () {
    Route::get('/', 'Web_profile_deleteController@index')->name('index');
    // Route::get('web_profile_delete', 'Web_profileController@delete')->name('delete');
});

Route::namespace('Web_profile_hidden_by_me')->prefix('web_profile_hidden_by_me')->name('web_profile_hidden_by_me.')->group(function () {
    Route::get('/', 'Web_profile_hidden_by_meController@index')->name('index');
    // Route::get('web_profile_delete', 'Web_profileController@delete')->name('delete');
});

Route::namespace('Web_profile_photo_video_gallery')->prefix('web_profile_photo_video_gallery')->name('web_profile_photo_video_gallery.')->group(function () {
    Route::get('/', 'Web_profile_photo_video_galleryController@index')->name('index');
    // Route::get('web_profile_delete', 'Web_profileController@delete')->name('delete');
});

Route::namespace('Web_profile_visitor_information')->prefix('web_profile_visitor_information')->name('web_profile_visitor_information.')->group(function () {
    Route::get('/', 'Web_profile_visitor_informationController@index')->name('index');
    // Route::get('web_profile_delete', 'Web_profileController@delete')->name('delete');
});

Route::namespace('Web_profile_viewed_by_me')->prefix('web_profile_viewed_by_me')->name('web_profile_viewed_by_me.')->group(function () {
    Route::get('/', 'Web_profile_viewed_by_meController@index')->name('index');
});

Route::namespace('Web_shortlisted_profiles')->prefix('web_shortlisted_profiles')->name('web_shortlisted_profiles.')->group(function () {
    Route::get('/', 'Web_shortlisted_profilesController@index')->name('index');
});

Route::namespace('Web_search_by_profile_id')->prefix('web_search_by_profile_id')->name('web_search_by_profile_id.')->group(function () {
    Route::get('/', 'Web_search_by_profile_idController@index')->name('index');
});

Route::namespace('Web_advance_search')->prefix('web_advance_search')->name('web_advance_search.')->group(function () {
    Route::get('/', 'Web_advance_searchController@index')->name('index');
});

Route::namespace('Web_aboutus')->prefix('web_aboutus')->name('web_aboutus.')->group(function () {
    Route::get('/', 'Web_aboutusController@index')->name('index');
});

Route::namespace('Web_successstories')->prefix('web_successstories')->name('web_successstories.')->group(function () {
    Route::get('/', 'Web_successstoriesController@index')->name('index');
});

Route::namespace('Web_blogs')->prefix('web_blogs')->name('web_blogs.')->group(function () {
    Route::get('/', 'Web_blogsController@index')->name('index');
});

Route::namespace('Web_careers')->prefix('web_careers')->name('web_careers.')->group(function () {
    Route::get('/', 'Web_careersController@index')->name('index');
});

Route::namespace('Web_privacy')->prefix('web_privacy')->name('web_privacy.')->group(function () {
    Route::get('/', 'Web_privacyController@index')->name('index');
});

Route::namespace('Web_terms_use')->prefix('web_terms_use')->name('web_terms_use.')->group(function () {
    Route::get('/', 'Web_terms_useController@index')->name('index');
});

Route::namespace('Web_payment')->prefix('web_payment')->name('web_payment.')->group(function () {
    Route::get('/', 'Web_paymentController@index')->name('index');
});

Route::namespace('Web_disclaimer')->prefix('web_disclaimer')->name('web_disclaimer.')->group(function () {
    Route::get('/', 'Web_disclaimerController@index')->name('index');
});