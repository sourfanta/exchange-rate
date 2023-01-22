<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Connection name.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date')->unique;
            $table->string('currencyCodeFrom');
            $table->string('currencyCodeTo');
            $table->float('valueFrom');
            $table->float('valueTo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_exchange_rates');
    }
};
