<?php

namespace App\Http\Controllers;

use App\service\PeriodService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PeriodController extends Controller
{
    public function create(Request $request)
    {
        $credentials = $request->validate([
            'begin_date' => 'required',
            'end_date' => 'required',
        ]);
        return (new PeriodService())->create($credentials["begin_date"], $credentials["end_date"]);
    }
}
