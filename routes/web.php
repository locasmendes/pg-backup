<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PecaMaquininhaController;
use App\Models\Contact;
use App\Services\CrmService;
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
    // $contact = Contact::first();
    // $data = $contact->only([
    //     'name',
    //     'email',
    //     'phone',
    //     'quero_maquininha',
    //     'quero_vender_online',
    //     'form'
    // ]);
    // $service = new CrmService($data);
    // $service->serviceId('asd')->send();
    return view('pages.home');
})->name('home');

Route::get('faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('peca-a-sua', function () {
    return view('pages.peca-maquininha');
})->name('peca-maquininha.index');


// Route::get('venda-pela-internet', function () {
//     return view('pages.venda-pela-internet');
// })->name('venda-pela-internet.index');

Route::get('termos-e-condicoes-de-uso', function () {
    return view('pages.termos-condicoes-de-uso');
})->name('termos-e-condicoes-de-uso');
Route::get('politica-de-privacidade', function () {
    return view('pages.politica-de-privacidade');
})->name('politica-de-privacidade');

Route::middleware('auth')->group(function () {
    Route::post('export-contacts', [ExportController::class, 'export'])->name('export.contacts');
});
