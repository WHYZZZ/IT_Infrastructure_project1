<?php	
        $name=$_POST['firstname'];
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
		
        $sql = "INSERT INTO recruitment (Name, Surname, E_mail, Address, Expected_Salary,
        Position, Phone, KeySkills, Education, EmploymentHistory,PersonalInterests)
       VALUES ('$name', '$surname', '$email', '$address','$SalaryE','$Position','$Phone','$KeySkills','$Education','$EmpHis','$Interests' )";
       $result=mysqli_query($db,$sql);
		

		if($result){
			header('location:index.php');
		}
		else{
			echo 'not inserted';
		}
?>