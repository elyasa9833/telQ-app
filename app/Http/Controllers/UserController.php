<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Question;
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
        //
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
    public function show(User $user)
    {
        return view('profile.showProfile', [
            'user' => $user,
            'imgPath' => ($user->photo_profile) ? "asset('/storage'. $user->photo_profile)":"../img/profile/User.svg",
            'topic_count' => Question::where('user_id', $user->id)->distinct('id')->count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if($user->id != auth()->user()->id) {
            return abort(404);
        };

        return view('profile.editProfile', [
            'user' => $user,
            'imgPath' => ($user->photo_profile) ? "asset('/storage'. $user->photo_profile)":"../img/profile/User.svg",
            'topic_count' => Question::where('user_id', $user->id)->distinct('id')->count()
        ]);
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
        $updateProfile = $request->validate([
            'fullname' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'photo_profile' => 'image|file|max:3072|nullable'
        ]);

        if($request->file('photo_profile')) {
            $updateProfile['photo_profile'] = $request->file('photo_profile')->store('profile-images');
        }

        User::where('id', $id)->update($updateProfile);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function view_user()
    {
        return view('admin.viewUser', [
            'users' => User::where('role', '!=', 'admin')->latest()->get()
        ]);
    }
}
