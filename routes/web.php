<?php
    
    Route::get('/', "CurrencyConverter@index");

    Route::post('/convert', "CurrencyConverter@convert");
?>