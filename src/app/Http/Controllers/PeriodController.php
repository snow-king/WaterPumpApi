<?php

namespace App\Http\Controllers;

use App\service\PeriodService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PeriodController extends Controller
{

    protected PeriodService $period;
    public function __construct()
    {
        $this->period = new PeriodService();
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'begin_date' => 'required',
            'end_date' => 'required',
        ]);
        return $this->period->create($credentials["begin_date"], $credentials["end_date"]);
    }
    public function list()
    {
        return $this->period->list();
    }
}
