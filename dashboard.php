<?php

include_once 'session.php';

?>

<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>E-Learning Platform</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&display=swap" rel="stylesheet">

    <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="ntcc_style.css">

    <!--  Social Buttons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon -->
  </head>
  <body>

     <div class="center">
    <?php 
      echo "<h3 style= 'background-color: ghostwhite'>";
      echo "<span style='color: mediumblue'>";
      echo "<h3 > Welcome ".$_SESSION['username']." ! </h3>" ?>
  </div>

      <!--<h2><a href="logout.php">Logout</a></h2>-->


 <!-- Navbar -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> E-LEARNING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.elearningnc.gov/about_elearning/what_is_elearning/" target="blank">About Us</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Course Catalog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="course.html">All</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">AICTE-NITTT-Courses</a>
         
          <a class="dropdown-item" href="#">Architecture and Planning</a>
        
                <a class="dropdown-item" href="#">Education</a>
                
          <a class="dropdown-item" href="#">Engineering and Technology</a>
          <a class="dropdown-item" href="#">Humanities & Arts</a>
          <a class="dropdown-item" href="#">Law</a>
          <a class="dropdown-item" href="#">Management & Commerce</a>
          <a class="dropdown-item" href="#">Maths & Sciences</a>
          <a class="dropdown-item" href="#">School</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">National Coordinators</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Community</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Help & Support</a>
      </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Catalog..." aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--<div class="center">
<a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Log-In/Register</a>
</div>-->

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="education4.webp" class="d-block w-100" style="height: 600px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="education8.webp" class="d-block w-100" style="height: 600px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="education3.jpg" class="d-block w-100" style="height: 600px" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- NATIONAL COORDINATORS -->
<section id="national_coordinators" class="container">
  <h4 class="text-center">NATIONAL COORDINATORS</h4>

<div class="row">
    <div class="col-sm-2 coordinators_column">
      <img src="STANFORD.png" class="img-fluid img-responsive" width="54%">
      <p class="coordinators-content">STANFORD</p></div>

    <div class="col-sm-2 coordinators_column">
      <img src="IIMB.png" class="img-fluid img-responsive" width="54%" >
      <p class="coordinators-content">IIMB</p></div>

    <div class="col-sm-2 coordinators_column">
      <img src="IGNOU.png" class="img-fluid img-responsive" width="37%">
      <p class="coordinators-content">IGNOU</p></div>

    <div class="col-sm-2 coordinators_column">
      <img src="AICTE.png" class="img-fluid img-responsive" width="40%">
      <p class="coordinators-content">AICTE</p></div>

    
    <div class="col-sm-2 coordinators_column">
      <img src="CEC.jpg" class="img-fluid img-responsive" width="32%">
      <p class="coordinators-content">CEC</p></div>

    <div class="col-sm-2 coordinators_column">
      <img src="IBM.png" class="img-fluid img-responsive" width="37%">
      <p class="coordinators-content">IBM</p></div>
    
    </div>
    <hr>

</section>

<!-- ACHIEVE GOALS -->
<section id="achieve_goals" class="container">
  <div class="text-center"><h2 class="text-center"><b>ACHIEVE YOUR GOALS WITH E-LEARNING</b></h2></div>

  <div class="row">
    <div class="col-sm-3 coordinators_column">
      <img src="SKILL.jpg" class="img-fluid img-responsive" width="35%">
      <h3 class="coordinators-content">Learn the Latest Skills</h3><br>
      <p class="goals">like business analytics, graphic design, Python, and more</p>
    </div>

    <div class="col-sm-3 coordinators_column">
      <img src="CAREER.jpg" class="img-fluid img-responsive" width="35%" >
      <h3 class="coordinators-content">Get Ready for a Career</h3><br>
      <p class="goals">in high-demand fields like IT, AI and cloud engineering</p>
    </div>

    <div class="col-sm-3 coordinators_column">
      <img src="DEGREE.jpg" class="img-fluid img-responsive" width="35%">
      <h3 class="coordinators-content">Earn a Certificate or Degree</h3><br>
       <p class="goals">from a leading university in business, computer science, and more</p>
    </div>

    <div class="col-sm-3 coordinators_column">
      <img src="ORGANISATION.jpg" class="img-fluid img-responsive" width="35%">
      <h3 class="coordinators-content">Upskill Your Organisation</h3><br>
      <p class="goals">with on-demand training and development programs</p>
    </div>
    </div>
    <hr>

  </section>

