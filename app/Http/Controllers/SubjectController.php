<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {

        return view('subjects.index');
    }

    public function getall(Request $request)
    {

        if ($request->ajax()) {

            // EX:
            // select * from subjects, commissions, commission_user, users where subjects.commission_id = commissions.id and commissions.id = commission_user.commission_id and commission_user.user_id = users.id and name LIKE '%app%' and valid = 'canceled' and role = 'Responsable';

            $subjects = Subject::with('Company')->with('Commission')->where(function ($query) use ($request) {
                $request->status ? $query->where('valid', '=', $request->status) : ($request->search ? $query->whereRaw("lower(name) like '%' || lower('$request->search') || '%'") : $query);
            })->get();

            $ajax_data = [];

            foreach ($subjects as $subject) {

                $responsable = '';

                if ($subject->commission) {
                    foreach ($subject->commission->users as $user) {
                        $responsable = $user->pivot->role === 'Responsable' ? $user->username : '';
                    }
                }

                $ajax_data[] = array(
                    'id' => $subject->id,
                    'name' => $subject->name,
                    'valid' => $subject->valid,
                    'company_name' => $subject->company->name,
                    'commission_responsable' => $responsable
                );
            }

            return response()->json(
                [
                    'data' => $ajax_data,
                ]
            );
        }
    }
}
