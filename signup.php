<?php  
    
    include('db_conn.php');  
    $email = $_POST['email'];
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection    
        $password = stripcslashes($password);
        $email = stripcslashes($email);
      
        $sql = "INSERT INTO users (email, password)
          VALUES ('$email', '$password')";

          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

            header("Location: homepage.php");
            exit();  
?>