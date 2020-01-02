<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Sendmail;

class SendSMS extends Model {

    public function sendMailltesting($request) {

        $mailData['data'] = $request;
        $mailData['subject'] = 'From Mototive Web Solution Contact Us';
        $mailData['attachment'] = array();
        $mailData['template'] = "email.contactus";
        $mailData['mailto'] = 'mahendrajavandhra@gmail.com';
        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);
    }

}
