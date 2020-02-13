<?php

    include('server.php');
     if (isset($_POST['Admin'])) {
        $id =$_POST['id'];
        $password = $_POST['psw'];
    if($id == '1111' && $password == 'admin'){
        $_SESSION['id'] = $id;
        $_SESSION['success'] = "You are now logged in";
                header('location: private_admin.php');
            }else {
                echo 'Error!';
            }

        }
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
          <button
            onclick="document.getElementById('id01').style.display='block'"
            style="width:auto;"
          >
            Login
          </button>

          <div id="id01" class="modal">
            <span
              onclick="document.getElementById('id01').style.display='none'"
              class="close"
              title="Close Modal"
              >&times;</span
            >
            <form class="modal-content animate" action="" method="POST"> 
           
              <div class="logcontainer">
                <label for="uname" ><b>ID</b></label>
                <input type="text"placeholder="Enter ID" name="id" required />

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required  />
                
                <button type="submit" name="login_user">Employee</button>
                <button type="submit" name="Admin">Admin</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember" />
                  Remember me
                </label>
              </div>

              <div class="cancelcontainer" style="background-color:#f1f1f1">
                <button
                  type="button"
                  onclick="document.getElementById('id01').style.display='none'"
                  class="cancelbtn"
                >
                  Cancel
                </button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
          </div>

          <script>
            var modal = document.getElementById("id01");

            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            };
          </script>
  
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

        <div class="">
          <a href="#">
            <img
              src="http://izhagon.ru/wp-content/uploads/2019/07/e6455878ac0a5de8bd8e710666b5d76c.jpg"
              height="50%"
              width="50%"
            />
          </a>
          <p><b>About Us</b></p>
          <p>The UTTC group of companies has been promoting innovative IT solutions and supplying high-quality equipment to the markets of the CIS.
          The company's work is based on classic and project distribution. Classical distribution focuses on working with dealers and retailers.
          To provide our partners with a continuous technological chain for the implementation of telecommunication projects of any complexity.<br>
          CEO Lenzo Yoon<br>
        •Head of Business Sector<br>
        •Joined Big Hit Entertainment in 2010<br>
        •Former Head of Strategic Planning Office.</p>
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
