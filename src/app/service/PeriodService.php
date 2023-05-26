<?php

namespace App\service;

use App\Models\Period;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class PeriodService
{
    public function list(): Collection
    {
        return Period::all();
    }
    public function create($begin_date, $end_date){
        return Period::create(["begin_date" => Carbon::create($begin_date), "end_date" => Carbon::create($end_date)]);
    }
}
