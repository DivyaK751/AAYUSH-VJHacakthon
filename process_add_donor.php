<?php
    $srno=$_POST["srno"];
    $donorname=$_POST["dname"];
    $donorage=$_POST["dage"];
    $bloodgrp=$_POST["bloodgrp"];
    $phone=$_POST["phone"];

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

    $sql_query="insert into donors_tbl (srno,name,age,blood_group,phone) values('$srno','$donorname','$donorage','$bloodgrp','$phone')";
    
    $result=$conn->query($sql_query);

    if($result){
        header("Location: ./bloodbank_donor_register.html");
    }
    else{
        echo 'failure';
        echo("Error description: " . $conn -> error);
    }

    $conn->close();    
?>