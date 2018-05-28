<?php

namespace App\Http\Controllers;

use App\Models\Company\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::with('User')->get();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.manage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCompanyData = $request->all();

        $newCompany = new Company();
        $newCompany->name = $newCompanyData['name'];
        $newCompany->address_one = $newCompanyData['address_one'];
        $newCompany->address_two = $newCompanyData['address_two'];
        $newCompany->city = $newCompanyData['city'];
        $newCompany->state = $newCompanyData['state'];
        $newCompany->post_code = $newCompanyData['post_code'];
        $newCompany->country = $newCompanyData['country'];
        $newCompany->phone = $newCompanyData['phone'];
        $newCompany->fax = $newCompanyData['fax'];
        $newCompany->website = $newCompanyData['website'];
        $newCompany->email = $newCompanyData['email'];
        $newCompany->save();

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);

        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('company.manage', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editCompanyData = $request->all();

        $editCompany = Company::findOrFail($id);
        $editCompany->name = $editCompanyData['name'];
        $editCompany->address_one = $editCompanyData['address_one'];
        $editCompany->address_two = $editCompanyData['address_two'];
        $editCompany->city = $editCompanyData['city'];
        $editCompany->state = $editCompanyData['state'];
        $editCompany->post_code = $editCompanyData['post_code'];
        $editCompany->country = $editCompanyData['country'];
        $editCompany->phone = $editCompanyData['phone'];
        $editCompany->fax = $editCompanyData['fax'];
        $editCompany->website = $editCompanyData['website'];
        $editCompany->email = $editCompanyData['email'];
        $editCompany->save();

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCompany = Company::findOrFail($id);
        $deleteCompany->delete();

        return redirect()->route('company.index');
    }
}
