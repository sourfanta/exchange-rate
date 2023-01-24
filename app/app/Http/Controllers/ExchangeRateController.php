<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DateExchangeRate;
use App\Dto\ExchangeRateCreateDto;

class ExchangeRateController extends Controller
{
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
     * Find exchange rate by date
     *
     * @param string $date
     * @return string
     */
    public function findByDate($date)
    {
        $exchangeRate = DateExchangeRate::where('date', $date)->get();
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
        if ($endDate == null)
            $endDate = $startDate;

        $exchangeRate = DateExchangeRate::whereBetween('date', [$startDate, $endDate])->get();
        return view('exchange-rate', ['exchangeRate' => $exchangeRate]);
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
        $dto = new ExchangeRateCreateDto($request);

        $exchangeRate = new DateExchangeRate();

        $exchangeRate->date = $dto->date;
        $exchangeRate->currencyCodeFrom = $dto->currencyCodeFrom;
        $exchangeRate->currencyCodeTo = $dto->currencyCodeTo;
        $exchangeRate->valueFrom = $dto->valueFrom;
        $exchangeRate->valueTo = $dto->valueTo;

        $exchangeRate->save();

        return redirect('/');
    }
}
