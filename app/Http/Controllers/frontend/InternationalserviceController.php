<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternationalserviceController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = "LEO Global Logistics | 3PL";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['js'] = array();
        $data['pluginjs'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.international', $data);
    }

}
