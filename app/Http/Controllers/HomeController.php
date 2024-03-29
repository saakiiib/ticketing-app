<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $tickets = Ticket::orderby('id','DESC')->get();
        return view('landingPage.home', compact('tickets'));
    }
}
