<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\restaurant;

use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    private  $restaurant;



    public function __construct(restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $restaurant = DB::table('restaurants')->paginate(12);

        return array(['restaurant' => $restaurant]);
    }
}
