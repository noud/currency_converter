<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use ExchangeRate;
use Carbon\Carbon;

class CurrencyConverter extends Controller
{
    //

    public function index(){
        return view("currency-converter", ['availabe_currencies' => ExchangeRate::currencies()]);
    }

    public function convert(Request $request){
        $result = (ExchangeRate::convert($request->amount, $request->from, $request->to, Carbon::parse($request->date)));
        return view("currency-converter", [ 'availabe_currencies' => ExchangeRate::currencies(), 'result' => [ "res" => $result,"from" => $request->from, "to" =>  $request->to,"amount" => $request->amount ]]);
    }
}
