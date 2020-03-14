<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stages.index');
    }

    public function getall(Request $request)
    {
        if ($request->ajax()) {
            $stages = DB::select(DB::raw("select subjects.name as subject_name, stages.id as stage, soutenances.id as soutenance, soutenances.dates, pfe_name, pvs.id as pv, sum(note*coefficient) / sum(coefficient) as average from soutenances, pvs, criteria_pv, stages, stage_user, users, criterias, subjects where soutenances.pv_id = pvs.id and criteria_pv.pv_id = pvs.id and stages.id = soutenances.stage_id and stage_user.stage_id = stages.id and stage_user.user_id = users.id and criterias.id = criteria_pv.criteria_id and subjects.id = stages.subject_id and decision = 'Congratulation' group by soutenances.id, pvs.id, pfe_name, stages.id, soutenances.dates, subjects.name"));
            return response()->json([
                'data' => $stages
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
