<html>
    <head>
        <title>Architecture</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style> 
         @import url("http://fonts.googleapis.com/css?family=Oswald:400,300,700");

         body{
        font-family: 'Oswald', sans-serif !important;
       }
            .carousel img {
             object-fit: cover;
            }
            .background{
            background-color: black;
            
          }
          .fa {
          padding: 20px;
          font-size: 40px;
          width: 50px;
          text-align: center;
          text-decoration: none;
          }

        </style>
    </head>
    <body class="bg-dark">
        <!--Fillimi i navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">ARCHITECTURE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="home.html" active>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="projects.html">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="service.php">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About us</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                  </li> 
                </ul>
              </div>
              <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-primary "  href="login.html" >Log-in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary" href="signup.html">Sign-up</a>
                  </li>
              </div>
            </div>
          </nav>
        <!--Mbarimi i navbar-->

        <!-- Fillimi i carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/carousel11.jpg" class="d-block w-100" alt="..." height="500px">
              </div>
              <div class="carousel-item">
                <img src="../images/carousel2.jpg" class="d-block w-100" alt="..." height="500px">
              </div>
              <div class="carousel-item">
                <img src="../images/carousel3.jpg" class="d-block w-100" alt="..." height="500px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- Mbarimi i carousel --> 


          <!--Fillimi i formes-->
           <h1 class="text-center mt-5 text-light">Keep in touch with us</h1>

          <div class="container mt-5">
            <div class="row ">
                <div class="col-md-6 bg-secondary mb-5">
                    <form class="row g-3 needs-validation mt-2 was-validated "  novalidate action="contact.php" method="POST" >

                        <div class="col-md-12 position-relative">
                            <label for="validationTooltip03" class="form-label">ID Number</label>
                            <input type="text" class="form-control" id="validationTooltip03" placeholder="Type your ID number..."  inputmode="numeric" required>
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                            <div class="invalid-tooltip">
                              Please provide a valid ID number.
                            </div>
                          </div>

                        <div class="col-md-12 position-relative  mt-5">
                          <label for="validationTooltip01" class="form-label">First name</label>
                          <input type="text" class="form-control" id="validationTooltip01" name="validationTooltip01"placeholder="Type your FirstName..." required>
                          <div class="valid-tooltip">
                            Looks good!
                          </div>
                          <div class="invalid-tooltip">
                            Please provide a valid last name.
                          </div>
                        </div>
                        
                        <div class="col-md-12 position-relative mt-5">
                          <label for="validationTooltip02" class="form-label ">Last name</label>
                          <input type="text" class="form-control" id="validationTooltip02" name="validationTooltip02" placeholder="Type your LastName..." required>
                          <div class="valid-tooltip">
                            Looks good!
                          </div>
                          <div class="invalid-tooltip">
                            Please provide a valid last name.
                          </div>
                        </div>

                        <div class="mb-3 mt-5">
                            <label for="validationTextarea" class="form-label ">Description</label>
                            <textarea class="form-control is-invalid" id="validationTextarea"name="validationTooltip03" placeholder="Type something..." required></textarea>
                            <div class="invalid-feedback">
                              Please enter a message in the textarea.
                            </div>
                          </div>
                        <div class="col-12">
                          <button class="btn btn-outline-dark" type="submit">Submit form</button>
                        </div>
                      </form>
                    </div>


                <div class="col-md-6 mb-5">
                    <div class="map"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23469.78861616235!2d21.168128!3d42.667212799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1688580540571!5m2!1sen!2s" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>

     </div>
          <!--Mbarimi i formes-->


            <!--Fillimi i lidhjes me databazen -->
          <?php

                $servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $dbname = "architecture"; 


                $conn = new mysqli($servername, $username, $password, $dbname);


                if ($conn->connect_error) {
                    die("Lidhja dështoi: " . $conn->connect_error);
                }


                $firstname = $_POST['validationTooltip01'];
                $lastname = $_POST['validationTooltip02'];
                $description = $_POST['validationTooltip03'];

                if (!empty($firstname) && !empty($lastname) && !empty($description)) {
                $sql = "INSERT INTO kontakti (firstname, lastname, description) VALUES ('$firstname', '$lastname', '$description')";

                if ($conn->query($sql) === TRUE) {
                    echo "Te dhenat u shtuan me sukses ne databaze.";
                } else {
                    echo "Keni bere gabim ne plotesimin e te dhenave " . $conn->error;
                } 
              } else {
                  echo "Ju lutem plotësoni të gjitha fushat në formë.";
              } 

                $conn->close();
                ?>

                <!--Mbarimi i lidhjes me databazen -->

            <!--Fillimi Footer-->
        <div  class="container-fluid d-flex justify-content-between background mt-5"> 
            <!--  FILLIMI Our company -->
            <div class=" text-light"> 
              <h1 class="pt-5 ps-5">ARCHITECTURE</h1>
              <h4>The most famous architects in tower</h4>
            </div>
            <!-- MBARIMI OUR COMPANY -->
  
            <!-- fillimi contact formes-->
            <div class="text-light">
              <h5 class="pt-3 pb-4">Email to:</h5>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Send email to:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" ></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Compose email"></textarea>
              </div>
              <button type="button" class="btn btn-outline-primary ms-4 ps-5 pe-5 mb-5">Send</button>
            </div>
            <!-- mbarimi contact forma -->
  
            <!-- fillimi formave te contact-->
            <div class="text-light">
              <h5 class="pt-3 pb-4">Architects emails:</h5>
              <p class="">1.endritduraku82@gmail.com</p>
              <p> 2.perparimrama@gmail.com</p>
              <p> 3.oliviastefan@gmail.com</p>
              <p> 4.stefanantoni@gmail.com</p>
            </div>
            <!-- mbarimi i formave te contact-->
            
            <!-- fillimi i follow -->
            <div class="text-light ">
              <h5 class="pt-3 ms-5">Follow us</h5> 
              <div class="me-5 ">
              <a href="https://www.facebook.com" class="fa fa-facebook text-light" ></a>
              <a href="https://www.instagram.com" class="fa fa-instagram text-light"></a>
              <a href="https://www.twitter.com" class="fa fa-twitter text-light "></a>
            </div>
            </div>
            <!-- mbarimi i follow -->
          </div> 
          <p class="text-center text-light"> Copyright &copy; 2023 All right Reserved | Architecture </p>
          <!--Mbarimi Footer--> 

        </body>
</html>