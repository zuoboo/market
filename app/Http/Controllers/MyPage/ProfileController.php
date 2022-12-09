<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Mypage\Profile\EditRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfileEditForm() {
        $user = Auth::user();
        return view('mypage.profile_edit_form', compact('user'));
    }
    public function editProfile(EditRequest $request) {
        // dd($request);
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect()->back()->with('status', 'プロフィールを更新しました。');

    }
}
