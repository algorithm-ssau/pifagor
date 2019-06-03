<?php

  require_once '.settings.php';
  require_once 'include/db.php';

  $database = new DataBase();
  $database->connect();

  $subjects = $database->getSubjects();
  $sections = $database->getSections();

  // $database->debug($subjects);

  if (isset($_GET['id'])) {
    $id_subject = $_GET['id'];
  }

?>

<!DOCTYPE html>
<html>
  <?php include "include/head.php"; ?>
  <body>
    <?php include "include/header.php"; ?>
    <?php include "include/menu.php"; ?>

    <section id="blackboardcatalog">
      <img src="/assets/images/teloedet.png" class="telo">
      <img src="/assets/images/energy.png" class="energ">
    	<div class="container">
        <div class="blue">

          <?php if (isset($id_subject)) { ?>

          <div class="bluetittlebox1">
          	<a href="/catalog.php?id=1" <?php if ($id_subject == 1) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[1]; ?></a>
          	<a href="/catalog.php?id=2" <?php if ($id_subject == 2) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[2]; ?></a>
          	<a href="/catalog.php?id=3" <?php if ($id_subject == 3) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[3]; ?></a>
          </div>

          <div class="bluetittlebox2">
            <a href="/catalog.php?id=4" <?php if ($id_subject == 4) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[4]; ?></a>
          	<a href="/catalog.php?id=5" <?php if ($id_subject == 5) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[5]; ?></a>
          	<a href="/catalog.php?id=6" <?php if ($id_subject == 6) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[6]; ?></a>
          </div>

          <div class="bluetittlebox3">
            <a href="/catalog.php?id=7" <?php if ($id_subject == 7) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[7]; ?></a>
          	<a href="/catalog.php?id=8" <?php if ($id_subject == 8) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[8]; ?></a>
          	<a href="/catalog.php?id=9" <?php if ($id_subject == 9) { ?> style="background-color: white !important; color: #0571d6 !important;"<?php } ?> class="bluebox"><?php echo $subjects[9]; ?></a>
          </div>

        <?php } else { ?>
          <div class="bluetittlebox1">
          	<a href="/catalog.php?id=1" class="bluebox"><?php echo $subjects[1]; ?></a>
          	<a href="/catalog.php?id=2" class="bluebox"><?php echo $subjects[2]; ?></a>
          	<a href="/catalog.php?id=3" class="bluebox"><?php echo $subjects[3]; ?></a>
          </div>
          <div class="bluetittlebox2">
            <a href="/catalog.php?id=4" class="bluebox"><?php echo $subjects[4]; ?></a>
          	<a href="/catalog.php?id=5" class="bluebox"><?php echo $subjects[5]; ?></a>
          	<a href="/catalog.php?id=6" class="bluebox"><?php echo $subjects[6]; ?></a>
          </div>
          <div class="bluetittlebox3">
            <a href="/catalog.php?id=7" class="bluebox"><?php echo $subjects[7]; ?></a>
          	<a href="/catalog.php?id=8" class="bluebox"><?php echo $subjects[8]; ?></a>
          	<a href="/catalog.php?id=9" class="bluebox"><?php echo $subjects[9]; ?></a>
          </div>
        <?php } ?>

        </div>
        <!-- <div class="variantsclasses"><p>Тренировочные варианты</p></div>
        <div class="linegreen"></div>
        <div class="vars">
          <div class="varcol1">
          	<a href="#" class="var">Вариант 1</a>
          	<a href="#" class="var">Вариант 5</a>
          </div>

          <div class="varcol2">
            <a href="#" class="var">Вариант 2</a>
          	<a href="#" class="var">Вариант 6</a>
          </div>

          <div class="varcol3">
            <a href="#" class="var">Вариант 3</a>
          	<a href="#" class="var">Вариант 7</a>
          </div>

          <div class="varcol4">
            <a href="#" class="var">Вариант 4</a>
          	<a href="#" class="var">Вариант 8</a>
          </div>
        </div> -->
    	</div>
    </section>

    <footer id="foot">
    	<div class="container">
       <div class="catalogzad"><p>Каталог заданий</p></div>
       <div class="linegr"></div>
        <div class="topic">
          <p>Тема</p>
        </div>

        <?php if (isset($id_subject)) {
          foreach ($sections as $key => $section) {
            if ($section['id_subjects'] == $id_subject) { ?>
              <a href="/section.php?id=<?php echo $id_subject; ?>&id_section=<?php echo $section['id']; ?>" class="subjects"><?php echo $section['name']; ?></a></br>
            <?php }
          }
        } ?>

        <img src="/assets/images/mayatnik.png" class="mayatniks">
        <img src="/assets/images/sila.png" class="silas">
      </div>
    </footer>

  </body>
</html>
