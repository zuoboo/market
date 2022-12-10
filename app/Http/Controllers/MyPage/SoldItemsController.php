<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoldItemsController extends Controller
{
    public function showSoldItems()
    {
        $user = Auth::user();

        $items = $user->solditems()->orderBy('id', 'DESC')->get();

        return view('mypage.sold_items', compact('items'));
    }
}
