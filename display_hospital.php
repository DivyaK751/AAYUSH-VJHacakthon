<?php
  $srno=$_GET["srno"];
  // echo $srno;
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
       body {

}
</style>
</head>
<body data-sidebar="light" data-keep-enlarged="false" class="vertical-collpsed ">
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

                    <div class="row mt-5 mb-5">
                        <div class="col-2 " style="float:right; padding:0px;" >
                            <img src="https://cdn-icons-png.flaticon.com/512/33/33777.png"
                                 height="130px" style=" margin-left:80px;">
                        </div>
                        <div class="col-10" style="paddinG:0px;">
                            <div class="" id="hosptitle"style="font-family: 'Merriweather', serif; font-size: 40px;"> 
                                HOSPITAL NAME
                            </div>
                            <div class="" id="hospaddr"style="font-family: 'PT Serif', serif; font-size: 28px;"> 
                                ADDRESS
                            </div>
                        </div>
                       
                    </div>
                    <div class="row my-5 pt-3 ">
                        <div class="col-8 px-5  mr-3" style="margin-bottom:140px;">
                            <table class="table" >
                                <tbody>
                                  <tr>
                                    <th scope="row">Type:</th>
                                    <td id="hosptype">Jacob</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Locality:</th>
                                    <td id="hosplocl">Jacob</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Number:</th>
                                    <td id="hospcontact">Jacob</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Taluk:</th>
                                    <td id="hosptaluk">Jacob</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <div class="col-4">
                            <a id="llink"href="https://www.google.com/maps/search/?api=1&query=" style="float:center;">
                                <img style="margin-left:50px;" height="300px"  width="300px" class="rounded-circle " src="https://media.istockphoto.com/photos/glossy-red-pin-icon-with-plus-or-cross-sign-picture-id174915422?b=1&k=20&m=174915422&s=170667a&w=0&h=rY2ChKMKeveuXBe-q6WnR4cD5RiC6N83PQgdi5u3Wl4=">
                            </a>
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
 


<script>
  // async function getData() {
  // const response = await fetch("");
  //   console.log(response.json());
  // return response.json();

  fetch('https://api.data.gov.in/resource/0dfebd78-bac4-44be-9291-025a983323f4?api-key=579b464db66ec23bdd00000188796cc0e4534c876707dfda18d61829&format=json&offset=0&limit=50&filters[srno]=<?php echo $srno ?>')
    .then(res => res.json())
    .then((out) => {

        var dd=out.records;
        console.log(dd[0]);
        document.getElementById("hosptitle").innerHTML=dd[0].health_facility_name;
        document.getElementById("hospaddr").innerHTML=dd[0].street+" "+dd[0].landmark+" "+dd[0].locality+" "+dd[0].district_name+" "+dd[0].pincode;
        
        document.getElementById("hosptype").innerHTML=dd[0].facility_type;
        document.getElementById("hosplocl").innerHTML=dd[0].locality;
        
        document.getElementById("hospcontact").innerHTML=dd[0].landline_number;
        document.getElementById("hosptaluk").innerHTML=dd[0].taluka_name;
        document.getElementById("llink").href="https://www.google.com/maps/search/?api=1&query="+encodeURI(dd[0].health_facility_name); 
      }).catch(err => console.error(err));



</script>

</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="index.js"></script>