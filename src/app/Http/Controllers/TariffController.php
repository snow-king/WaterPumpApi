<?php

namespace App\Http\Controllers;

use App\service\TariffService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TariffController extends Controller
{
    protected TariffService $tariffService;
    public function __construct()
    {
        $this->tariffService = new TariffService();
    }

    public function change(Request $request)
    {
        $credentials = $request->validate([
            'period' => 'required',
            'price' => 'required',
        ]);
        return $this->tariffService->changePrice($credentials["period"], $credentials["price"]);
    }
}
