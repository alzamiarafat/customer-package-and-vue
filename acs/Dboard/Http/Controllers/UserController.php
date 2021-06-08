<?php

namespace Acs\Dboard\Http\Controllers;

use Acs\Dboard\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('dboard::user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dboard::user.create');
    }

    public function store(RegisterRequest $request)
    {
        User::create(array_merge(
            $request->validated(),
            [
                'password' => bcrypt($request->input('password')),
                'role' => strtoupper($request->input('role')),
                'type' => strtoupper($request->input('role')),
                'weight' => strtoupper($request->input('role')) == strtoupper('admin') ? 99.99 : 9.99,
            ]
        ));
        return redirect()->back()->with('success', 'User create successfully done');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function edit(User $user)
    {
        return view('dboard.user.create', ['user' => $user]);
    }

    public function update(RegisterRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->back()->with('success', 'User update successfully done');

    }


    public function destroy(User $user)
    {
        return $user->delete();
    }

}
