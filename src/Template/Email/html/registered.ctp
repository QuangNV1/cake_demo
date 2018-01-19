<table style="border:solid #e7e8ef 3.0pt;font-size:10pt;font-family:Calibri" width="600" cellspacing="0" cellpadding="0" border="1">
        <thead>
            <tr>
            <td>
                <br>
                <img alt="" src="http://www.yume-ag.com/images/logo_vn.png" class="CToWUd">
                <!-- <?= $this->Html->image("yume.png", array('fullBase' => true)) ?> -->
                <br>
               <br>
             </td>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td style="border:white">
                <br>
                <h1><span style="font-size:19.0pt;font-family:Verdana;color:black"><span class="il">Registration</span> </span></h1>
                <br>
            </td>
        </tr>
        <tr>
            <td style="border:white">
                <div style="color:#818181;font-size:10.5pt;font-family:Verdana">
                    Dear <a href="mailto:<?= $useremail?>" target="_blank"><?= $useremail?></a>,<br>
                    <br>
                    This is to notify you of a successful registration to your account.
                    <br>
                    <br>
                    Registration Time: <?= $usertime ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <font size="2">
                        Thank you for signing up with YumeAgen Vietnam. To provide you the best service possible, we require you to verify your email address. If you are receiving this email and have never signed up with us, please feel free to ignore this email. Your username is <strong><?= $username ?></strong>, but to finish your verification, please follow the directions below.

                        Please click on the link below or copy and paste it into your browser to proceed with your registration.
                    <br>   
                    <br>
                        <a href="<?= $urlVerify?>" target="_blank"><?= $urlVerify?></a>
                    <br>
                    </font>
                    <br>
                    <br>
                    Best regards,<br>
                    <span class="il">YemeAgent Vietnam</span> Dev Team<br>
                </div>
            </td>
        </tr>
        <tr>
            <td style="border:white">
                <div style="color:#818181;font-size:9pt;font-family:Verdana">
                    <br>
                    <br>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="height:30pt;background-color:#e7e8ef;border:none">
                <center>You are receiving this email because you registered on <a href="#" style="color:#5b9bd5" ><span class="il">YumeAgent</span>Vietnam</a><br></center>
            </td>
        </tr>
        </tbody>
</table>