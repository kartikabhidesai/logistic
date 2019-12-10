<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller {

    public function __construct() {
        
    }

    public function ContactUs(Request $request) {

        $data['title'] = "LEO Global Logistics | ContactUs";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['pluginjs'] = array();
        return view('frontend.pages.ContactUs', $data);
    }

}
