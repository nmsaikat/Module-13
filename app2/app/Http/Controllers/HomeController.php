<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request){
        $data = [
            ['name' => 'Saikat','city' => 'Dhaka',],
            ['name' => 'Arafat','city' => 'Chittagong',],
            ['name' => 'Rafi','city' => 'Khulna',],
            ['name' => 'Jahid','city' => 'Barishal',],
            ['name' => 'Sakib','city' => 'Sylhet',],
            ['name' => 'Rony','city' => 'Rajshahi',],
            ['name' => 'Imran','city' => 'Mymensingh',],
        ];
        return view('home', ['users' => $data]);
    }
}
