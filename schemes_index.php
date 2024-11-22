<?php
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

    $sql_query="select * from schemes";
    
    $result=$conn->query($sql_query);

    
    
    $conn->close();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <title>Medical Schemes</title>
  </head>
  <body style="background-color: LightYellow;">
        <!-- navbar part -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
            <a class="navbar-brand px-3" href="#">Health</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="display:flex;justify-content: space-between;">
              <div>
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="dash.php">Home <span class="sr-only"></span></a>
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

          <div class="row mt-5">
              <div style="text-align:center"><h2>Health Schemes Currently Available</h2></div>
          </div>
      <!-- datatable part -->
      <div class="row mt-4">
        <div class="col-1"></div>
        <div class="col-10 p-4" style="margin-bottom:140px;background-color:white; border:2px grey solid;">
            <table id="myTable" class="table ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Scheme Name</th>
                  <th>Scheme Details</th>
                  <th>Available At</th>
                </tr>
              </thead>

              <tbody>
                
                  <?php
                  while($row=mysqli_fetch_assoc($result)){
                  ?>
                  <tr>
                  <td><?php echo $row["ID"]?></td>
                  <td><?php echo $row["S_Name"]?></td>
                  <td><?php echo $row["S_Type"]?></td>
                  <td><?php echo $row["Hospital_Available"]."<br>".$row["Pincode"]?></td>
                  </tr>
                  <?php } ?>
                
              </tbody>

            </table>
        </div>
        <div class="col-1"></div>
        
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


</html>
