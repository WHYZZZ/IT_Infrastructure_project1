<?php
  include('func.php');
  if(isset($_POST['AddNewEmp'])){
    $userData=getREcruitmentsData($_POST['IdofNewEmployee']);
        $name1=$userData['Name'];
        $surname1=$userData['Surname'];
        $email=$userData['E_mail'];
        $address=$userData['Address'];
        $sal= $userData['Expected_salary'];
        $pos= $userData['Position'];
        $phone= $userData['Phone'];
        $Key=$userData['KeySkills'];
        $Employment=$userData['EmploymentHsitory'];
        $Educ=$userData['Education'];
        $Personal=$userData['PersonalInterests'];
        $doc=$userData['doc_dir'];
    $query = "INSERT INTO employees(Name,Surname,E_mail,Address,Salary,Position,Phone,password,Skills,Interests,Education,EmpHis,image_dir) VALUES('$name1','$surname1','$email','$address','$sal','$pos','$phone','123','$Key','$Personal','$Educ','$Employment','$doc')" or die(mysqli_error());
    $a=mysqli_query($db,$query);
    if ($db->query($query) === TRUE) {
      
  } else {
      echo "Error: " . $query . "<br>" . $db->error;
  }
}
?>
<html>
<title>Add User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-text-teal,.w3-hover-text-teal:hover{color:#6AB6C6!important}
.topnav {
  overflow: hidden;
  background-color: #6AB6C6;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-right: 1px solid white;
}

.topnav a:hover {
  opacity: 0.5;
}


.topnav .search-container {
  float: right;
  background-color: #6AB6C6;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: 1px solid white;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #6AB6C6;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border: 1px solid white;
  color: white;
}

.topnav .search-container button:hover {
  opacity: 0.5;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #6AB6C6;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #6AB6C6;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  
}

th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
</style>
</style>
<body>
    <div class="topnav">
            <a href="private_admin.php">Back</a>
            <a href="delete_user.php">Delete User</a>
            <a href="violations.php">Violations</a>
          </div>
<div class="w3-container">
    <h2>ADD NEW EMPLOYEE</h2>
    <p>Add employees</p>
    <div class="container">
            <form action="" method="POST">
              <div class="row">
                    <div class="col-25">
                      <label for="lname">Choose id of employee in order to add</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="lname" name="IdofNewEmployee" placeholder="ID..">
                    </div>
                  </div>
              <div class="row" style="padding: 10px 0 0 0">
                <input type="submit" value="Add" name="AddNewEmp">
              </div>
            </form>
          </div>
        </div>
        <div style="overflow-x:auto;">
        <table align="center" border="solid 1" style="width:500px; line-height:50px;">
          <tr>
            <th colspan="100"><h2> New Employee records</h2></th>
          </tr>

          <t>
              <th>ID</th>
              <th>Name</th> 
              <th>Surname</th>
              <th>Expected_Salary</th>
              <th>Position</th>
              <th>Phone</th>
              <th>KeySkills</th>
              <th>Education</th>
              <th>Employment History</th>
              <th>Personal Interests</th>
              <th>CVs</th>
          </t>
         <?php
          $db = mysqli_connect('localhost', 'root', '', 'hrmsystem');
          $res="Select ID,Name,Surname,Expected_salary,Position,Phone,KeySkills,Education,EmploymentHsitory,PersonalInterests,doc_dir from recruitment";
          $result=mysqli_query($db,$res);
          while($row=mysqli_fetch_assoc($result)){

          ?>
          <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Surname']; ?></td>
                <td><?php echo $row['Expected_salary']; ?></td>
                <td><?php echo $row['Position']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                <td><?php echo $row['KeySkills']; ?></td>
                <td><?php echo $row['Education']; ?></td>
                <td><?php echo $row['EmploymentHsitory']; ?></td>
                <td><?php echo $row['PersonalInterests']; ?></td>
                <td><?php echo $row['doc_dir']; ?></td>
        
        </tr>
       <?php 
          }
        ?>
      </table>
</div>
      
</body>
</html>
