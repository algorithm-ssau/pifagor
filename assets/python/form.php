<?php

if (isset($_POST['submit'])) {
  if (isset($_POST['name'])) {
      $name = $_POST['name'];
  }
  if (isset($_POST['phone'])) {
      $phone = $_POST['phone'];
  }

  $message = exec("./pifagor.local/cgi-bin/send_form.py");
  echo $message;

}

 ?>
