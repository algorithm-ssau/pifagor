<?php

if (isset($_GET['id'])) {
  $id_subject = $_GET['id'];
  if (isset($_GET['id_section'])) {
    $id_section = $_GET['id_section'];

    require_once '.settings.php';
    require_once 'include/db.php';

    $database = new DataBase();
    $database->connect();

    $tasks = $database->getTask($id_subject, $id_section);

    // $database->debug($tasks);

  }
}



?>

<!DOCTYPE html>
<html>
  <?php include "include/head.php"; ?>
  <body>
    <?php include "include/header.php"; ?>
    <?php include "include/menu.php"; ?>


    <?php
      if (isset($tasks)){
        foreach ($tasks as $key => $value) { ?>
          <div>
            <h1 style="margin-top: 100px; text-align: center;">Задачка</h1>
            <p style="width: 80%; margin-left: 10%; text-align: justify;"><?php echo $value['question']; ?></p>
            <h3 style="margin-left: 10%;">Ответ:</h3>
            <p style="margin-left: 10%;"><?php echo $value['answer']; ?></p>
          </div>
        <?php }
      } ?>

  </body>
</html>
