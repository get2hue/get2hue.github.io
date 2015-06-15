<?php
if(isset($_POST['submit'])) {
   $to = 'ugowedsruby@gmail.com' ;     //put your email address on which you want to receive the information
   $inputName = '';   //set the subject of email.
   $inputEmail  = 'MIME-Version: 1.0' . "\r\n";
   $selectGuests .= '';
   $selectAttending = ''
   mail($to,  $inputName, $selectGuests, $selectAttending);
   header('Location: index.html');
}
?>