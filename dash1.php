<?php 
$aadhar=$_GET['a'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health</title>
</head>
<body class="bg-light">
    
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
          
          
    <div id="carouselExampleIndicators" class="carousel slide" style="background-color: gainsboro;" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

    <!--Slides-->
    <div class="carousel-inner" role="listbox" style="padding:3%;">

      <!--First slide-->
      <div class="carousel-item active">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWVkaWNhbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                   alt="Card image cap" height="300px">
            </div>
          </div>
          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://media.istockphoto.com/photos/mixed-race-mother-and-daughter-walk-and-talk-together-outside-picture-id1265315806?b=1&k=20&m=1265315806&s=170667a&w=0&h=QyDxfTCyZb5p1I57cjy8su-4zuiLDh7F-8UKApm6q74="
                   alt="Card image cap" height="300px">
            </div>
          </div>
          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://media.istockphoto.com/photos/medical-technology-background-picture-id1255646957?b=1&k=20&m=1255646957&s=170667a&w=0&h=0DXiK-OvNRevgEABMJyuu4_ED1aFmHVsFiQc1b-NdLg="
                   alt="Card image cap" height="300px">
            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://media.istockphoto.com/photos/healthcare-and-medicine-concept-heart-pulse-shaped-red-line-over-picture-id1305159612?b=1&k=20&m=1305159612&s=170667a&w=0&h=k4aaeLWVEcj0FoDi9ChiSl92Y4zoYP0F9rRK5q_5tIw="
                   alt="Card image cap" height="300px">
            </div>
          </div>
          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://media.istockphoto.com/photos/world-health-day-concept-world-health-day-message-and-red-stethoscope-picture-id1303752159?b=1&k=20&m=1303752159&s=170667a&w=0&h=uyXBENAbVccfMP_PuScWQHt7rKchmG_tJK2ij69DMhQ="
                   alt="Card image cap" height="300px">
            </div>
          </div>
          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://images.unsplash.com/photo-1621887348744-6b0444f8a058?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8d29ybGQlMjBoZWFsdGglMjBkYXl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                   alt="Card image cap" height="300px">
            </div>
          </div>
        </div>

      </div>
      <!--/.Second slide-->

      <!--Third slide-->
      <div class="carousel-item">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="https://media.istockphoto.com/photos/ayurvedic-copper-neti-pot-picture-id1221022583?b=1&k=20&m=1221022583&s=170667a&w=0&h=2LFepuvOQEUY-mvwB8jMV8c5kpr_KYt2YjPQVDBHsI4="
                   alt="Card image cap" height="300px">
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://images.unsplash.com/photo-1627728724901-e79f35800820?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGF5dXJ2ZWRhfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                   alt="Card image cap" height="300px">
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="https://media.istockphoto.com/photos/adaptogen-health-food-collection-for-stress-relief-picture-id1298149766?b=1&k=20&m=1298149766&s=170667a&w=0&h=nmjxFUAZAZG5DzE8XV_Y74W-CFs5RmdZWeqsZ67dgHc="
                   alt="Card image cap" height="300px">
            </div>
          </div>
        </div>

      </div>
      <!--/.Third slide-->
    </div>
    <!--/.Slides-->
  </div>
  <div style="background-color:orangered;padding-bottom: 2%;">
    <div style="display: flex;justify-content: center;padding-top:10px;">
        <img src="https://previews.123rf.com/images/oksananahorna/oksananahorna1710/oksananahorna171000378/88104891-heartbeat-or-heart-beat-pulse-flat-icon-medical-symbol-of-heart-health-vector-illustration.jpg" width="50px" height="50px" style="border-radius: 50%;">
        <h3 style="margin-top:10px;padding-left:5px;">Health Tips</h3>
    </div>
    <center><h6>Handwashing with soap and water is one of the most effective ways to prevent the spread of germs. Wash your hands often to stay healthy.   National Helpline Numbers</h6></center>
    <center><h6>Ministry of Health and Family Welfare- 1075  Child Helpline No-1098,Senior Citizens Helpline No -14567, For Psychological Support Helpline No- 08046110007</h6></center>
</div>
<div style="margin-bottom: 3%;margin-top:3%">
  <center><a class="btn btn-primary p-3" href="https://www.google.com/maps/search/nearest+hospital+within+1000meters+range/" type="button">Find NearBy Hospital</a></center>
</div>
<!-- <div style="margin: 3%;">
    <div style="display: flex;justify-content: space-evenly;">
        <a><img src="https://cdn2.iconfinder.com/data/icons/medical-12-1/512/xxx042-512.png" title="Government Hospitals" style="border-radius:50%;width:75px;height:75px"></a>
        <a><img src="https://media.istockphoto.com/photos/turmeric-root-and-powder-flat-lay-picture-id1295518633?b=1&k=20&m=1295518633&s=170667a&w=0&h=JUurU06vfFaQlXs1lNBohgh2YN9Tn15HkKocVT86-SI=" title="Ayurveda" style="border-radius:50%;width:75px;height:75px"></a>
        <a><img src="data:image/jpeg;base64,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" title="TeleMedicines" style="border-radius:50%;width:75px;height:75px"></a>
        <a><img src="data:image/jpeg;base64,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" style="border-radius:50%;width:75px;height:75px" title="Yoga"></a>
    </div>
</div> -->

  



          <footer class="bg-dark text-center text-white">
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
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="index.js"></script>   
</body>
</html>