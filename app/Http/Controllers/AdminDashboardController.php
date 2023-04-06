<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', ['users' => People::orderBy('id', 'desc')->get()]);
    }
    public function userStatus($id)
    {
        return redirect('/dashboard')->with('message', People::userStatusUP($id));
    }
    public function userStatsDown($id)
    {
        return redirect('/dashboard')->with('message', People::userStatusDown($id));
    }
    public function decline($id)
    {
        People::userDecline($id);
        return redirect('/dashboard')->with('message', 'User delete successfully.');
    }
}
