<?php

namespace App\Dto;

use Illuminate\Http\Request;

class ExchangeRateCreateDto
{
    public $date;
    public $currencyCodeFrom;
    public $currencyCodeTo;
    public $valueFrom;
    public $valueTo;

    public function __construct(Request $request)
    {
        $this->date = $request->date;
        $this->currencyCodeFrom = $request->currencyCodeFrom;
        $this->currencyCodeTo = $request->currencyCodeTo;
        $this->valueFrom = $request->valueFrom ?? 1;
        $this->valueTo = $request->valueTo;
    }
}
