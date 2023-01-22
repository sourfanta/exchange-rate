<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DateExchangeRate;

class ExchangeRateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        return view('exchange-rate');
    }


    /**
     * Find all exchange rates
     *
     * @return string
     */
    public function find()
    {
        $exchangeRate = DateExchangeRate::all();
        return view('exchange-rate', ['exchangeRate' => $exchangeRate]);
    }

    /**
     * Find exchange rate by date range
     *
     * @param string $startDate
     * @param string $endDate
     * @return string
     */
    public function findByDateRange($startDate, $endDate)
    {
        $exchangeRate = DateExchangeRate::whereBetween('date', [$startDate, $endDate])->get();
        return json_encode($exchangeRate);
    }

    /**
     * Create exchange rate view
     *
     * @return \Illuminate\View\View
     */
    public function createView()
    {
        return view('exchange-rate-create');
    }

    /**
     * Create exchange rate
     *
     * @param Request $request
     * @return string
     */
    public function create(Request $request)
    {
        $exchangeRate = new DateExchangeRate();

        $exchangeRate->date = $request->date;
        $exchangeRate->currencyCodeFrom = $request->currencyCodeFrom;
        $exchangeRate->currencyCodeTo = $request->currencyCodeTo;
        $exchangeRate->valueFrom = $request->valueFrom;
        $exchangeRate->valueTo = $request->valueTo;

        $exchangeRate->save();

        return redirect('/');
    }
}
