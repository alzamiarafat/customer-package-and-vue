<?php

namespace Acs\Merchants\Http\Controllers;

use Acs\Merchants\Models\Merchant;
use App\Models\User;
use Acs\Merchants\DataTables\MerchantDataTable;
use Illuminate\Http\Request;

class MerchantController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MerchantDataTable $dataTable)
    {
        return $dataTable->render('merchantDboard::views.merchantList');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merchantDboard::views.merchantDboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $merchant = new Merchant;

        $user->merchant()->create([
            'store_name' => $request->sname,
            'location' => $request->slocation,
            'discount' => $request->discount,
        ]);

        // $merchant->store_name = $request->sname;
        // $merchant->discount = $request->discount;
        // $merchant->location = $request->slocation;
        // $merchant->save();
        //return back()->withInput();
        return redirect()->route('merchant.index')->with('success', 'User create successfully done');
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
