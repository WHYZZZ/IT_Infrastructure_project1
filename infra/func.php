<?php
        require("server.php");
        
    
         function getUsersData($id)
         {    $db = mysqli_connect('localhost', 'root', '', 'hrmsystem');
             $array=array();
             $res="SELECT * FROM employees WHERE emp_id='$id'";
             $result=mysqli_query($db,$res);
          while($row=mysqli_fetch_assoc($result)){
             
              $array['Emp_id']=$row['Emp_id'];
              $array['Name']=$row['Name'];
              $array['Surname']=$row['Surname'];
              $array['E_mail']=$row['E_mail'];
              $array['Address']=$row['Address'];
              $array['Salary']=$row['Salary'];
              $array['Position']=$row['Position'];
              $array['Violations']=$row['Violations'];
              $array['Phone']=$row['Phone'];
              $array['DateOfRec']=$row['DateOfRec'];
              $array['image_dir']=$row['image_dir'];
              $array['Skills']=$row['Skills'];
              $array['EmpHis']=$row['EmpHis'];
              $array['Education']=$row['Education'];
              $array['Interests']=$row['Interests'];
          }
          return $array;
         }
           
         
         function getREcruitmentsData($newEmp)
         {    $db = mysqli_connect('localhost', 'root', '', 'hrmsystem');
             $array=array();
             $res="Select Name,Surname,Expected_salary,Position,Phone,E_mail,Address,KeySkills,EmploymentHsitory,Education,PersonalInterests,doc_dir from recruitment WHERE ID='$newEmp'";
             $result=mysqli_query($db,$res);
          while($row=mysqli_fetch_assoc($result)){
             
              $array['Name']=$row['Name'];
              $array['Surname']=$row['Surname'];
              $array['Expected_salary']=$row['Expected_salary'];
              $array['Position']=$row['Position'];
              $array['Phone']=$row['Phone'];
              $array['E_mail']=$row['E_mail'];
              $array['Address']=$row['Address'];
              $array['KeySkills']=$row['KeySkills'];
              $array['EmploymentHsitory']=$row['EmploymentHsitory'];
              $array['Education']=$row['Education'];
              $array['PersonalInterests']=$row['PersonalInterests'];
              $array['doc_dir']=$row['doc_dir'];
          }
          return $array;
         }
           
        ?>