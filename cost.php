<?php include "assets/python/form.php"; ?>

<!DOCTYPE html>
<html>
  <?php include "include/head.php"; ?>
  <body>
    <?php include "include/header.php"; ?>
    <?php include "include/menu.php"; ?>

    <section id="blackboardcost">
    	<div class="container">
        <div class="stoimost"><p>Стоимость обучения</p></div>
        <div class="contboard">
          <div class="boardcost">
            <p>От <span>300</span> рублей академический час</br>
              <span>4800</span> рублей - абонемент на месяц за <span>1</span> предмет</br>
              <span>2</span> раза в неделю, <span>8</span> занятий в месяц по <span>90</span> мин.</br></br>
              У нас действует система скидок:</br>
              Скидка на 2 предмет <span>10%</span></br>
              Скидка на 3 предмет <span>20%</span></p>
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
