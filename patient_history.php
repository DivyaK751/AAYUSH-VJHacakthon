<?php 
$aadhaar=$_GET['a'];

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

    $sql_query="SELECT * FROM `medical_history`";
    $result=$conn->query($sql_query);

    $sql_query1="SELECT * FROM `users_tbl`";
    $result1=$conn->query($sql_query1);
    
    $conn->close();
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health</title>
    <style>
      
</style>
</head>
<body data-sidebar="light" data-keep-enlarged="false" class="vertical-collpsed " style="background-color: LightYellow;">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
            <a class="navbar-brand px-3" href="#">Health</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="display:flex;justify-content: space-between;">
              <div>
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="dash.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="hospital.html">Hospitals</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="bloodbank.html">Blood Bank</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="wellness.html">Wellness Centers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="schemes_index.php">Schemes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ayurveda.html">Ayurveda</a>
                </li> 
              </ul>
            </div>
            <div style="display:flex;justify-content:space between;">
            <div class="bg-light" style="margin-right:10px">
              <!-- <li class="nav-item"> -->
                  <a class="nav-link" href="patient_history.php?a=<?php echo $aadhar?>">View History</a>
              <!-- </li> -->
            </div>
              <div class="bg-light">
                <!-- <li class="nav-item"> -->
                    <a class="nav-link" href="index.html">Log Out</a>
                <!-- </li> -->
              </div>
          </div>
            </div>
          </nav>
        <div class="container-fluid" style="background-color: LightYellow;">                     
            <div class="row">
                <div class="col-12" style="padding:0px;">

                    <div class="row m-5">
                        <div class="col-2 " style="float:right; padding:0px;" >
                            <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png"
                                 height="130px" class="rounded-circle" style=" margin-left:80px;">
                        </div>
                        <div class="col-10" style="paddinG:0px;">
                            <div class="" style="font-family: 'Merriweather', serif; font-size: 30px;"> 
                                <?php
                                while($row=mysqli_fetch_assoc($result1)){ 
                                  if($row['aadhar']==$aadhaar)
                                  {
                                    echo $row['name'];
                                ?>
                            </div>
                            <div class="" style="font-family: 'PT Serif', serif; font-size: 20px;"> 
                                <?php
                                echo $row['phone'];
                                  }}
                                ?> 
                            </div>
                        </div>
                       
                    </div>
                   
                    <div class="row mt-5">
                        <div class="col-1">
                          </div>
                        <div class="col-10 p-4 mb-4" id="tbl-col" style="margin-bottom:140px;background-color:white; border:2px grey solid;">
                          <table class="table" id="myTable" >
                            <thead>
                              <tr>
                                <th width="10%" scope="col">Sl No.</th>
                                <th width="15%" scope="col">Date</th>
                                <th width="35%" scope="col">Hospital</th>
                                <th width="15%" scope="col">Treatment Details</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $p=1;
                            while($row=mysqli_fetch_assoc($result)){ 
                                if($row['patient_aadhar']==$aadhaar)
                                {
                                ?>
                                <tr>
                                <td><?php echo $p?></td>
                                <td><?php echo $row['date']?></td>
                                <td><?php echo $row['h_name']?></td>
                                <td><?php echo $row['treatment_details']?></td>
                                </tr>
                              <?php
                              $p=$p+1;
                              }}
                              ?>
                            </tbody>
                          </table>
                        </div>
                        <div class="col-1">
                          </div>
                      </div>

                    <footer class="bg-dark text-center text-white fixed-bottom">
                        <!-- Grid container -->
                        <div class="container p-2 pb-0">
                          <!-- Section: Social media -->
                          <section class="mb-2">
                            <!-- Github -->
                            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Karthikkadivela/" role="button"
                              ><i class="fab fa-github"></i
                            ></a>
                            <!-- Linkedin -->
                            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/karthik-k-n-57a3151b5/" role="button"
                              ><i class="fab fa-linkedin-in"></i
                            ></a>
                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/karthikkn_2508/" role="button"
                              ><i class="fab fa-instagram"></i
                            ></a>
                            <!-- Google -->
                            <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com" role="button"
                              ><i class="fab fa-google"></i
                            ></a>
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                              ><i class="fab fa-facebook-f"></i
                            ></a>
                      
                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                              ><i class="fab fa-twitter"></i
                            ></a>
                          </section>
                          <!-- Section: Social media -->
                        </div>
                        <!-- Grid container -->
                      
                        <!-- Copyright -->
                        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                          © 2021 Copyright:
                          <a class="text-white" href="#">HealthCare.com</a>
                        </div>
                        <!-- Copyright -->
                      </footer>

                </div>
            </div>            
        </div>  <!-- end container-fluid-->
 

</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="index.js"></script>