
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
                    <a href="login_form.php" class="btn btn-outline-warning shadow-none me-lg-3 me-2 rounded-pill">Login</a>
                <a href="register_form.php" class="btn btn-outline-warning shadow-none rounded-pill">Chef Register</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
    <!-- Starter Header -->
    <header class="d-flex justify-content-center align-items-center vh-100 bg-image" style="background-image: url('img/b-chef1.jpg'); background-size: cover; background-position: center;">
        <div class="myclass mainHeading">
            <h1 class="text-light font-weight-bold text-center">Do what you love</h1>
            <a href="test.php" class="chefButton ms-auto me-auto d-flex">Become a chef</a>
        </div>
    </header>  <!-- End Header -->
    <div class="container-fluid chefExp">
      <div class="row rowChef">
        <div class="text-container">
        <h2 class="mt-4 pt-4 ms-5">Be your own boss</h2>
            <p class="ms-4 pt-2 ms-5">Don't let your talent be kept hidden behind the thick walls of a restaurant. Take the reins and build your own path.</p>
        </div>
        <div class="img-container">
            <img src="our_chef-img/chef-boss.png" class="img-fluid">
        </div>
      </div>
    </div>

    <div class="container-fluid chefExp">
      <div class="row rowChef">
        <div class="text-container">
          <h2 class="mt-4 pt-4 ms-5">Cook your own creations</h2>
            <p class="ms-4 pt-2 ms-5">Let your creativity flow. Give your dishes a chance to shine - and be praised for it.</p>
          </div>
          <div class="img-container">  
            <img src="our_chef-img/chef-cook.jpg" class="img-fluid">
        </div>
      </div>
    </div>

    <div class="container-fluid chefExp">
    <div class="row rowChef">
      <div class="text-container">
            <h2 class="mt-4 pt-4 ms-5">Build true connections</h2>
            <p class="ms-4 pt-2 ms-5">Tell the story behind your dishes. Share your culinary journey. Create meaningful connections with your guests.</p>
          </div>
          <div class="img-container">
            <img src="our_chef-img/chef-cook2.jpg" class="img-fluid">
        </div>
      </div>
    </div>

    <!--Take control section start-->
    <div class="container-fluid py-5">
        <div class="row-content">
            <h3 class="text-center mt-5">Take Control</h3>
            <p class="text-center mt-3">Your talent, your rules.</p>
                <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 g-4 py-5">
          
                    <div class="col">
                        <div class="card h-100">
                            <img src="./our_chef-img/cook-img1 (Custom).jpg" class="card-img-top" style="height: 184px;">
                            <div class="card-body">
                                <h5 class="card-title">Cook your menus</h5>
                                <p class="card-text">Let your creativity shine.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                      <div class="card h-100">
                          <img src="./our_chef-img/cook-img2 (Custom).jpg" class="card-img-top" style="height: 183px;">
                          <div class="card-body">
                              <h5 class="card-title">Decide ur schedule</h5>
                              <p class="card-text text-justify">Only free on Tuesday nights? Great.</p>
                          </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card h-100">
                          <img src="./our_chef-img/cook-img3 (Custom).jpg" class="card-img-top" style="height: 183px;">
                            <div class="card-body">
                                <h5 class="card-title">Talk to your guests</h5>
                                <p class="card-text">Build true connections from scratch.</p>
                            </div>
                        </div>
                      </div>

                    <div class="col">
                        <div class="card h-100">
                            <img src="./our_chef-img/cook-img4 (Custom).jpg" class="card-img-top" style="height: 181px;">
                            <div class="card-body">
                                <h5 class="card-title">Set your prices</h5>
                                <p class="card-text">You run your business, you know what's right.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    
    <!--Take control section End-->

    <!--  Start   (We are here for you when it matters the most) -->
    <div class="container-fluid py-5">
      <div class="rowCards">
          <h3 class="text-center pt-5 mt-2">We are here for you when it matters the most</h3>
            <p class="text-center pt-3">Have peace of mind and rely on our 24/7 team to assist you at all times.</p>
              <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 g-3 py-5 ps-4 pe-4">
                
                <div class="col mt-4">
                  <div class="card h-100"  style="width: 220px;">
                    <div class="card-body" style="height: 200px">
                      <h5 class="card-title pt-4">Secure payment</h5>
                        <p class="card-text">Payments are encrypted to protect your data.</p>
                    </div>
                  </div>
                </div>
    
                <div class="col mt-4">
                  <div class="card h-100" style="width: 220px;">
                    <div class="card-body" style="height: 200px">
                      <h5 class="card-title pt-4">Global Insurance</h5>
                        <p class="card-text">Should anything happen, we've got you covered.</p>
                    </div>
                  </div>
                </div>

                <div class="col mt-4">
                  <div class="card h-100" style="width: 220px;">                       
                    <div class="card-body" style="height: 200px">
                      <h5 class="card-title pt-4">Flexible Cancellation Policy</h5>
                        <p class="card-text">Enjoy flexibility when you need it.</p>
                    </div>
                  </div>
                </div>

                <div class="col mt-4">
                  <div class="card h-100" style="width: 220px;">                     
                    <div class="card-body" style="height: 200px">
                      <h5 class="card-title pt-4">4/7 Support</h5>
                        <p class="card-text">Get a response within 60 seconds.</p>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div>
  <!--  End   (We are here for you when it matters the most) -->
    <div class="container-fluid">
    <div class="chefExperirnceContent text-center">
        <h3 class="text-center mt-5">A curated portfolio</h3>
        <p class="text-justify text-center">
          We carefully select our chefs so you can easily connect with the best local talent.Become part of the largest community of culinary talent worldwide.
        </p>
        <div class="mb-0 d-flex justify-content-around">
        <a href="test.php" class="myButton ms-auto me-auto d-flex">Find a Chef</a>
        </div>
    </div>
    </div>
        
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Start Frequently asked Questions-->
  <section class="main-content">
      <div class="row">
        <h1 class="text-center text-uppercase mb-3">Frequently Asked Questions</h1>
        <p class="text-center mb-5">Because the more you know, the better!</p>
        <div class="row flex-center">
          <div class="col-sm-10 offset-sm-1">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <span>Who are the chefs?</span> </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">Chefs with all kinds of backgrounds, experience, specialties, and services can be found on Take a Chef! We have many chefs available to you - there is someone for every taste. It is up to you to decide who is your perfect match based on the profile and conversation you have with each chef. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span>How should I book a private chef?</span> </button>
            </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body"> Well, enjoying an unforgettable culinary experience without leaving the comfort of your home! Whether it is a dinner between friends, a romantic night in, or a family reunion, this experience is sure to exceed your expectations. Win the batch of "the best host" while getting pampered yourself and enjoying the night! Shopping, cooking, setting the table and cleaning-up afterwards are all taken care of for you. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <span>How can I hire a chef through Online Chef Service?</span> </button>
            </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body"> The moment you arrive at our site you will encounter a big “begin” button. This will be the beginning of your journey towards personalizing your Private Chef experience!.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <span>How do I choose a chef?</span> </button>
            </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">You will have access to the profiles of all the chefs interested in serving you! You are welcomed to browse their biography, culinary photo gallery, and of course, reviews from previous guests. Use this information to choose the right chef for you! It is hard to think of a better judge for what you crave than yourself. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <span>How I talk to the chef prior to complete my reservation?</span> </button>
            </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">Of course you can! You have an internal chat with each of your prospect chefs. Feel free to ask as many questions as you need! </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <span>What happens if the chef cancels my booking?</span> </button>
            </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">It is very unlikely for this to happen, but in case it does, don't worry! We will either refund you fully, or help you find a new chef and menu similar to the one you originally requested - as you prefer. For more detailed information about this subject please jump to our cancellation policy. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"> 
                  <span>how does the customer review section work?</span> </button>
            </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                  <div class="accordion-body">Customer reviews are a key aspect for Online Chef Service since they allow us to obtain objective information from our guests about the chef. At the same time, reviews help future customers to choose the chef most suitably equipped for their event.The day after the experience, the customer will receive a feedback survey to evaluate the chef. Reviews always go public! These are meant to help the chef showcase their talent, and impove their skills.  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
    <!--End Frequently asked Questions-->
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
        <h5 class="mb-4 font-weight-bold text-warning">Sitemap</h5>
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