<!-- E-Learning Benefits -->
<section id="gallery" class="container">
  <div>
  <div class="text-center"><h2 class="text-center"><b>E-Learning Benefits</b></h2></div>

  <div class="row">
    <div class="benefit-container col-sm-6"> 
      <img src="BENEFIT11.jpg" width="50%" class="img-fluid img-responsive" alt="John Doe">
  </div>
    <div class="col-sm-6">
    <h3 class="benefit-content">Best-In-Class Instructors</h3><br>
      <p class="goals">Empowering you with knowledge and skills.</p>
  </div></div>
  <hr>

  <div>
    <div class="row">
    <div class="col-sm-6">
      <h3 class="benefit-content">Weekly Assignments</h3><br>
      <p class="goals">Ensuring your progress in timely manner & daily assessment.</p>
    </div>
  
  <div class="benefit-container col-sm-6"> 
      <img src="BENEFIT2.jpg" width="50%" class="img-fluid img-responsive" alt="John Doe">
  </div></div>
  <hr>

  <div>
    <div class="row">
    <div class="benefit-container col-sm-6"> 
      <img src="BENEFIT3.jpg" width="50%" class="img-fluid img-responsive" alt="John Doe">
  </div>
    <div class="col-sm-6">
      <h3 class="benefit-content">Proctored Exams</h3><br>
      <p class="goals">Channelized through our authorized partners.</p>
    </div>
      
    </div><hr>

     <div>
    <div class="row">
    <div class="col-sm-6">
      <h3 class="benefit-content">Active Local Chapters</h3><br>
      <p class="goals">Enhancing effectiveness of MOOCs (Massive Online Open Courses).</p>
    </div>
  
  <div class="benefit-container col-sm-6"> 
      <img src="BENEFIT4.jpg" width="50%" class="img-fluid img-responsive" alt="John Doe">
  </div></div>
  <hr>

  <div>
    <div class="row">
    <div class="benefit-container col-sm-6"> 
      <img src="BENEFIT1.jpg" width="50%" class="img-fluid img-responsive" alt="John Doe">
  </div>
    <div class="col-sm-6">
      <h3 class="benefit-content">Easy Credit Transfer</h3><br>
      <p class="goals">Complementing your academic program.</p>
    </div>
      
    </div><hr>

   <div>
    <div class="row">
    <div class="col-sm-6">
      <h3 class="benefit-content">Systematic Learning Approach</h3><br>
      <p class="goals">Enabling you towards desired learning goals.</p>
    </div>
  
  <div class="benefit-container col-sm-6"> 
      <img src="BENEFIT5.jpg" width="50%" class="img-fluid img-responsive" alt="John Doe">
  </div></div>
  <hr>
 
</section>

<!-- TOP COURSES -->

<section id="top" class="container">
  <div>
  <div class="row">
    <div class="col-sm-4 text-center">
     <h2 style="font-size: 24px">Top Online Courses</h2> 
     <hr style="border: 1px solid #bg-dark; width: 90%">
     <a href="#" class="top-link">AI</a><br>
     <a href="#" class="top-link">R Programming</a><br>
     <a href="#" class="top-link">Data Analysis with Python</a><br>
     <a href="#" class="top-link">Deep Learning</a><br>
     <a href="#" class="top-link">Data Science</a><br>
     <a href="#" class="top-link">Machine Learning</a><br>
    </div>
    <div class="col-sm-4 text-center">
      <h2 style="font-size: 24px">Online Certificates </h2>
      <hr style="border: 1px solid #bg-dark; width: 90%">
        <a href="#" class="top-link">Google IT Support</a><br>
        <a href="#" class="top-link">IBM Customer Engagement Specialist</a><br>
        <a href="#" class="top-link">IBM Data Science</a><br>
        <a href="#" class="top-link">Applied Project Management</a><br>
        <a href="#" class="top-link">IBM Applied AI Professional Certificate</a><br>
        <a href="#" class="top-link">Machine Learning for Analytics</a><br>
    </div>
    <div class="col-sm-4 text-center">
      <h2 style="font-size: 24px">Online Degree Programs</h2>
      <hr style="border: 1px solid #bg-dark; width: 90%">
      <a href="#" class="top-link">Master's in Data Science</a><br>
      <a href="#" class="top-link">Bachelors Degree in Computer Science</a><br>
      <a href="#" class="top-link">Computer Science and Engineering Degrees</a><br>
      <a href="#" class="top-link">Master's in Machine Learning</a><br>
      <a href="#" class="top-link">MBA and Business Degrees</a><br>
      <a href="#" class="top-link">Master's in Information Technology</a><br>
       </div>

      <div class="col-sm-4 text-center">
      <img src="ELOGO4.jpg" class="img-fluid img-responsive">
    </div>

    <div class="col-sm-4 text-center">
      <img src="ELOGO6.jpg" class="img-fluid img-responsive">
    </div>

    <div class="col-sm-4 text-center">
      <img src="ELOGO7.jpg" class="img-fluid img-responsive">
    </div>
    

    </div>
  </section>

<!-- Footer -->

<!-- Footer -->
  <footer>
    <div>
    
    <section id="gallery" class="container">
  <div class="row">

     <div class="col-sm-3 text-center">
      <img src="ELOGO1.jpg" class="img-fluid img-responsive" width="50%">
    </div>

    <div class="col-sm-3 text-center">
     <h2 style="font-size: 24px">LINKS</h2> 
     <hr style="border: 1px solid #FFFFFF; width: 50%">
      
        <a href="#" class="footer-link">About Us</a><br>
        <a href="#" class="footer-link"> Privacy Policy </a><br>
        <a href="#" class="footer-link"> Terms and Conditions</a>
    </div>

    <div class="col-sm-3 text-center">
     <h2 style="font-size: 24px">CONTACT US</h2> 
     <hr style="border: 1px solid #FFFFFF; width: 90%">
      
      <p>Helpline: +911234567890<br>
         Email: support@e-learning.com <br>
         Twitter: @E-learning</p>
       </div>

     <div class="col-sm-3 text-center">
      <img src="ELOGO8.jpg" class="img-fluid img-responsive" width="50%">
    </div>
  </div>
</section>

   <!-- Call to action -->

  <hr style="border: 1px solid #FFFFFF; width: 100%">
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Thanks For Exploring...</h5>
    </li>
    <li class="list-inline-item">
      <a href="logout.php" class="btn btn-danger btn-rounded">Log Out!</a>
    </li>
  </ul>

  <hr style="border: 1px solid #FFFFFF; width: 100%">

<div class="text-center">
  <h5>Follow Us</h5>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>

  <div>
  <p class="text-center">Copyright &copy; E-Learning 2020. All Rights Reserved.</p>
  <p class="text-center">Made with &hearts; in India.</p>
 </div>

 

  

 
 

</footer>

 

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>









</body>
</html>