<?php
  include('func.php');
  if(!$_SESSION['id']){
header('location:index.php');
  }
  else{
    $db = mysqli_connect('localhost', 'root', '', 'hrmsystem');
    $curID=$_SESSION['id'];
        $query = "Insert INTO attend(id,attend) VALUES('$curID','1')";
        $results = mysqli_query($db, $query);
       
  }
?>
<!DOCTYPE html>
<html>
<title>My Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

.w3-text-teal,.w3-hover-text-teal:hover{color:#6AB6C6!important}
.w3-teal,.w3-hover-teal:hover{color:#fff!important;background-color:#6AB6C6!important}
/*w3school*/
button {
  background: #6AB6C6;
  font-size: 20px;
  border: 1px solid white;
  cursor: pointer;
  color:#fff;
  width: 100%;
  height: auto;
  padding: 10px;
  margin: 0 0 10px 0;
}
button:hover {
  opacity: 0.5;
}

</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
      <?php 
            if(isset($_SESSION['id']))
              {
                $userData=getUsersData($_SESSION['id']);
                ?>
                <div class="w3-display-container">
              <?php   echo "<img src='{$userData['image_dir']}' width='100%' height='100%' vertical-align='middle'>";  ?>
                  <div class="w3-display-bottomleft w3-container w3-text-black">
                    <h2> <?php echo $userData['Name']; ?>  <?php echo $userData['Surname']; ?></h2>
                  </div>
                </div>
                <div class="w3-container">
                  
                  <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $userData['Position']; ?> </p>
                  <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $userData['Address']; ?></p>
                  <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $userData['E_mail']; ?></p>
                  <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $userData['Phone']; ?></p>
                  <p><i class="fa fa-money fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $userData['Salary']; ?> KZT</p>
                  <hr>

                  <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                  <p><?php echo $userData['Skills']; ?></p>
                
                  <br>

                  <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Personal Interests</b></p>
                  <p><?php echo $userData['Interests']; ?></p>
                  
                  <form action="NEWindex.php" method="POST">
                        <a href="NEWindex.php"><button type="submit" >home page</button></a>
                        <button type="submit" name="logout_user">Logout</button>
                    </form>
                </div>
              <?php
            }
          ?>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16">
        <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><?php echo $userData['EmpHis']; ?></h5>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><?php echo $userData['Education']; ?></h5>
          <hr>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="http://www.iitu.kz/" target="_blank">iitu</a></p>
</footer>

</body>
</html>
