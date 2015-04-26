<?php

App::uses('Component', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UtilComponent extends Component {

    public function send_externel_mail($to, $subject, $body, $from = NULL, $from_name = NULL, $attachment = NULL) {    
        $Email = new CakeEmail('gmail');
        
        $from_name = !empty($from_name) ? $from_name : 'Konnect City';
        $from = !empty($from) ? $from : 'indiaxicom@gmail.com';
        $Email->from(array($from => $from_name));
        $Email->to($to);
        $Email->subject($subject);
        $Email->attachments($attachment);
        $Email->emailFormat('html');
        $Email->send($body);
    }

}
