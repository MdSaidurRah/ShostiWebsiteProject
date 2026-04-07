<?php


use App\Http\Controllers\Expense\ExportController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\BlogCategoryController;
use App\Http\Controllers\Blog\BlogContentController;
use App\Http\Controllers\CMS\PageController;
use App\Http\Controllers\CMS\BusinessServiceController;
use App\Http\Controllers\CMS\BusinessPackageController;
use App\Http\Controllers\CMS\BusinessProductController;
use App\Http\Controllers\CMS\BusinessProjectController;
use App\Http\Controllers\CMS\BusinessClientController;
use App\Http\Controllers\CMS\BusinessBrandsController;
use App\Http\Controllers\CMS\BusinessadvertisementController;
use App\Http\Controllers\CMS\SiteBannerController;
use App\Http\Controllers\CMS\SiteGallaryController;
use App\Http\Controllers\CMS\PromotionalVideoController;
use App\Http\Controllers\Report\VisitorMessageController;
use App\Http\Controllers\Report\ConsultationFlowControllerConsultationFlowController;
use App\Http\Controllers\UserController\SystemInformationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController\UserPasswordController;
use App\Http\Controllers\UserController\AdminUserController;
use App\Http\Controllers\UserController\UserProfileController;
use App\Http\Controllers\UserController\RolePermissionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//System Routes


Route::middleware(['checkauthencation'])->prefix('user')->group(function() { 
    Route::get('/all-user', [AdminUserController::class, 'allUser'])->name('all-user');
    Route::get('/add-user', [AdminUserController::class, 'addUser'])->name('add-user');
    Route::post('/store-user', [AdminUserController::class, 'storeUser'])->name('store-user');
    Route::get('/view-user/{id}', [AdminUserController::class, 'viewUser'])->name('view-user');
    Route::get('/view-activities/{id}', [AdminUserController::class, 'viewUserActivities'])->name('view-user-activities');
    Route::post('/update-user', [AdminUserController::class, 'updateUser'])->name('update-user');

    Route::get('/user/delete/{id}', [AdminUserController::class, 'delete'])->name('delete-user');
    Route::get('/user/role/{id}', [AdminUserController::class, 'userRole'])->name('user-role');

    Route::get('/profile', [AdminUserController::class, 'profile'])->name('user-profile');
    Route::post('/signature-update', [AdminUserController::class, 'signatureUpdate'])->name('user-signature-update');
    Route::get('/change-password', [UserPasswordController::class, 'changePassword'])->name('change-password');
    Route::post('/update-password', [UserPasswordController::class, 'updatePassword'])->name('update-password');

    
});


Route::middleware(['checkauthencation'])->prefix('userprofile')->group(function() {
    Route::get('/edit-profile',[UserProfileController::class,'editProfile'])->name('edit-profile');
    Route::get('/user-profile',[UserProfileController::class,'userProfile'])->name('user-profile-view');
    Route::get('/password-change',[UserProfileController::class,'passwordChange'])->name('password-change');
    Route::post('/password-update',[UserProfileController::class,'passwordUpdate'])->name('password-update');
    Route::post('/profile-photo-update',[UserProfileController::class,'profilePhotoUpdate'])->name('profile-photo-update');

});

Route::middleware(['checkauthencation'])->prefix('configurations')->group(function() {
    Route::get('/role-permission',[RolePermissionController::class,'rolePermission'])->name('role-permission');
    Route::get('/system-information',[SystemInformationController::class,'systemInformation'])->name('system-information');
    Route::get('/system-information/create', [SystemInformationController::class,'create'])->name('add-system-information');
    Route::post('/system-information/store', [SystemInformationController::class,'store'])->name('store-system-information');
    Route::get('/system-information/show/{id}', [SystemInformationController::class,'show'])->name('show-system-information');
    Route::get('/system-information/edit/{id}', [SystemInformationController::class,'edit'])->name('edit-system-information');
    Route::post('/system-information/update', [SystemInformationController::class,'update'])->name('update-system-information');
    Route::get('/system-information/delete/{id}', [SystemInformationController::class,'delete'])->name('delete-system-information');
    Route::get('/get-system-information',[SystemInformationController::class,'getSystemInformation'])->name('get-system-information');
});



