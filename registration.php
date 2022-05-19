<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $age = $_POST['age'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "login.php";
            </script>';
    }
    else if($role==1){
        if($age<18){
            echo '<script>
                    alert("Age must be atleast 18 years.");
                    window.location = "login.php";
                </script>';
        }
    }
    else{
        if($role==2){
            $age = 18;
        }
        move_uploaded_file($tmp_name,"images/$image");
        $insert = mysqli_query($conn, "insert into user (name, mobile, age, photo, password, status, votes, role) values('$name', '$mobile', '$age', '$image', '$pass', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "login.php";
                </script>';
        }
    }
    
?>