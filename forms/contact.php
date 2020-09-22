<?php

  $receiving_email_address = 'ventas@grupoferreterobolivar.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['nombre']; 
  $contact->from_phone = $_POST['telefono'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['asunto'];

  $contact->add_message( $_POST['nombre'], 'De');
  $contact->add_message( $_POST['telefono'], 'Teléfono');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['mensaje'], 'Mensaje', 10);

  echo $contact->send();
?>
