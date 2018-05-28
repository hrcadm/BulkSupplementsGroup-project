<?php

namespace App\Http\Controllers;

use App\Models\Auth\User;
use App\Models\Company\Company;
use App\Models\Membership\Membership;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
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
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $memberships = Membership::pluck('name', 'id');
        $companies = Company::pluck('name', 'id');

        return view('users.manage', compact('user', 'memberships', 'companies'));
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
        $userEditData = $request->all();

        $editUser = User::findOrFail($id);
        $editUser->username = $userEditData['username'];
        $editUser->first_name = $userEditData['first_name'];
        $editUser->last_name = $userEditData['last_name'];
        $editUser->suffix = $userEditData['suffix'];
        $editUser->email = $userEditData['email'];
        $editUser->phone = $userEditData['phone'];
        $editUser->mobile = $userEditData['mobile'];
        $editUser->fax = $userEditData['fax'];
        $editUser->membership_id = $userEditData['membership'];
        $editUser->company_id = $userEditData['company'];
        $editUser->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $removeUser = User::findOrFail($id);
        $removeUser->delete();

        return redirect()->route('users.index');
    }

    /**
     * Show view for Authed user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showMyProfile()
    {
        $myProfile = User::find(\Auth::id());
        $memberships = Membership::pluck('name', 'id');
        $companies = Company::pluck('name', 'id');


        return view('users.myprofile', compact('myProfile', 'memberships', 'companies'));
    }
}