Route::middleware(['checkauthencation'])->group(function(){


    Route::get('/get-all-user', [AdminUserController::class, 'allSystemUser'])->name('all-user');
    Route::get('/dashboard',[AuthenticationController::class,'admin'])->name('dashboard');


    // promotional-videos Routes
    Route::get('/promotional-videos', [PromotionalVideoController::class, 'index'])->name('promotional-video.index');
    Route::get('/promotional-video/create', [PromotionalVideoController::class, 'create'])->name('promotional-video.create');
    Route::post('/promotional-video/store', [PromotionalVideoController::class, 'store'])->name('promotional-video.store');
    Route::get('/promotional-video/preview/{id}', [PromotionalVideoController::class, 'preview'])->name('promotional-video.show');
    Route::get('/promotional-video/edit/{id}', [PromotionalVideoController::class, 'edit'])->name('promotional-video.edit');
    Route::post('/promotional-video/update', [PromotionalVideoController::class, 'update'])->name('promotional-video.update');
    Route::delete('/promotional-video/{id}', [PromotionalVideoController::class, 'destroy'])->name('promotional-video.destroy');
    Route::get('/get-all/promotional-videos', [PromotionalVideoController::class, 'getAllItems'])->name('get-all-site-promotional-videos'); 
        
    
    // Opn Graph 
    Route::get('/og-profile', [PromotionalVideoController::class, 'index'])->name('og-profile.index');
    Route::get('/og-profile/create', [PromotionalVideoController::class, 'create'])->name('og-profile.create');
    Route::post('/og-profile/store', [PromotionalVideoController::class, 'store'])->name('og-profile.store');
    Route::get('/og-profile/preview/{id}', [PromotionalVideoController::class, 'preview'])->name('og-profile.show');
    Route::get('/og-profile/edit/{id}', [PromotionalVideoController::class, 'edit'])->name('og-profile.edit');
    Route::post('/og-profile/update', [PromotionalVideoController::class, 'update'])->name('og-profile.update');
    Route::delete('/og-profile/{id}', [PromotionalVideoController::class, 'destroy'])->name('og-profile.destroy');
    Route::get('/get-all/og-profile', [PromotionalVideoController::class, 'getAllItems'])->name('get-all-og-profile'); 
    

    // Opn Graph 
    Route::get('/visitor-message', [VisitorMessageController::class, 'visitorMessage'])->name('visitor-message.index');
    Route::get('/visitor-message/show/{id}', [VisitorMessageController::class, 'show'])->name('visitor-message.show');
    Route::get('/get-all/visitor-message', [VisitorMessageController::class, 'getAllItems'])->name('get-all-visitor-message');    
    
    // consultation query
    Route::get('/consultation-query', [ConsultationFlowController::class, 'consultationQuery'])->name('consultation-query.index');
    Route::get('/consultation-query/show/{id}', [ConsultationFlowController::class, 'consultationQueryShow'])->name('consultation-query.show');
    Route::get('/get-all/consultation-query', [ConsultationFlowController::class, 'getAllItems'])->name('get-all-consultation-query'); 

    
    
  
    // Banner Routes
    Route::get('/site-banners', [SiteBannerController::class, 'index'])->name('site-banner.index');
    Route::get('/site-banner/create', [SiteBannerController::class, 'create'])->name('site-banner.create');
    Route::post('/site-banner/store', [SiteBannerController::class, 'store'])->name('site-banner.store');
    Route::get('/site-banner/preview/{id}', [SiteBannerController::class, 'preview'])->name('site-banner.show');
    Route::get('/site-banner/edit/{id}', [SiteBannerController::class, 'edit'])->name('site-banner.edit');
    Route::post('/site-banner/update', [SiteBannerController::class, 'update'])->name('site-banner.update');
    Route::delete('/site-banner/{id}', [SiteBannerController::class, 'destroy'])->name('site-banner.destroy');
    Route::get('/get-all/site-banners', [SiteBannerController::class, 'getAllItems'])->name('get-all-site-banners');   
    
    
    // Gallery Routes
    Route::get('/gallery', [SiteGallaryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [SiteGallaryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [SiteGallaryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/preview/{id}', [SiteGallaryController::class, 'preview'])->name('gallery.show');
    Route::get('/gallery/edit/{id}', [SiteGallaryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/update', [SiteGallaryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/{id}', [SiteGallaryController::class, 'destroy'])->name('gallery.destroy');
    Route::get('/get-all/gallery', [SiteGallaryController::class, 'getAllItems'])->name('get-all-gallery');   
    
    
    // Prmotional View Routes
    Route::get('/advertisements', [PromotionalVideoController::class, 'index'])->name('advertisement.index');
    Route::get('/advertisement/create', [PromotionalVideoController::class, 'create'])->name('advertisement.create');
    Route::post('/advertisement/store', [PromotionalVideoController::class, 'store'])->name('advertisement.store');
    Route::get('/advertisement/preview/{id}', [PromotionalVideoController::class, 'preview'])->name('advertisement.show');
    Route::get('/advertisement/edit/{id}', [PromotionalVideoController::class, 'edit'])->name('advertisement.edit');
    Route::post('/advertisement/update', [PromotionalVideoController::class, 'update'])->name('advertisement.update');
    Route::delete('/advertisement/{id}', [PromotionalVideoController::class, 'destroy'])->name('advertisement.destroy');
    Route::get('/get-all/advertisements', [PromotionalVideoController::class, 'getAllItems'])->name('get-all-advertisement');     
    
    
    // Advertisement Routes
    Route::get('/advertisements', [BusinessadvertisementController::class, 'index'])->name('advertisement.index');
    Route::get('/advertisement/create', [BusinessadvertisementController::class, 'create'])->name('advertisement.create');
    Route::post('/advertisement/store', [BusinessadvertisementController::class, 'store'])->name('advertisement.store');
    Route::get('/advertisement/preview/{id}', [BusinessadvertisementController::class, 'preview'])->name('advertisement.show');
    Route::get('/advertisement/edit/{id}', [BusinessadvertisementController::class, 'edit'])->name('advertisement.edit');
    Route::post('/advertisement/update', [BusinessadvertisementController::class, 'update'])->name('advertisement.update');
    Route::delete('/advertisement/{id}', [BusinessadvertisementController::class, 'destroy'])->name('advertisement.destroy');
    Route::get('/get-all/advertisements', [BusinessadvertisementController::class, 'getAllItems'])->name('get-all-advertisement');        
    
    // Client Routes
    Route::get('/clients', [BusinessClientController::class, 'index'])->name('client.index');
    Route::get('/client/create', [BusinessClientController::class, 'create'])->name('client.create');
    Route::post('/client/store', [BusinessClientController::class, 'store'])->name('client.store');
    Route::get('/client/preview/{id}', [BusinessClientController::class, 'preview'])->name('client.show');
    Route::get('/client/edit/{id}', [BusinessClientController::class, 'edit'])->name('client.edit');
    Route::post('/client/update', [BusinessClientController::class, 'update'])->name('client.update');
    Route::delete('/client/{id}', [BusinessClientController::class, 'destroy'])->name('client.destroy');
    Route::get('/get-all/clients', [BusinessClientController::class, 'getAllItems'])->name('get-all-client');        
    
    
    // Client Routes
    Route::get('/brands', [BusinessBrandsController::class, 'index'])->name('brands.index');
    Route::get('/brands/create', [BusinessBrandsController::class, 'create'])->name('brands.create');
    Route::post('/brands/store', [BusinessBrandsController::class, 'store'])->name('brands.store');
    Route::get('/brands/preview/{id}', [BusinessBrandsController::class, 'preview'])->name('brands.show');
    Route::get('/brands/edit/{id}', [BusinessBrandsController::class, 'edit'])->name('brands.edit');
    Route::post('/brands/update', [BusinessBrandsController::class, 'update'])->name('brands.update');
    Route::delete('/brands/{id}', [BusinessBrandsController::class, 'destroy'])->name('brands.destroy');
    Route::get('/get-all/brands', [BusinessBrandsController::class, 'getAllItems'])->name('get-all-brands');    
    
    // Service Routes
    Route::get('/business-services', [BusinessServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [BusinessServiceController::class, 'create'])->name('service.create');
    Route::post('/service/store', [BusinessServiceController::class, 'store'])->name('service.store');
    Route::get('/service/preview/{id}', [BusinessServiceController::class, 'preview'])->name('paservicege.show');
    Route::get('/service/edit/{id}', [BusinessServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update', [BusinessServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/{id}', [BusinessServiceController::class, 'destroy'])->name('service.destroy');
    Route::get('/get-all/service', [BusinessServiceController::class, 'getAllItems'])->name('get-all-service');    
    
    
    // Service Packages
    Route::get('/business-package', [BusinessPackageController::class, 'index'])->name('business-package.index');
    Route::get('/business-package/create', [BusinessPackageController::class, 'create'])->name('business-package.create');
    Route::post('/business-package/store', [BusinessPackageController::class, 'store'])->name('business-package.store');
    Route::get('/business-package/preview/{id}', [BusinessPackageController::class, 'preview'])->name('business-package.show');
    Route::get('/business-package/edit/{id}', [BusinessPackageController::class, 'edit'])->name('business-package.edit');
    Route::post('/business-package/update', [BusinessPackageController::class, 'update'])->name('business-package.update');
    Route::delete('/business-package/{id}', [BusinessPackageController::class, 'destroy'])->name('business-package.destroy');
    Route::get('/get-all/servbusiness-packageice', [BusinessPackageController::class, 'getAllItems'])->name('get-all-business-package');


    // Product Routes
    Route::get('/products', [BusinessProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [BusinessProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [BusinessProductController::class, 'store'])->name('product.store');
    Route::get('/product/preview/{id}', [BusinessProductController::class, 'preview'])->name('product.show');
    Route::get('/product/edit/{id}', [BusinessProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update', [BusinessProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [BusinessProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/get-all/products', [BusinessProductController::class, 'getAllItems'])->name('get-all-product');


        // Projects Routes
    Route::get('/business-projects', [BusinessProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [BusinessProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store', [BusinessProjectController::class, 'store'])->name('project.store');
    Route::get('/project/preview/{id}', [BusinessProjectController::class, 'preview'])->name('project.show');
    Route::get('/project/edit/{id}', [BusinessProjectController::class, 'edit'])->name('project.edit');
    Route::post('/project/update', [BusinessProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/{id}', [BusinessProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/get-all/projects', [BusinessProjectController::class, 'getAllItems'])->name('get-all-project');



    // Blog Routes
    Route::get('/pages', [PageController::class, 'index'])->name('page.index');
    Route::get('/page/create', [PageController::class, 'create'])->name('page.create');
    Route::post('/page/store', [PageController::class, 'store'])->name('page.store');
    Route::get('/page/preview/{id}', [PageController::class, 'preview'])->name('page.show');
    Route::get('/page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
    Route::post('/page/update', [PageController::class, 'update'])->name('page.update');
    Route::delete('/page/{id}', [PageController::class, 'destroy'])->name('page.destroy');
    Route::get('/get-all/pages', [PageController::class, 'getAllItems'])->name('get-all-page');



    // Blog Routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blog/read/{id}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('/blog/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::get('get-all/blogs', [BlogController::class, 'getAllItems'])->name('get-all-blogs');

        // Blog Category Routes
    Route::get('/blog-contents', [BlogContentController::class, 'index'])->name('blog-contents.index');
    Route::get('/blog-content/create', [BlogContentController::class, 'create'])->name('blog-contents.create');
    Route::post('/blog-content/store', [BlogContentController::class, 'store'])->name('blog-contents.store');
    Route::get('/blog-content/{id}', [BlogContentController::class, 'show'])->name('blog-contents.show');
    Route::get('/blog-content/read/{id}', [BlogContentController::class, 'read'])->name('blog-contents.red');
    Route::get('/blog-content/edit/{id}', [BlogContentController::class, 'edit'])->name('blog-contents.edit');
    Route::post('/blog-content/update', [BlogContentController::class, 'update'])->name('blog-contents.edit');
    Route::get('get-all/blog-content', [BlogContentController::class, 'getAllItems'])->name('get-all-blog-contents');

    // Blog Category Routes
    Route::get('/blog-categories', [BlogCategoryController::class, 'index'])->name('blog-categories.index');
    Route::get('/blog-categories/create', [BlogCategoryController::class, 'create'])->name('blog-categories.create');
    Route::post('/blog-categories/store', [BlogCategoryController::class, 'store'])->name('blog-categories.store');
    Route::get('/blog-categories/{id}', [BlogCategoryController::class, 'show'])->name('blog-categories.show');
    Route::get('/blog-categories/{id}/edit', [BlogCategoryController::class, 'edit'])->name('blog-categories.edit');
    Route::put('/blog-categories/{id}', [BlogCategoryController::class, 'update'])->name('blog-categories.update');
    Route::get('get-all/blog-categories', [BlogCategoryController::class, 'getAllItems'])->name('get-all-blog-categories');
});


Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('/login-post', [AuthenticationController::class, 'loginAttempt']);

Route::get('/excel-export', [ExportController::class, 'excelExport']);


Route::group(['middleware'=>'preventback'], function()
{
    Route::get('/sign-out',[AuthenticationController::class,'signOut'])->name('signout');
});


Route::get('/clear-env', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    return 'Application ENV Cleared';
});

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


















