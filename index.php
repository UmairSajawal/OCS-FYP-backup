
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="form_style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Online Chef Service</title>
</head>
<body>
    <!-- Starter Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Online Chef Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 custom-nav ">
                    <li class="nav-item underline-on-hover underline-on-focus">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item underline-on-hover underline-on-focus">
                <a class="nav-link active" href="experience.php">The Experience</a>
                </li>
                <li class="nav-item underline-on-hover underline-on-focus">
                    <a class="nav-link active" href="ourChef.php">Our Chefs</a>
                </li>
                </ul>
                <div class="d-flex">
                    <!--<button type="button" class="btn btn-outline-warning shadow-none me-lg-3 me-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                    </button>
                    <button type="button" class="btn btn-outline-warning shadow-none rounded-pill" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Chef Register
                    </button>-->
                    <a href="login_form.php" class="btn btn-outline-warning shadow-none me-lg-3 me-2 rounded-pill">Login</a>
                    <a href="register_form.php" class="btn btn-outline-warning shadow-none rounded-pill">Chef Register</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->   
    <!-- Starter Header -->
    <header class="d-flex justify-content-center align-items-center vh-100 bg-image" style="background-image: url('img/chef.jpg'); background-size: cover; background-position: center;">
        <div class="myClass mainHeading">
            <h1 class="text-uppercase text-light font-weight-bold">Welcome To Online Chef Service Website</h1>
            <p class="font-italic text-white-50">Customer's Happiness Is Our Aim</p>
            <a href="test.php" class="myButton ms-auto me-auto d-flex">Find a Chef</a>
        </div>
    </header>  <!-- End Header -->
    <!-- Start Introduction Section Container -->
    <div class="container-fluid">
      <div class="secondContent">
          <h3 class="text-center mt-5">Online Chef Services</h3>
          <p class="text-justify">
              Welcome to our Online Home Chef Service, where we bring the culinary expertise of professional chefs right to your doorstep or event venue. At our website, you have the opportunity to elevate your dining experience by booking a private chef for your home or special occasions. Gone are the days of stressing over meal preparation or worrying about catering for events; our platform connects you with skilled chefs who will curate bespoke menus tailored to your tastes and preferences.
  
              Imagine hosting a dinner party or celebrating a milestone event without having to lift a finger in the kitchen. With our service, you can do just that. Whether you're looking to impress your guests with a gourmet meal in the comfort of your home or seeking a unique culinary experience for a corporate gathering or wedding reception, our team of talented chefs is here to make your vision a reality.
  
              Booking a private chef through our website is simple and convenient. You can browse through our curated selection of chefs, each with their own specialties and culinary styles, and choose the perfect match for your occasion. Once you've selected a chef, you'll have the opportunity to collaborate with them to design a personalized menu that reflects your preferences, dietary restrictions, and event theme.
  
              On the day of your event, our chef will arrive at your location fully prepared with fresh, high-quality ingredients and all the necessary equipment to create a memorable dining experience. From appetizers to desserts, they'll handle every aspect of the meal preparation, allowing you to relax and enjoy the company of your guests.
  
              Whether you're hosting an intimate dinner for two or a lavish celebration for a hundred, our Online Home Chef Service is your go-to destination for exceptional culinary experiences. Let us take the stress out of meal planning and execution so you can focus on making lasting memories with your loved ones. Explore our website today and embark on a culinary journey like no other.
            </p>
      </div>
    </div>
    <!-- Cards Start -->
    <div class="container-fluid py-5">
      <h1 class="text-center">How It Works</h1>
      <div class="row row-cols-sm-1 row-cols-md-3 row-cols-lg-3 g-4 py-5">

          <div class="col">
              <div class="card h-100 " style="width: 300px; height: 400px; margin-left: 50px;">
                  <img src="./img/card001.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Personalize your request</h5>
                      <p class="card-text">Share with us the details of your dreamed meal, including type of cuisine, preferences and intolerances.</p>
                  </div>
              </div>
          </div>

          <div class="col">
              <div class="card h-100 "style="width: 300px; height: 400px; margin-left: 50px;">
                  <img src="./img/card002.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Receive menu proposals</h5>
                      <p class="card-text">Our chefs will design menus based solely on your wants and needs.</p>
                  </div>
              </div>
          </div>

          <div class="col">
              <div class="card h-100 " style="width: 300px; height: 400px; margin-left: 50px;">
                  <img src="./img/card003.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Get chatty with your chefs</h5>
                      <p class="card-text">Dont be shy to exchange some messages with your chefs until your perfect menu is ready!</p>
                  </div>
              </div>
          </div>
      </div>
    </div>  
    <!-- Cards End -->

    <!-- Carousel Start--> 
          <div class="container-fluid wrapper">
              <div style="background-image:url(img3/comp.jpg)"></div>
              <div style="background-image:url(img3/cl0022.jpg)"></div>
              <div style="background-image:url(img3/crm0.jpeg)"></div>
              <div style="background-image:url(img3/cl0033.jpg)"></div>
          </div>
    <!-- Carousel End -->

    <!-- hire chefs in cities of pakistan start -->
    <div class="container-fluid">
      <div class="rowCity">
        <h3 class="text-center">Take Chef in  all the Cities of Pakistan</h3>
        <p class="text-center">
          Discover cities of pakistan where you can enjoy our experiences.
        </p>
        <a href="test.php" class="myButton ms-auto me-auto d-flex">Let's Start</a>
      </div>
    </div>

    <!-- Start Introduction Section Container -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--<script>
      document.getElementById('nextBtn').addEventListener('click', function() {
    const container = document.querySelector('.card-container');
    const cardWidth = document.querySelector('.card').offsetWidth;
    container.scrollBy({ left: cardWidth, top: 0, behavior: 'smooth' });
});

