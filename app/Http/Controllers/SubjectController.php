<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        $subjects = Subject::with('Company')->with('Commission')->get();

        if ($request->ajax()) {
            return response()->json(
                [
                    'data' => $subjects
                ]
            );
        }

        return view('subjects.index');
    }
}
