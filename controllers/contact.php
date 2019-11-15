<?php
require('models/books.php');

function contactForm()
{
  require ('views/contact.php');
}



if(isset($_POST['submitMail'])) {
  $destinataire = "dezfzref@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['mail'];
  $message = $_POST['message'];

  $sendMail = mail($destinataire, $name.' '.$email, $message, '');

    if ($sendMail == true) {
      echo '<p>Message envoyé.</p>';
    } else {
      echo '<p>Message non envoyé.</p>';
    }

  
}