<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SendSMS;

class ContactUsController extends Controller {

    public function __construct() {
        
    }

    public function ContactUs(Request $request) {

        if ($request->isMethod('post')) {
            $objSendSms = new SendSMS();
            $sendSMS = $objSendSms->sendMailltesting($request);
            $return['status'] = 'success';
            $return['message'] = 'Thanks for contact us. We will contact you soon.';
            $return['redirect'] = route('contactus');
            echo json_encode($return);
            exit;
        }
        $data['title'] = "LEO Global Logistics | ContactUs";
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['js'] = array("contactus.js");
        $data['pluginjs'] = array();
        $data['funinit'] = array("ContactUs.init();");
        return view('frontend.pages.ContactUs', $data);
    }

}
