<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectserviceController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = "LEO Global Logistics | Custom Clearance";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['pluginjs'] = array();
        return view('frontend.pages.projectcargo', $data);
    }

}
