<?php
    include('server.php');
    if(isset($_POST['insert'])){
        
        $phpFileUploadError=array(
            0=> 'There is no error',
            1=> 'THe uploaded file exceeds the upload_max_filesize 2M',
            2=> 'file exceeds Max_FILE_size in html form',
            3=> 'was only partially uploaded',
            4=> 'No file was uploaded',
            5=> ' Missing a temporary folder',
            6=> 'Failed to write file to disk',
            7=> 'A PHP extension stopped the file upload.',
        );
		$firstname=$_POST['firstname'];
		$surname=$_POST['lastname'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$SalaryE=$_POST['salary'];
		$Position=$_POST['Position'];
		$Phone=$_POST['contact'];
		$KeySkills=$_POST['KeySkills'];
		$Education=$_POST['Education'];
		$EmpHis=$_POST['subject'];
		$Interests=$_POST['PersonalInt'];
		
		
        
            if(isset($_FILES['userfile'])){
               //pre_r($_FILES);
            
                $ext_error=false;
                $extesions=array('png','jpg','jpeg');
                $file_ext=explode('.',$_FILES['userfile']['name']);
    
                $name=$file_ext[0];
    
                $file_ext=end($file_ext);
                pre_r($file_ext);
    
                if(!in_array($file_ext, $extesions)){
                    $ext_error=true;
                }
                // if error is not equal to 0
                if($_FILES['userfile']['error']){
                    echo $phpFileUploadError[$_FILES['userfile']['error']];
                }
                elseif($ext_error){
                    echo "Invalid file extension!";
                }
                else{
                    echo "Success!";
                }
    
                $img_dir='images/'.$_FILES['userfile']['name'];
                move_uploaded_file($_FILES['userfile']['tmp_name'],$img_dir);
    
                $sql = "INSERT INTO recruitment (Name, Surname, E_mail, Address, Expected_Salary,
		Position, Phone, KeySkills, Education, EmploymentHsitory,PersonalInterests,doc_dir)
	   VALUES ('$firstname', '$surname', '$email', '$address','$SalaryE','$Position','$Phone','$KeySkills','$Education','$EmpHis','$Interests','$img_dir' )";
	   $result=mysqli_query($db,$sql);
		if($result){
            
			header('location:index.php');
		}
		else{
			echo 'not inserted';
        }

        }   
        
    }
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    } 
?>
<!DOCTYPE html>
<html>
<head>
<style>
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
  opacity: 0.5;
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
</style>
</head>
<body>

<h2>Form to fill</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
    
<form action="" method="POST" enctype="multipart/form-data">

  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="country">Address</label>
    </div>
    <div class="col-75">
   <input type="text" id="address" name="address" placeholder="Your address.." required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Contact numbers</label>
    </div>
    <div class="col-75">
   <input type="text" id="cont" name="contact" placeholder="Your contact numbers.." required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Email Address</label>
    </div>
    <div class="col-75">
   <input type="text" id="mail" name="email" placeholder="Your email address.." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Position</label>
    </div>
    <div class="col-75">
   <input type="text" id="mail" name="Position" placeholder="Position that you want" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Key Skills</label>
    </div>
    <div class="col-75">
   <input type="text" id="address" name="KeySkills" placeholder="Your skills..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Education</label>
    </div>
    <div class="col-75">
   <input type="text" id="address" name="Education" placeholder="Your educations..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Employment History</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Your employment history.." style="height:200px"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Desired Salary</label>
    </div>
    <div class="col-75">
   <input type="text" id="slry" name="salary" placeholder="Desired salary.." required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Personal Interests</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="PersonalInt" placeholder="Your interests.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Upload Your image</label>
    </div>
    <div class="col-75">
          <input type="file" name="userfile" placeholder="Upload your image" />
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Upload" name='insert' >
  </div>
  </form>
</div>

</body>
</html>










