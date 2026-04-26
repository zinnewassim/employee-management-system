<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of employees.
     */
    public function index()
    {
        $users = User::all();
        return view('employees.index', compact('users'));
    }
}