document.getElementById('prevBtn').addEventListener('click', function() {
    const container = document.querySelector('.card-container');
    const cardWidth = document.querySelector('.card').offsetWidth;
    container.scrollBy({ left: -cardWidth, top: 0, behavior: 'smooth' });
});

    </script>-->
<footer class="bg-dark text-white pt-5 pb-4">
  <div class="row text-center text-md-left">
    <div class="row text-center text-md-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-5">
        <h5 class="mb-4 font-weight-bold text-warning">Follow us</h5>
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
              <i class="fa fa-google"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;">
              <i class="fa fa-youtube-play fa-lg"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-start">
        <h5 class="mb-4 font-weight-bold  text-warning">Sitemap</h5>
        <p>
          <a href="become_chef.php" class="text-white" style="text-decoration: none;">Chef Register</a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;">FAQ</a>
        </p>
        <p>
          <a href="login_form.php" class="text-white" style="text-decoration: none;">Sign in</a>
        </p>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-start">
        <h5 class="mb-4 font-weight-bold text-warning">Contact us</h5>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;">052-1231452</a>
        </p>
        <p>
          <a href="#" class="text-white" style="text-decoration: none;">ocs@gmail.com</a>
        </p>
      </div>
    <div class="col-md-5 col-lg-4">
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <h5 class="mb-4 mt-5">Secure Payment</h5>
            <img src="img/payment-method.png" alt="">
          </li>
        </ul>
      </div>
    </div>
    <hr class="mb-4">

        <div class="row align-items-center mt-4">
          <div class="col-12 col-lg-6 text-lg-start text-center">
              <h4 class="ms-3">Online Chef Service</h4>
          </div>
          <div class="col-12 col-lg-6 d-flex justify-content-lg-end justify-content-center">
              <small class="mb-3">Copyright @2024 Online Chef Service. All rights reserved. <a href="ourChef.php" style="text-decoration: none; color: white;">Our Chefs</a></small>
                  <a href="#" style="text-decoration: none;">
                      <small></small>
                  </a>
              </p>
          </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>