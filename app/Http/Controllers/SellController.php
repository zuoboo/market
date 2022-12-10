<?php

namespace App\Http\Controllers;
use App\Models\ItemCondition;
use App\Models\PrimaryCategory;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function showSellForm() {
        // N+1問題を対策（Eager loading)
        $categories = PrimaryCategory::query()->with([
            'secondaryCategories' => function($query) {
                $query->orderBy('sort_no');
            }
        ])->orderBy('sort_no')->get();
        // $categories = PrimaryCategory::orderBy('sort_no')->get();
        $conditions = ItemCondition::orderBy('sort_no')->get();

        return view('sell', compact('conditions', 'categories'));
    }
}
