<?php      
    include('connection.php');  
    $username = $_POST['name'];  
    $password = $_POST['pwd'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from student where Email = '$username'  and Password = '$password'";  
        $sql1="select * from student where Rollno='$username' and Password='$password'";
        $result = mysqli_query($con, $sql); 
        $result1=mysqli_query($con,$sql1); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);  
        $count1 = mysqli_num_rows($result1);
          
        if($count == 1 || $count1==1){  
            include('dash.php'); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  