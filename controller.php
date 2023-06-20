<?php

    $conn = mysqli_connect("localhost", "root", "", "db_login");

    function register($data){
        global $conn;
    
        $username =strtolower(stripslashes($data['username']));
        $password =$data['password'];
        $conf_password =$data['conf_password'];
    
        if( $password !== $conf_password){
            echo"
            <script>
            alert('password tidak sesuai');
            </script>
    
            ";
            return false;
        }
    
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO users VALUES
    
        ('','$username','$password')
        ";
        mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
        
    }
?>