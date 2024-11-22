<?php
    $id=$_GET["sr_no"];
    // echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="bloodbank.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registrations</title>
</head>
<body>
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



    <div class="row">
        <div class="col-3"></div>
        <div class="col-5">
            <form action="./process_add_donor.php" method="POST">
                <input type="hidden" name="srno" value="<?php echo $id ?>"> 
                <div class="card mt-4">
                  <h5 class="card-title ms-3 mt-2">Donor Registration Form</h5>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" id="dname" class="form-control" placeholder="Name" name="dname">
                          <label for="dname">Name:</label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" id="age" class="form-control" placeholder="Age" name="dage">
                          <label for="age">Age:</label>
                          
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="bloodgrp" placeholder="Blood Group" name="bloodgrp">
                          <label for="bloodgrp">Blood Group:</label>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="form-floating">
                          <input type="text" id="phone" class="form-control" placeholder="phone" name="phone">
                          <label for="phone">Phone:</label>
                        </div>
                      </li>
                  </ul>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-5"></div>
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
</html>
