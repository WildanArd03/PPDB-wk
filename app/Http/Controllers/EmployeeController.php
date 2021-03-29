<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getData()
    {
        $employees = Employee::paginate(8);
        return view('admins.list-daftar', compact('employees'));
    }
}
