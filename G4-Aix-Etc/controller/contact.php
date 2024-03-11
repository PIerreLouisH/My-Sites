<?php

if (isset($_POST['envoyer'])) {
    $response   = isset($_POST["g-recaptcha-response"]) ? $_POST['g-recaptcha-response'] : null;
    $privatekey = "6LcILn8UAAAAAOz62veT0_L3a2E0t9MHBo3t2h1G";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array(
        'secret' => $privatekey,
        'response' => $response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ));
    
    $resp = json_decode(curl_exec($ch));
    curl_close($ch);
    
    if ($resp->success) {
    $email=$_POST['email'];
    $to      = 'contact@aix-etc.labo-g4.info';
    $subject = $_POST['raison'];
    $message = 'Email d\'un ' .$_POST['Quietevous']. ' du nom de ' .$_POST['Nom']. ' a écrit: ' .$_POST['message'];
    $headers = 'From:' .$email. "\r\n" .
    'Reply-To:' .$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    header("Location:../index.php");
    } else {
        echo '<script type="text/javascript">alert("Vous êtes un bot. Si vous pouvez lire ce message cela signifie que vous êtes conscient. L\'armée a été prévenu de l\'imminence de l\'invasion des IA.");</script>';
        echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
    }
		
	}

else {
    header("Location:../index.php");
}

?>