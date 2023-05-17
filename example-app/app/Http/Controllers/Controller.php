<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function favourite()
    {
        $dish = Dish::table('Dishes')
            ->whereIn('isFavour', [1])
            ->get();
        $dish -> save();
    }

}
