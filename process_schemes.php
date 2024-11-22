<?php 
    $name=$_POST["sname"];
    $details=$_POST["stype"];
    $hospname=$_POST["shealthcenter"];
    $address=$_POST["address"];    
    $pincode=$_POST["pin"];

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

    $sql_query="insert into schemes (S_Name,S_Type,Hospital_Available,Address,Pincode) values('$name','$details','$hospname','$address','$pincode')";
    
    $result=$conn->query($sql_query);

    if($result){
        header("Location: ./intermediate.html");
    }
    else{
        echo 'failure';
        echo("Error description: " . $conn -> error);
    }

    $conn->close();
?>