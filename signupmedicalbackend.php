<?php 
    
    $dname=$_POST["username"]; 
    $duid=$_POST["uid"];
    $demailid=$_POST["emailid"];
    $daddress=$_POST["address"];
    $dphone=$_POST["phone"];
    $dpassword=$_POST["password"];


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

    $sql_query="insert into department_tbl (department_uid,department_name,phone,email,password,address) values('$duid','$dname','$dphone','$demailid','$dpassword','$daddress')";
    
    $result=$conn->query($sql_query);
    // $row=mysqli_fetch_assoc($result);

    if($result){
        
            header("Location: ./medical.html");
    }
    else{
        echo 'failure';
        echo("Error description: " . $conn -> error);
    }

    $conn->close();
?>