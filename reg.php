<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "student_db");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $pwd =  $_REQUEST['password'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
          $rollno=$_REQUEST['rollno'];
          $branch=$_REQUEST['branch'];
          $yog=$_REQUEST['yog'];
          $ccu=$_REQUEST['ccu'];
          $cfu=$_REQUEST['cfu'];
          $hru=$_REQUEST['hru'];
          $heu=$_REQUEST['heu'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO student  VALUES ('$name', '$email','$pwd','$rollno','$branch','$yog','$ccu','$cfu','$hru','$heu')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $email\n "
                . "$pwd\n $rollno\n $branch\n $yog\n $ccu \n $cfu\n $hru\n $heu\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>