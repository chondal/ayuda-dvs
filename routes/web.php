<?php



use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'web'], function () {
    Route::namespace('\Chondal\AyudaDvs\Http\Controllers')->group(function(){
        Route::get('help', 'AyudaDvsController@index')
        ->name('help.index');
        
        Route::get('help/tutoriales', 'AyudaDvsController@tutoriales')
        ->name('help.tutoriales');

        Route::get('help/faqs', 'AyudaDvsController@faqs')
        ->name('help.faqs');

        Route::get('help/faqs/ver/{id}', 'AyudaDvsController@faq')
            ->name('help.faqs.ver');

        Route::get('help/tutoriales/ver/{id}', 'AyudaDvsController@tutorial')
            ->name('help.tutoriales.ver');
    });
});





