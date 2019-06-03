<?php include "assets/python/form.php"; ?>

<!DOCTYPE html>
<html>
  <?php include "include/head.php"; ?>
  <body>
    <?php include "include/header.php"; ?>
    <?php include "include/menu.php"; ?>

    <section id="blackboardcontacts">
    	<div class="container">
        <div class="data">
        <img src="/assets/images/karta.jpg" class="karta">
        <div class="contdata">
         <h3>Контактные данные</br>центра <span>пифагор</span></h3>

          <p>г.Самара, </br>
          ул.Ново-Садовая, д.106</br>
          ТЦ «Захар» 5б этаж, офис 502 В</br>
          8 (846) 990-70-53</br>
          8 927 2607053</br>
          vk.com/pifagor63</br></p>
        </div>
      </div>
    		 <div class="info">
          <div class="infobox">
            <div class="tittleinfo"><p>Запишись на <span>бесплатное</span> тестирование</p></div>
            <form method="POST">
    		      <input type="text" class="nameinfobox" placeholder="Введи имя" name="name">
    	        <input type="text" class="phoneinfobox" placeholder="Введи телефон" name="phone">
              <input type="submit" class="zapicinfobox" placeholder="Записаться на бесплатное тестирование" name="submit">
              <!-- <a href="#" class="zapicinfobox">Записаться на бесплатное тестирование</a> -->
            </form>
          </div>
        </div>

      </div>
    </section>

  </body>
</html>
