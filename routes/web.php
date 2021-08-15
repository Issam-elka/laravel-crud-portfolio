<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioDynamicController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesDynamicController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SkillsDynamicController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Facts;
use App\Models\header;
use App\Models\Home;
use App\Models\Portfolio;
use App\Models\PortfolioDynamic;
use App\Models\Services;
use App\Models\ServicesDynamic;
use App\Models\Skills;
use App\Models\SkillsDynamic;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $home = Home::all();
    $about = About::all();
    $facts = Facts::all();
    $skills = Skills::all();
    $skillsDynamic = SkillsDynamic::all();
    $portfolio = Portfolio::all();
    $portfolioDynamic = PortfolioDynamic::all();
    $services = Services::all();
    $servicesDynamic = ServicesDynamic::all();
    $contact = Contact::all();
    
    return view('welcome', compact('home', 'about', 'facts', 'skills', 'skillsDynamic', 'portfolio', 'portfolioDynamic', 'services','servicesDynamic', 'contact'));
});

Route::get('/admin', function(){
    return view('pages.BackOffice.admin');
});

// HOME STATIC ______________________________________________________________________________________

Route::get('/homeBack', function(){
    $homes= Home::all();
    return view('pages.BackOffice.home.homeBack', compact('homes'));
});

Route::get('/home/{id}/edit', [HomeController::class, 'edit']);

Route::put('/home/{id}/update', [HomeController::class, 'update']);


// ABOUT STATIC _____________________________________________________________________________________

Route::get('/aboutBack', function(){
    $abouts= About::all();
    return view('pages.BackOffice.about.aboutBack', compact('abouts'));
});

Route::get('/about/{id}/edit', [AboutController::class, 'edit']);

Route::put('/about/{id}/update', [AboutController::class, 'update']);

// CONTACT STATIC _____________________________________________________________________________________

Route::get('/contactBack', function(){
    $contacts= Contact::all();
    return view('pages.BackOffice.contact.contactBack', compact('contacts'));
});

Route::get('/contact/{id}/edit', [ContactController::class, 'edit']);

Route::put('/contact/{id}/update', [ContactController::class, 'update']);


// FACTS STATIC _____________________________________________________________________________________

Route::get('/factsBack', function(){
    $facts= Facts::all();
    return view('pages.BackOffice.facts.factsBack', compact('facts'));
});

Route::get('/facts/{id}/edit', [FactsController::class, 'edit']);

Route::put('/facts/{id}/update', [FactsController::class, 'update']);

// SKILLS STATIC_____________________________________________________________________________________
Route::get('/skillsBackStat', function(){
    $skills= Skills::all();
    return view('pages.BackOffice.skills.static.skillsBackStat', compact('skills'));
});

Route::get('/skills/{id}/edit', [SkillsController::class, 'edit']);

Route::put('/skills/{id}/update', [SkillsController::class, 'update']);

// SKILLS DYNAMIC ___________________________________________________________________________________
Route::get('/skillsBackDyn', function(){
    $skillsDynamics = SkillsDynamic::all();
    return view('pages.BackOffice.skills.dynamic.skillsBackDyn', compact('skillsDynamics'));
});
Route::get('/skills/{id}/show', [SkillsDynamicController::class, 'show']);
Route::get('/contenuSkillsDynamic/{id}/edit', [SkillsDynamicController::class, 'edit']);
Route::put('/contenuSkillsDynamic/{id}/update', [SkillsDynamicController::class, 'update']);
Route::post('/formSkills', [SkillsDynamicController::class, 'store']);
Route::delete('/contenuSkillsDelete/{id}', [SkillsDynamicController::class, 'destroy']);


// PORTFOLIO STATIC_____________________________________________________________________________________
Route::get('/portfolioBackStat', function(){
    $portfolios= Portfolio::all();
    return view('pages.BackOffice.portfolio.static.portfolioBackStat', compact('portfolios'));
});

Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit']);

Route::put('/portfolio/{id}/update', [PortfolioController::class, 'update']);


// PORTFOLIO DYNAMIC ___________________________________________________________________________________
Route::get('/portfolioBackDyn', function(){
    $portfolioDynamics = PortfolioDynamic::all();
    return view('pages.BackOffice.portfolio.dynamic.portfolioBackDyn', compact('portfolioDynamics'));
});
Route::get('/portfolio/{id}/show', [PortfolioDynamicController::class, 'show']);
Route::get('/contenuPortfolioDynamic/{id}/edit', [PortfolioDynamicController::class, 'edit']);
Route::put('/contenuPortfolioDynamic/{id}/update', [PortfolioDynamicController::class, 'update']);
Route::post('/formPortfolio', [PortfolioDynamicController::class, 'store']);
Route::delete('/contenuPortfolioDelete/{id}', [PortfolioDynamicController::class, 'destroy']);



// SERVICCES STATIC_____________________________________________________________________________________
Route::get('/servicesBackStat', function(){
    $services= Services::all();
    return view('pages.BackOffice.services.static.servicesBackStat', compact('services'));
});

Route::get('/services/{id}/edit', [ServicesController::class, 'edit']);

Route::put('/services/{id}/update', [ServicesController::class, 'update']);


// SERVICES DYNAMIC ___________________________________________________________________________________
Route::get('/servicesBackDyn', function(){
    $servicesDynamics = ServicesDynamic::all();
    return view('pages.BackOffice.services.dynamic.servicesBackDyn', compact('servicesDynamics'));
});
Route::get('/services/{id}/show', [ServicesDynamicController::class, 'show']);
Route::get('/contenuServicesDynamic/{id}/edit', [ServicesDynamicController::class, 'edit']);
Route::put('/contenuServicesDynamic/{id}/update', [ServicesDynamicController::class, 'update']);
Route::post('/formServices', [ServicesDynamicController::class, 'store']);
Route::delete('/contenuServicesDelete/{id}', [ServicesDynamicController::class, 'destroy']);


// HEADER STATIC_____________________________________________________________________________________
Route::get('/headerBack', function(){
    $headers= header::all();
    return view('pages.BackOffice.header.headerBack', compact('headers'));
});

Route::get('/header/{id}/edit', [HeaderController::class, 'edit']);

Route::put('/header/{id}/update', [HeaderController::class, 'update']);