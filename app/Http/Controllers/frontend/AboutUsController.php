<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller {

    public function __construct() {
        
    }

    public function aboutus(Request $request) {
        $data['title'] = "LEO Global Logistics | AboutUs";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['pluginjs'] = array();
        return view('frontend.pages.aboutus', $data);
    }

}
