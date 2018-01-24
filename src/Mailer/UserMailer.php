<?php
/**
 * Created by PhpStorm.
 * User: QuangNV
 * Date: 1/18/2018
 * Time: 3:02 PM
 */
namespace App\Mailer;

use Cake\Mailer\Mailer;

class UserMailer extends Mailer
{
    public function sendmail($user, $url)
    {   
        $from = 'YumeAgent Vietnam';
        $subject = 'Confirm your registration';
        

        $this->emailFormat()
            ->setFrom('yumeAgentTestEmail@localhost' , 'YumeAgent Vietnam')
            ->to($user->email)
            ->emailFormat('html')
            ->subject($subject)
            ->viewVars([
                'username' => $user->username,
                'useremail' => $user->email,
                'userpassword' => $user->password,
                'usertime' => $user->created,
                'urlVerify' => $url,
                'imgSrc' => WWW_ROOT.'img'.DS.'yume.png'
            ])
            ->template('registered')
            ->layout('customLayout');
    }

    public function forgotPasswordEmail($user, $url){
        $subject = 'reset password';
        $this->emailFormat()
            ->setFrom('yumeAgentTestEmail@localhost' , 'YumeAgent Vietnam')
            ->to($user->email)
            ->emailFormat('html')
            ->subject($subject)
            ->viewVars([
                'username' => $user->username,
                'useremail' => $user->email,
                'userpassword' => $user->password,
                'usertime' => $user->created,
                'urlVerify' => $url,
                'imgSrc' => WWW_ROOT.'img'.DS.'yume.png'
            ])
            ->template('resetpw')
            ->layout('customLayout');
    }

}
