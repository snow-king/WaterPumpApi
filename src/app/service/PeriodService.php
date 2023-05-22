<?php

namespace App\service;

use App\Models\Period;

class PeriodService
{
    public function check(int $id){
        return Period::find($id);
    }
    public function create($begin_date, $end_date){
        return Period::create(["begin_date" => $begin_date, "end_date" => $end_date]);
    }
}
