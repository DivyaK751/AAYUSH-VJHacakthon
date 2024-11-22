<!DOCTYPE html>
<html lang="en"></html>
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
    
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-white bg-soft" >
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome</h5>
                                        <p>Submit the Scheme details</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="https://media.istockphoto.com/photos/caduceus-picture-id503112555?k=20&m=503112555&s=612x612&w=0&h=ho95vykhJSGpWo5dWDa3VdVlK3kY2bune02-d2Zus0Q=" alt=""class="img-fluid" atyle="height:100px">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div class="">
                                <form class="form-horizontal" action="./process_schemes.php" method="POST">
    
                                    <div class="mb-3">
                                        <label for="sname" class="form-label">Scheme Name</label>
                                        <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter Scheme Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="stype" class="form-label">Scheme Details</label>
                                        <input type="text" class="form-control" id="stype" name="stype" placeholder="Enter the Scheme Details">
                                    </div>
                                    <div class="mb-3">
                                        <label for="shealthcenter" class="form-label">Health Center Name</label>
                                        <input type="text" class="form-control" id="shealthcenter" name="shealthcenter" placeholder="Enter Health Center Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address Details">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pin" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Pincode">
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="index.js"></script>   
</body>
</html>
