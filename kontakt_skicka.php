<html>
    <head>
<link
            rel="stylesheet"
            type="text/css"
            href="sources/stylesheet.css"
        >
</head>
    <body id="php-script">
        <?php
            function spamcheck($field) {
            //filter_var() sanitizes the e-mail 
            //address using FILTER_SANITIZE_EMAIL
                $field=filter_var($field, FILTER_SANITIZE_EMAIL);        
              //filter_var() validates the e-mail
             //address using FILTER_VALIDATE_EMAIL
                if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
            }
            if (isset($_REQUEST['email'])) {//if "email" is filled out, proceed
            //check if the email address is invalid
                if (isset($_REQUEST['bait'])) {
                    echo "Invalid input 1";
                } else {
                    $mailcheck = spamcheck($_REQUEST['email']);
                    if ($mailcheck==FALSE) {
                        echo "Invalid input";
                    } else {//send email
                        $email = $_REQUEST['email'] ; 
                        $message = $_REQUEST['message'] ;
                        $subject = 'Meddelande från hemsidan';
                        $header = $header = "From:" . $email;
                    
                        mail("somebody@example.com", $subject,
                        $message, $header );
                    
                        echo "Thank you for using our mail form";
                    }
                }
            }
        ?>
    </body>
</html>