<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function report(){
        //
        $users = User::all();
        $pdf = PDF::loadView('student.diploma', compact('users'));
        return $pdf->download('Diploma.pdf');
    }
}
