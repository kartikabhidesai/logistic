<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LclserviceController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = "LEO Global Logistics | Project Cargo";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['js'] = array();
        $data['pluginjs'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.shipments', $data);
    }

}
