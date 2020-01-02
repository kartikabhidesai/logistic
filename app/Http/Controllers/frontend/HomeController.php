<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    function __construct() {
        
    }

    public function home(Request $request) {
        $data['title'] = "LEO Global Logistics | Home";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['js'] = array();
        $data['pluginjs'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.home', $data);
    }

}
