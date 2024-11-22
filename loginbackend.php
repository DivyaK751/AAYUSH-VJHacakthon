<?php 
    
    $aadhar=$_POST["aadhar"]; 
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

    $sql_query="SELECT password FROM users_tbl WHERE aadhar='$aadhar'";
    
    $result=$conn->query($sql_query);
    $row=mysqli_fetch_assoc($result);

    if($result){
        if($row['password']==$pass)
        {
            header("Location: ./dash1.php?a=$aadhar");
        }
        else
        {
            header("Location: ./index.html");
        }
    }
    else{
        echo 'failure';
        echo("Error description: " . $conn -> error);
    }

    $conn->close();
?>