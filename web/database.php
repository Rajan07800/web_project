<?php

        $conn = mysqli_connect("localhost", "root", "", "database");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         

        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $projectTitle =  $_REQUEST['projectTitle'];
        $offerSalary = $_REQUEST['offerSalary'];
        $date = $_REQUEST['date'];
        $phone = $_REQUEST['phone'];
        $description = $_REQUEST['description'];

         
        $sql = "INSERT INTO form VALUES ('$name', '$email', '$projectTitle', '$offerSalary', '$date', '$phone', '$description')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
            echo nl2br("\n$name\n $date\n "
                . "$projectTitle\n $offerSalary\n $email\n $description");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        mysqli_close($conn);
        ?>