

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrmsystem";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}





?>






<!DOCTYPE html>
<html>
<title>News</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-text-teal,.w3-hover-text-teal:hover{color:#6AB6C6!important}
</style>
<body>
              <div class="ls-header">
                <div class="ls-header-top">
                  <div class="toplogo"><h1>IT Infrastructure</h1></div>
                </div>
                <div class="ls-header-bottom">
                  <div class="topnav">
                    <ul>
                     <!-- <li><a href="private_office.html" onmouseover="showSubMenu('Private Office')">Private Office</a></li>-->
                     <li><a href="index.php" onmouseover="showSubMenu('Vacancies')">Home</a></li>
                     <li><a href="current_vacancies.php" onmouseover="showSubMenu('Vacancies')">Vacancies</a></li>

                    </ul>
                  </div>
                </div>
              </div>

<div class="w3-container">
  <h2>Notices List</h2>
  <p>You can read news and ads about company in this area:</p>
  <ul class="w3-ul w3-card-4">
    <li class="w3-bar">
      <i class="w3-bar-item fa fa-bell fa-fw w3-margin w3-xlarge w3-text-teal" style="font-size:36px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
      <div class="w3-bar-item">
        <span class="w3-large"><p>
          <?php
            $sql_get = "SELECT topic FROM news where newsid = 1";
            $result = $conn->query($sql_get);
            	if ($result->num_rows > 0){
            		  while($row = $result->fetch_assoc()){
                    echo $row["topic"];
            		}
            	}
          ?></p></span>
        <span><p>
          <?php
          $sql_get = "SELECT comment FROM news where newsid = 1";
          $result = $conn->query($sql_get);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo $row["comment"];
              }
            }
        ?></p>

        <p>
          <?php
          $sql_get = "SELECT author FROM news where newsid = 1";
          $result = $conn->query($sql_get);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo "Author: ".$row["author"];
              }
            }
        ?>
        </p>
        </span>
      </div>
    </li>



    <li class="w3-bar">
      <i class="w3-bar-item fa fa-bell fa-fw w3-margin w3-xlarge w3-text-teal" style="font-size:36px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
      <div class="w3-bar-item">
        <span class="w3-large">
        <p>
          <?php
          $sql_get = "SELECT topic FROM news where newsid = 2";
          $result = $conn->query($sql_get);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo $row["topic"];
              }
            }
        ?>
        </p>
        </span>

        <p>
          <?php
          $sql_get = "SELECT comment FROM news where newsid = 2";
          $result = $conn->query($sql_get);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo $row["comment"];
              }
            }
        ?>
        </p>


        <p>
          <?php
          $sql_get = "SELECT author FROM news where newsid = 2";
          $result = $conn->query($sql_get);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo "Author: ".$row["author"];
              }
            }
        ?>
        </p></span>
              </div>
            </li>



        <li class="w3-bar">
          <i class="w3-bar-item fa fa-bell fa-fw w3-margin w3-xlarge w3-text-teal" style="font-size:36px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
          <div class="w3-bar-item">
            <span class="w3-large">
            <p>
              <?php
              $sql_get = "SELECT topic FROM news where newsid = 3";
              $result = $conn->query($sql_get);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      echo $row["topic"];
                  }
                }
            ?>
            </p>
            </span>

            <p>
              <?php
              $sql_get = "SELECT comment FROM news where newsid = 3";
              $result = $conn->query($sql_get);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      echo $row["comment"];
                  }
                }
            ?>
            </p>


            <p>
              <?php
              $sql_get = "SELECT author FROM news where newsid = 3";
              $result = $conn->query($sql_get);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      echo "Author: ".$row["author"];
                  }
                }
            ?>
            </p></span>
                  </div>
                </li>

  </ul>
</div>

</body>
</html>
