<html>
    <head>
        <title>Service</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

       <style>
         @import url("http://fonts.googleapis.com/css?family=Oswald:400,300,700");
         body{
        font-family: 'Oswald', sans-serif !important;
       }


          .carousel img{
            object-fit: cover;
          }  
          img{
            object-fit: cover;
          } 
          .service img{
            object-fit: contain;
          }
          .background{
            background-color: black;
            
          }
          .card:hover{
            transform: scale(1.10);

          } 
          .bck{
            background-color: rgb(189, 169, 169);
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
          <!--Fillimi i Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
            <div class="container-fluid ">
              <a class="navbar-brand" href="#">ARCHITECTURE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="home.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="projects.html">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="service.php" active>Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="aboutus.html">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li> 
                </ul>
              </div>
              <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-primary" aria-current="page" href="login.html" >Log-in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary" href="signup.html">Sign-up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li> 
              </div>
            </div>
          </nav>
                  <!--Mbarimi i Navbar--> 
                    <!--Fillimi i carousel-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/carousel11.jpg" class="d-block w-100" alt="..."height="500px">               
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
          
          <!--Mbarimi icarousel-->   

          <h1 class="text-center text-light bg-secondary mt-5 p-5">OUR SERVICE</h1> 

          <div class="container-fluid">
            <div class=" row">
            
            <div class="col-md-6 p-5 ">
                <h1 class="text-light">NEW BUILD HOMES </h1>
                <p class="text-light">
                    Are you looking to build a new home from scratch? Our architectural design team are specialists in creating custom designs that bring your vision to life. <br>
                     We will work with you every step of the way to ensure your new build exceeds your expectations and meets your unique needs. <br>
                      If you want to know more about the process that we recommend for new build projects, follow the link and find out more. <br>
                      We offer you a bespoke new build service for those who are looking to construct a new home from the ground up. <br>
                       Our team of architectural designers is comprised of specialists who are dedicated to creating custom designs that reflect your personal vision and cater to your individual needs. <br>
                        Our ultimate goal is to ensure that the end result is a home that exceeds your expectations and provides you with the living space you've always desired. <br>
                        Throughout the entire process, we will work closely with you to understand your requirements, budget, and timeline. <br>
                         Our team will take the time to gather all the necessary information to ensure the success of your new build. <br>
                          The initial design concept will be created in collaboration with you, taking into consideration your personal vision and preferences.
                </p>
                <button type="button" class="btn btn-outline-light">Learn more</button>
            </div>

            <div class=" col-md-6 p-5">
                <img src="../images/service1.jpg" alt="" height="500px" width="700px">
            </div>
            </div>
          </div>


          <div class="container-fluid">
            <div class=" row">
           
            <div class="col-md-6 p-5 ">
                <img src="../images/service2.jpg" alt="" width="700px" height="500px">
            </div>

            <div class=" col-md-6 p-5">
                <h1 class="text-light">HOLIDAY HOME </h1>
                <p class="text-light">
                    Take your holiday home experience to the next level with a custom-designed holiday home. <br>
                     Our architectural designs for holiday homes are tailored to meet your unique needs and preferences,<br>
                     making your time away feel like a home away from home. <br>
                     We work at all scales of design from your traditional bach to a luxury escape. <br>
                     If you want to know more about the process that we recommend for holiday homes, follow the link and find out more <br>
                     We offers a comprehensive service for designing custom holiday homes that cater to your unique requirements and preferences. <br>
                     Whether you're looking for a traditional bach or a luxurious escape, our team of architectural specialists is here to help you take your holiday home experience to the next level. <br>
                    Our focus is on creating holiday homes that feel like a home away from home, providing you with the comfort and amenities you need to truly relax and enjoy your time away. <br>
                     From the initial design concept to the final build, we work with you every step of the way to ensure that your holiday home exceeds your expectations.
                </p>
                <button type="button" class="btn btn-outline-light">Learn more</button>
            </div>

            </div>
          </div>



          <div class="container-fluid">
            <div class=" row">
            
            <div class="col-md-6 p-5 mt-5">
                <h1 class="text-light">RENOVATION</h1>
                <p class="text-light">
                    Breathe new life into your current home with our renovation design services. <br>
                     Our team of experts will work with you to revamp your living space, <br>
                     incorporating modern amenities and design elements while preserving the character of your home. <br>
                     We also work to create extensions and full renovation services to turn your existing home into a brand-new building. <br>
                     If you want to know more about the process that we recommend for renovation projects, follow the link and find out more. <br>
                     Our renovation design service offers a comprehensive solution for those looking to revitalize their current home. <br>
                     Whether you're looking to add modern amenities, change the layout, or create a whole new look, our team of experts will work  <br>
                     with you every step of the way to ensure that your renovation exceeds your expectations. <br>
                     We understand that renovating a home can be a big investment, which is why our team will take the time to understand your specific needs, budget, and timeline. <br>
                     We'll work with you to create a design that incorporates modern design elements while preserving the character of your home. <br>
                     Whether you're looking to renovate a single room or the entire house, we have the expertise and experience to get the job done right.


                </p>
                <button type="button" class="btn btn-outline-light">Learn more</button>
            </div>

            <div class=" col-md-6 p-5">
                <img src="../images/service3.jpg" alt="" height="600px" width="700px">
            </div>
            </div>
          </div>  

          <div class="container-fluid">
           <h1 class="text-light text-center bg-secondary mt-5 p-5"> Some of the recent works by our architects</h1>
          </div>

         <!-- fillimi tabeles -->

<div class="container">
    <h1>Arkitekti dhe Projekti</h1>
    <table class="table bg-secondary">
        <thead>
            <tr>
                <th>Arkitekti ID</th>
                <th>Emri Arkitektit</th>
                <th>Mbiemri Arkitektit</th>
                <th>Numri Telefonit</th>
                <th>Email Arkitektit</th>
                <th>Projekti ID</th>
                <th>Emri Projektit</th>
                <th>Lokacioni</th>
                <th>Data Fillimit</th>
                <th>Data Mbarimit</th>
            </tr>
        </thead>
        <tbody>
            <?php
       
            $conn = new mysqli('localhost', 'root', '', 'architecture');

          
            if ($conn->connect_error) {
                die("Lidhja dështoi: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM arkitekti";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['arkitekti_id'] . "</td>";
                    echo "<td>" . $row['emri'] . "</td>";
                    echo "<td>" . $row['mbiemri'] . "</td>";
                    echo "<td>" . $row['numritel'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";

                    $projektiSql = "SELECT * FROM projekti WHERE arkitekti_id = " . $row['arkitekti_id'];
                    $projektiResult = $conn->query($projektiSql);

              
                    if ($projektiResult->num_rows > 0) {
                        while ($projektiRow = $projektiResult->fetch_assoc()) {
                            echo "<td>" . $projektiRow['projekti_id'] . "</td>";
                            echo "<td>" . $projektiRow['emri'] . "</td>";
                            echo "<td>" . $projektiRow['lokacioni'] . "</td>";
                            echo "<td>" . $projektiRow['datafilliimit'] . "</td>";
                            echo "<td>" . $projektiRow['datambarimit'] . "</td>";
                     
                        }
                    } else {
                        echo "<td colspan='6'>Nuk ka projekte për këtë arkitekt.</td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10'>Nuk ka arkitektë në bazën e të dhënave.</td></tr>";
            }

         ?>
          </tbody>
          </table>
          </div>

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
        