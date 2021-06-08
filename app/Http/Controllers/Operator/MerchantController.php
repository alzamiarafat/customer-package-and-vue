<?php

namespace Acs\Dboard\Http\Controllers\Operator;

use Acs\Dboard\DataTables\MerchandsDataTable;
use Acs\Dboard\Http\Controllers\Controller;
use App\Http\Requests\MerchantStoreRequest;
use App\Models\Merchant\Merchant;
use Acs\Profile\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MerchandsDataTable $dataTable)
    {
        return $dataTable->render('operator.merchant.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('operator.merchant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(MerchantStoreRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact_no' => $request->input('contact_no',null),
            'password' => $request->input('password'),
            'role' => 'MERCHANT',
            'type' => 'MERCHANT',
            'weight' => 9.99
        ]);
        Profile::create([
            'user_id' => $user->id,
            'full_name' => $request->input('full_name'),
            'father_name' => $request->input('father_name'),
            'mother_name' => $request->input('mother_name'),
            'spouse_name' => $request->input('spouse_name', null),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'marital_status' => $request->input('civil_status'),
            'religion' => $request->input('religion'),
            'nationality' => $request->input('nationality'),
            'present_address' => $request->input('present_address'),
            'permanent_address' => $request->input('permanent_address'),
            'blood_group' => $request->input('blood_group', null),
        ]);
        return redirect()->back()->with('success', "Merchant create successfully done");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
