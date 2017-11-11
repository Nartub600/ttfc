<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Currency;

class CurrenciesController extends Controller
{
    public function index () {
        $currencies = Currency::orderBy('name')->paginate();

        return view('currencies.index', [
            'currencies' => $currencies
        ]);
    }

    public function show (Request $request, $id) {
        $currency = Currency::find($id);

        return view('currencies.show', [
            'currency' => $currency,
            'back'     => $request->headers->get('referer') ?: route('currencies.index')
        ]);
    }
}
