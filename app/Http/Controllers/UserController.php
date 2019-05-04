<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Repositories\Contracts\UserRepositoryInterface;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->with('profile')->get();

        return view('backend.user.index', compact('users'));
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
        if (Auth::check() && Auth::user()->id == $id) {
            $user = $this->userRepository->editUser($id);

            return view('frontend.user.edit', compact('user'));
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = $request->only('email');
        $this->userRepository->updateUser($user, $id);

        return back()->with('status', trans('messages.updated_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->deleteUser($id);

        return back()->with('status', trans('messages.deleted_success'));
    }

    /**
     * Show password form.
     */
    public function showPasswordForm($id)
    {
        if (Auth::check() && Auth::user()->id == $id) {
            $user = $this->userRepository->findOrFail($id);

            return view('frontend.user.password', compact('user'));
        }

        return back();
    }

    /**
     * Change password.
     */
    public function changePassword(ChangePasswordRequest $request, $id)
    {
        $password = ['password' => $request->password];
        $this->userRepository->changePassword($password, $id);

        return back()->with('status', trans('messages.changed_password'));
    }

    /**
     * Verify user.
     */
    protected function verify($token)
    {
        $user = $this->userRepository->verifyUser($token);

        return redirect()->route('login')
            ->with('status', trans('messages.verified_email'))
            ->withInput($user->only('email'));
    }
}
