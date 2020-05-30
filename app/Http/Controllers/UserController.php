<?php

namespace App\Http\Controllers;

use App\EmployeeJob;
use App\EmployeeUnity;
use App\Unity;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->leftJoin('employee_unities', 'users.id', '=', 'user_id')
        ->leftJoin('unities', 'employee_unities.unity_id', '=', 'unity_id')->get();

        return view('users.list')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unities = Unity::all();

        return view('users.newform')->with('unities', $unities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['unity_id', 'is_chief']);
        $data['birthday'] = Carbon::createFromFormat('m/d/Y', $request->birthday)->format('Y-m-d');
        $data['passeport_end_date'] = Carbon::createFromFormat('m/d/Y', $request->passeport_end_date)->format('Y-m-d');
        $data['assignment_date'] = Carbon::createFromFormat('m/d/Y', $request->assignment_date)->format('Y-m-d');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        EmployeeUnity::create([
            'unity_id' => $request->unity_id,
            'user_id' => $user->id,
            'is_chief' => $request->is_chief,
        ]);
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
