<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\User;

class UsersController extends Controller
{
    //Show a list of all users in the database
    /**
     * @return \Illuminate\View\View
     */
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    //show a specific user identified by their user id
    /**
     * @param $user_id
     * @return \Illuminate\View\View
     */
    public function show($user_id){
        $user = User::findOrFail($user_id);
        return view('users.show',compact('user'));
    }

    public function home(){
        return view('users.home');
    }

    //create a new user
    /**
     * @return \Illuminate\View\View
     */
    public function create(){
        return view('/auth/register');
    }

    //CODE BELOW ISN'T NEEDED IF WE'RE LOGGING IN USING THE USER MODEL
//
//    //send a newly created user to the database
//    /**
//     * @param UserRequest $request
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//    public function store(UserRequest $request){
//        //validation
//        //this will never run if validation fails
//
//        User::create($request->all());
//        return redirect('users');
//    }
//
//    /**
//     * @param $id
//     * @return \Illuminate\View\View
//     */
//    public function edit($id){
//        $user = User::findOrFail($id);
//        return view('users.edit', compact('user'));
//    }
//
//    /**
//     * @param $id
//     * @param UserRequest $request
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
//     */
//    public function update($id, UserRequest $request){
//        $user = User::findOrFail($id);
//        $user->update($request->all());
//
//        return redirect('users');
//    }
}
