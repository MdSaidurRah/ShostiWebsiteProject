<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\AboutUsController;
use App\Http\Controllers\website\BlogController;
use App\Http\Controllers\Website\GeneralpageController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\ContactUsController;
use App\Http\Controllers\Website\ConsultationController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\NewsController;
use App\Http\Controllers\Website\CourseController;
use App\Http\Controllers\Website\ReadingController;
use App\Http\Controllers\Website\StudyController;
use App\Http\Controllers\Website\ProjectsController;
use App\Http\Controllers\Website\InteriorProjectController;
use App\Http\Controllers\Website\ExteriorProjectController;
use App\Http\Controllers\Website\PortfolioController;
use App\Http\Controllers\Website\GeneralPagesController;
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



Route::middleware(['VisitorRegister'])->group(function(){


    Route::get('/',[HomeController::class,'home']);

    Route::get('/services',[ServiceController::class,'services']);
    Route::get('/service/home-interior-design',[ServiceController::class,'homeInteriorDesign']);
    Route::get('/service/office-interior-design',[ServiceController::class,'officeInteriorDesign']);
    Route::get('/service/restaurant-interior-design',[ServiceController::class,'restaurantInteriorDesign']);
    Route::get('/service/showroom-interior-design',[ServiceController::class,'showroomInteriorDesign']);
    Route::get('/service/hotel-interior-design',[ServiceController::class,'hotelInteriorDesign']);
    Route::get('/service/interior-design',[ServiceController::class,'interiorDesign']);
    Route::get('/service/exterior-design',[ServiceController::class,'exteriorDesign']);
    Route::get('/service/architectural-consultancy',[ServiceController::class,'architecturalConsultancy']);
    Route::get('/service/renovation-work',[ServiceController::class,'renovationWork']);
    Route::get('/service/custom-furniture-design',[ServiceController::class,'customFurnitureDesign']);
    Route::get('/service/duplex-interior-design',[ServiceController::class,'duplexInteriorDesign']);

    Route::get('/projects/interior',[InteriorProjectController::class,'interior']);
    Route::get('/projects/exterior',[ExteriorProjectController::class,'exteriorProjects']);
    Route::get('/interior-project/{catetgory}',[InteriorProjectController::class,'interiorProjectDetail']);

    Route::get('/project-information/{id}',[InteriorProjectController::class,'projectInformation']);


    Route::get('/portfolio',[PortfolioController::class,'portfolio']);

    Route::get('/about-us',[GeneralPagesController::class,'aboutUs']);
    Route::get('/privacy-policy',[GeneralPagesController::class,'privacyPolicy']);
    Route::get('/terms-of-use',[GeneralPagesController::class,'termsOfUse']);
    Route::get('/site-map',[GeneralPagesController::class,'siteMap']);
    Route::get('/faq',[GeneralPagesController::class,'faq']);
    Route::get('/quotation',[GeneralPagesController::class,'quotation']);
    
    Route::get('/meet-the-team',[AboutUsController::class,'meetTheTeam']);



    Route::get('/contact-us',[ContactUsController::class,'contactUs']);
    Route::post('/contact-us-submission',[ContactUsController::class,'contactUsSubmission']);
    Route::post('/submit-consultation',[ConsultationController::class,'consultationFormSubmission']);

    Route::get('/news',[NewsController::class,'news']);
    Route::get('/article',[NewsController::class,'article']);
    Route::get('/feature',[NewsController::class,'feature']);




});


Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
Route::get('/clear-env', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    return 'Application ENV Cleared';
});
