<?php

namespace App\service;

use App\Models\Tariff;

class TariffService
{
    public function changePrice(int $period_id, int $price){
        return Tariff::create(['period'=>$period_id, 'price'=>$price]);
    }
}
