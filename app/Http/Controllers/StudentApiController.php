<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Facades\Datatables;

class StudentApiController extends Controller
{
    public function getStudents()
    {
        $query = Student::select('name', 'age', 'email', 'phone', 'address')->get();
        return datatables($query)->make(true);
    }
}
