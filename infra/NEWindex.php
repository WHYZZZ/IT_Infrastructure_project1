<?php

    include('server.php');
   
?>
<html>
  <head>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  </head>

  <body>
    <header>
      <div class="top-link">
        <nav>
          <button name="logout_user" >
            Logout
          </button>


  
    </header>
    <div class="ls-header">
      <div class="ls-header-top">
        <div class="toplogo"><h1>IT Infrastructure</h1></div>
      </div>
      <div class="ls-header-bottom">
        <div class="topnav">
          <ul>
           <!-- <li><a href="private_office.html" onmouseover="showSubMenu('Private Office')">Private Office</a></li>-->
            <li><a href="current_vacancies.php" onmouseover="showSubMenu('Vacancies')">Vacancies</a></li>
            <li><a href="news.php" onmouseover="showSubMenu('Vacancies')">News</a></li>
          </ul>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">

        <div class="col-4 col-s-4">
          <a href="#">
            <img
              src="http://izhagon.ru/wp-content/uploads/2019/07/e6455878ac0a5de8bd8e710666b5d76c.jpg"
              height="250"
              width="270"
            />
          </a>
          <p><b>About Us</b></p>
          <p>The UTTC group of companies has been promoting innovative IT solutions and supplying high-quality equipment to the markets of the CIS.</p>
        </div>

        <div class="col-4 col-s-4">
          <a href="#">
            <img
              src="data:image/jpeg;base64,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"
              height="250"
              width="270"
            />
          </a>
          <p><b>Our aims</b></p>
          <p>To provide our partners with a continuous technological chain for the implementation of telecommunication projects of any complexity.</p>
        </div>

        <div class="col-4 col-s-4">
          <a href="#">
            <img
              src="https://www.rhinegold.co.uk/wp-content/uploads/2015/10/Screen-Shot-2019-01-03-at-15.29.00.png"
              height="250"
              width="270"
            />
          </a>
          <p><b>Scheme of work</b></p>
          <p>The company's work is based on classic and project distribution. Classical distribution focuses on working with dealers and retailers.</p><br>
        </div>

        <div class="col-4 col-s-4">
          <a href="#">
            <img
              src="https://blog.vantagecircle.com/content/images/2019/07/leadership-skills.png"
              height="250"
              width="270"
            />
          </a>
          <p><b>Leadership</b></p>
          <p>CEO Lenzo Yoon<br>
            •Head of Business Sector<br>
            •Joined Big Hit Entertainment in 2010<br>
            •Former Head of Strategic Planning Office</p>
        </div>

        <div class="col-4 col-s-4">
          <a href="#">
            <img
              src="https://images.saba.com/uploads/blog/new-report-highlights-importance-of-continuous-performance-management/new-report-highlights-importance-of-continuous-performance-management.jpg?s=1696x900"
              height="250"
              width="270"
            />
          </a>
          <p><b>Performance</b></p>
          <p> 
            Big Hit Entertainment has achieved meteoric growth with KRW 214.2 billion in revenue and KRW 64.1 billion in operating profit in 2018, and continues to expand each year.</p><br>
        </div>

        <div class="col-4 col-s-4">
          <a href="#">
            <img
              src="http://res.heraldm.com/content/image/2019/07/02/20190702000490_0.jpg"
              height="250"
              width="270"
            />
          </a>
          <p><b>Recruit</b></p>
          <p>Based on the core values of “Passion, Autonomy and Trust”, Big Hit Entertainment aims to be a “company where you can find fun challenge and feel joy from doing the work you love”.</p>
        </div>

      </div>
    </div>

<div class="footer">
    <footer class="w3-container w3-center">
        <hr>
        <p>Find us on social media.</p>
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p>Powered by <a href="http://www.iitu.kz/" target="_blank">iitu</a></p>
      </footer>
    </div>
  </body>
</html>
