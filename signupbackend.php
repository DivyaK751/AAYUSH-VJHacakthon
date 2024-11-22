<?php 
    $user=$_POST["username"];
    $emailid=$_POST["emailid"];
    $aadhar=$_POST["aadhar"];
    $phone=$_POST["phone"];    
    $pass=$_POST["password"];

    $servername="eu-cdbr-west-01.cleardb.com";
    $username="b7dffff1965848";
    $password="8dbc133f";
    $dbname="heroku_e2bd9c4063348fb";
  
    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed");
        echo"connection failed";
        return;
    } 

    $sql_query="insert into users_tbl (name,aadhar,phone,emailid,password) values('$user','$aadhar','$phone','$emailid','$pass')";
    
    $result=$conn->query($sql_query);

    if($result){
        header("Location: ./index.html");
    }
    else{
        echo 'failure';
        echo("Error description: " . $conn -> error);
    }

    $conn->close();
?>