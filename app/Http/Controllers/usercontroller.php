<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     function useradd() {
    return view('/useradd');
}

function userinsert(){
         return 'Hello';
}

}
