<?php 
    $aadhaar=$_POST["aadhaar"];
    $date=$_POST["date"];
    $hname=$_POST["hname"];
    $tdetails=$_POST["tdetails"];    

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

    $sql_query="insert into medical_history (patient_aadhar,date,h_name,treatment_details) values('$aadhaar','$date','$hname','$tdetails')";
    
    $result=$conn->query($sql_query);

    if($result){
        header("Location: ./selectlogin.html");
    }
    else{
        echo 'failure';
        echo("Error description: " . $conn -> error);
    }

    $conn->close();
?>