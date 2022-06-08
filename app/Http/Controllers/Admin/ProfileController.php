<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.profile.profile', [
            "user_id" => Auth::user()->id,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $user = UsersModel::find($id);

        if (!Hash::check($data["old_password"], $user->password)) {
            return redirect()->route('profile.index')->with(['message' => "Password lama salah"]);
        }

        if ($data["password"] != $data["password_confirmation"]) {
            return redirect()->route('profile.index')->with(['message' => "Password tidak cocok"]);
        }

        $new_password = Hash::make($data["password"]);

        $user->password = $new_password;
        $user->save();

        return redirect()->route('profile.index')->with(['message' => "Success"]);
    }
}
