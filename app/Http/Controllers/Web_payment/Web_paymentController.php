<?php

namespace App\Http\Controllers\Web_payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_paymentController extends Controller
{
    public function index()
    {
        return view('web.footer.payment');
    }
}
