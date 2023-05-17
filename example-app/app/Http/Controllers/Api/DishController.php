<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\Support\Facades\Dishes;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Dish::table('Dishes')->get();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
  /*  public function store(Dish $dishes)
    {
        foreach ($dishes as $dish)
        {
            if ($dish::$isFavour)
            {
                return json_encode ( $dish, JSON_UNESCAPED_UNICODE );
            }
        }
    }
*/
    /**
     * Display the specified resource.
     */
    public function show(bool $isFavour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
