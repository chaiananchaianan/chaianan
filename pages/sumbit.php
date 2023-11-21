<?php
    $email = $_POST['email'];
    $email = $_POST['password'];
    $email = $_POST['city']; 
    $email = $_POST['web'];
    $email = $_POST['role'];
    

    $severname = 'localhost:8080';
    $username = 'root';
    $password = '123456';
    $dbname = "db_employee";

    conn = new mysqli($severname, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("".$conn->connect_error);
    }

    $sql = "INSERT INTO employee (username, password, city, webserver, role)
            VALUES ($email,$password,$city,$web,$role)";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    
    }   else{
        echo"error".$sql"<br>".$conn->error;
    }
    $conn->close();
    ?>