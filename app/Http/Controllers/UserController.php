<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $users = User::query()->latest('id')->get();

    return view('users.index', compact('users'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreUserRequest $request)
  {
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
      'is_admin' => 0,
      'is_user' => 1,
    ]);

    return back();
  }

  /**
   * Display the specified resource.
   */
  public function show(User $user)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(User $user)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateUserRequest $request, User $user)
  {
    $user->update([
      'name' => $request->name,
      'email' => $request->email,
      // 'password' => bcrypt($request->password),
      // 'is_admin' => 0,
      // 'is_user' => 1,
    ]);

    return back();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    $user->delete();

    return back();
  }
}
