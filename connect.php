<?php

$server = "localhost" ;
$username = "root" ;
$password =  "" ;
$database = "registration" ;


$conn = mysqli_connect($server , $username , $password , $database);

if(isset($_POST['submit'])){
    
    if(!empty($_POST['name']) && !empty($_POST['age'])){
        
        $name = $_POST['name'] ;
        $age = $_POST['age'] ;


        $run = mysqli_query($conn,"INSERT INTO user (name,age) values('$name' , '$age')");

        if($run){
            header("location:Registration.php");
        }
        else{
            header("location:Registration.html?message=Registration Failed");
            die();
        }
    }
    else {
        header("location:Registration.html?message=All Fields Required");
        }
}

?>