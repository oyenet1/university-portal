<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class DashboardController extends Controller
{
    function customer()
    {
        return view("livewire.customer-dash-board");
    }
    function vendor()
    {
        return view("livewire.vendor-dash-board");
    }
    function admin()
    {
        return view("livewire.admin-dash-board");
    }
    function superadmin()
    {
        return view("livewire.superadmin-dash-board");
    }
}