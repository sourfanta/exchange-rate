<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DateExchangeRate;
use App\Dto\ExchangeRateCreateDto;
use App\Enums\CurrencyEnum;
use Illuminate\Validation\Rules\Enum;
use Illuminate\View\View;

class ExchangeRateController extends Controller
{
    /**
     * Find all exchange rates
     *
     * @return View
     */
    public function find(): View
    {
        $exchangeRate = DateExchangeRate::all();
        return view('exchange-rate', ['exchangeRate' => $exchangeRate]);
    }

    /**
     * Find exchange rate by date
     *
     * @param string $date
     * @return View
     */
    public function findByDate(string $date): View
    {
        $exchangeRate = DateExchangeRate::where('date', $date)->get();
        return view('exchange-rate', ['exchangeRate' => $exchangeRate]);
    }

    /**
     * Find exchange rate by date range
     *
     * @param string $startDate
     * @param string $endDate
     * @return View
     */
    public function findByDateRange(string $startDate, string $endDate): View
    {
        if ($endDate == null)
            $endDate = $startDate;

        $exchangeRate = DateExchangeRate::whereBetween('date', [$startDate, $endDate])->get();
        return view('exchange-rate', ['exchangeRate' => $exchangeRate]);
    }

    /**
     * Create exchange rate view
     *
     * @return View
     */
    public function createView(): View
    {
        return view('exchange-rate-create', ['currencyArray' =>  CurrencyEnum::cases()]);
    }

    /**
     * Create exchange rate
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        $request->validate([
            'date' => 'required|date',
            'currencyCodeFrom' => [new Enum(CurrencyEnum::class)],
            'currencyCodeTo' => [new Enum(CurrencyEnum::class)],
            'valueFrom' => 'numeric',
            'valueTo' => 'required|numeric',
        ]);

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
