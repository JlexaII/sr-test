<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = new Profile();
        $id = Auth::id();
        $profile = Profile::where('id', $id)->first();
        return view('auth.inc.profil', ['profile' => $profile]);
    }

    public function updatePhoto(Request $request) {
        $this->validate($request, [
            'photo' => 'required|image'
        ]);
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $fileName = auth()->id() . '.' . $extension;
        $path = public_path('images/users/' . $fileName);
        image::make($file)->fit(1440, 1440)->save($path);
        $user = auth()->user();
        $user->photo_extension = $extension;
        $saved = $user->save();
        $data['success'] = $saved;
        $data['path'] = $user->getAvatarUrl() . '?' . uniqid();
        return $data;
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
    public function store($id, Request $req) {
        $id = Auth::id();
        $profile = Profile::where('id', $id)->first();
        $profile->cname = $req->input('cname');
        $profile->adress = $req->input('adress');
        $profile->telefon = $req->input('telefon');
        $profile->account = $req->input('account');
        $profile->bank = $req->input('bank');
        $profile->mfo = $req->input('mfo');
        $profile->inn = $req->input('inn');
        $profile->social = $req->input('social');
        $profile->save();
        return view('auth.inc.profil', ['profile' => $profile]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
