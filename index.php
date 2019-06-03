<?php include "assets/python/form.php"; ?>

<!DOCTYPE html>
<html>
  <?php include "include/head.php"; ?>
  <body>
    <?php include "include/header.php"; ?>
    <?php include "include/menu.php"; ?>

    <section id="blackboard">
    	<div class="container">
    		<img src="/assets/images/formula1.png" class="formula1">
        <div class="alltextblackboard">
    		  <img src="/assets/images/formula2.png" class="formula2">
    		  <div class = "about1">
    		    <p>Готовься к <span>егэ</span><br>с преподавателями вузов</p>
    	    </div>
          <div class="lineblackboard"></div>
    	    <div class = "about2">
    		    <p>В нашем центре мы создаём инновационно-практическую базу<br>
              для подготовки школьников к поступлению в лучшие университеты<br>
              страны. Педагоги центра Пифагор преподают в ведущих ВУЗах Самары,<br>
              наши преподаватели знают всю структуру ЕГЭ от этапа проведения<br>
              до этапа проверки и апелляции</p>
    	    </div>
        </div>

        <div class="info">
    	    <div class="infobox">
    	      <div class="tittleinfo">
              <p>Запишись на <span>бесплатное</span> тестирование</p>
            </div>
            <form method="POST">
    		      <input type="text" class="nameinfobox" placeholder="Введи имя" name="name">
    	        <input type="text" class="phoneinfobox" placeholder="Введи телефон" name="phone">
              <input type="submit" class="zapicinfobox" placeholder="Записаться на бесплатное тестирование" name="submit">
              <!-- <a href="#" class="zapicinfobox">Записаться на бесплатное тестирование</a> -->
            </form>
    		  </div>
        </div>
      </div>
      <div class="images">
    	  <img src="/assets/images/teloedet.png" class="teloedet">
    	  <img src="/assets/images/energy.png" class="energy">
    	</div>
    </section>

    <section id="courses">
	    <div class="container">
		    <!-- <img src="/assets/images/mayatnik.png" class="mayatnik"> -->
		    <div class="tittlesubjects">
          <p>направления подготовки</p>
        </div>
        <div class="lin"></div>
        <img src="/assets/images/magnit.png" class="magnit">
        <img src="/assets/images/mayatnik.png" class="mayatnik">

        <ul class="tittleob">
          <div class="tittlesub1">
  	        <li>Математика</li>
  	        <li>Физика</li>
  	        <li>Обществознание</li>
          </div>

          <div class="tittlesub2">
          	<li>История</li>
          	<li>Биология</li>
          	<li>Химия</li>
          </div>

          <div class="tittlesub3">
          	<li>Английский язык</li>
          	<li>Русский язык</li>
          	<li>Литература</li>
          </div>
        </ul>

        <img src="assets/images/sila.png" class="sila">
        <img src="assets/images/cars.png" class="cars">
      </div>
    </section>

    <footer id="footer">
	    <!-- <img src="/assets/images/period.png" class="period"> -->
	    <!-- <img src="/assets/images/pi.png" class="pi"> -->
		  <!-- <img src="/assets/images/atom.png" class="atom"> -->
	    <div class="container">
        <div class="tittleadvant">
  	      <p>Преимущества подготовки в центре <span>пифагор</span></p>
        </div>
        <div class="line"></div>

	      <div class="advantages">
  	      <div class="item">
  		      <div class="boxsmall"><h2>1</h2></div>
  		      <h3>Опытные преподаватели</h3>
  		      <div class="liniya"></div>
  		      <p>Наши педагоги преподают в
              сильнейших ВУЗах Самары,
              многие имеют учёную степень
              и преподают по собственным
              авторским методикам.</p>
  	      </div>
  	      <div class="item">
  		      <div class="boxsmall">
  			      <h2>2</h2>
  		      </div>
  		      <h3>Индвидуальный подход к обучению</h3>
  		      <div class="liniya"></div>
  	        <p>Учебная программа
              подбирается специально под
              каждого ученика, занятия
              проходят индвидуально или в
              небольших группах с
              ежемесячной отчётностью.</p>
  	      </div>
  	      <div class="item">
  		      <div class="boxsmall"><h2>3</h2></div>
  		      <h3>Удобство</h3>
  		      <div class="liniya"></div>
  		      <p>Ученик получает подготовку
              по всем предметам в одном
              месте. Вам не нужно тратить
              время на поиск отдельных
              преподавателей и ездить к
              репетиторам на курсы в
              разные районы города Самары.</p>
  	      </div>
	      </div>

	      <img src="/assets/video/yv.png" class="video">
        </div>
    </footer>

  </body>
</html>
