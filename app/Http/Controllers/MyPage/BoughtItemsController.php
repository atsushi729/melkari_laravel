<?php

namespace App\Http\Controllers\MyPage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class BoughtItemsController extends Controller
{
    public function showBoughtItems()
    {
        $user = Auth::user();

        $items = $user->boughtItems()->orderBy('id', 'DESC')->get();

        return view('mypage.bought_items')
            ->with('items', $items);
    }
}
