<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="form_style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    
    <!-- CSS -->
    
    
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
    <header class="d-flex justify-content-center align-items-center vh-100 bg-image" style="background-image: url('img04/chef010.jpeg'); background-size: cover; background-position: center;">
        <div class="myClass mainHeading">
            <h1 class="text-uppercase text-light font-weight-bold">Experience the Art of Cooking, Book a Chef</h1>
            <p class="font-italic text-white-50">Customer's Happiness Is Our Aim</p>
            <a href="test.php" class="myButton ms-auto me-auto d-flex">Find a Chef</a>
        </div>
    </header>  <!-- End Header -->
  
    <div class="swiper mySwiper" style="padding-top: 110px;">

      <div class="swiper-wrapper">
  
        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img04/malechef1.jpeg" alt="card image">
          </div>



          <div class="card__content">
            <span class="card__title">Chef Asad Ali</span>
            <p class="card__text"></p>
            <div class="rateSec">
              <span class="rounded-pill pl-2 pr-3 py-1 d-inline-block">
                <i class="fa fa-star text-warning"></i>
                <span>4.7</span>
                <span class="mx-2">•</span>
                <span>10 services</span>
              </span>
            </div>
            <a href="">Read more</a>
            <button class="card__btn"><a href="test.php">Book</a></button>
          </div>
        </div>
  
        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img04/femalechef1.jpeg" alt="card image">
          </div>
  
          <div class="card__content">
            <span class="card__title">Chef Memoona Ilyas</span>
            <p class="card__text"></p>
            <div class="rateSec">
              <span class="rounded-pill pl-2 pr-3 py-1 d-inline-block">
                <i class="fa fa-star text-warning"></i>
                <span>5</span>
                <span class="mx-2">•</span>
                <span>17 services</span>
              </span>
            </div>
            <a href="">Read more</a>
            <button class="card__btn"><a href="test.php">Book</a></button>
          </div>
        </div>
  
        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img04/malechef6.jpeg" alt="card image">
          </div>
  
          <div class="card__content">
            <span class="card__title">Chef Azher Anwar</span>
            <p class="card__text"></p>
            <div class="rateSec">
              <span class="rounded-pill pl-2 pr-3 py-1 d-inline-block">
                <i class="fa fa-star text-warning"></i>
                <span>4.8</span>
                <span class="mx-2">•</span>
                <span>11 services</span>
              </span>
            </div>
            <a href="">Read more</a>
            <button class="card__btn"><a href="test.php">Book</a></button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img04/femalechef2.jpeg" alt="card image">
          </div>
  
          <div class="card__content">
            <span class="card__title">Chef Aman Iqbal</span>
            <p class="card__text"></p>
            <div class="rateSec">
              <span class="rounded-pill pl-2 pr-3 py-1 d-inline-block">
                <i class="fa fa-star text-warning"></i>
                <span>4.4</span>
                <span class="mx-2">•</span>
                <span>8 services</span>
              </span>
            </div>
            <a href="">Read more</a>
            <button class="card__btn"><a href="test.php">Book</a></button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img04/malechef5.jpeg" alt="card image">
          </div>
  
          <div class="card__content">
            <span class="card__title">Chef Arif Hussain</span>
            <p class="card__text"></p>
            <div class="rateSec">
              <span class="rounded-pill pl-2 pr-3 py-1 d-inline-block">
                <i class="fa fa-star text-warning"></i>
                <span>4.1</span>
                <span class="mx-2">•</span>
                <span>5 services</span>
              </span>
            </div>
            <a href="">Read more</a>
            <button class="card__btn"><a href="test.php">Book</a></button>
          </div>
        </div>
      
        <div class="card swiper-slide">
          <div class="card__image">
            <img src="img04/malechef4.jpeg" alt="card image">
          </div>
  
          <div class="card__content">
            <span class="card__title">Chef Rauf Haider</span>
            <p class="card__text"></p>
            <div class="rateSec">
              <span class="rounded-pill pl-2 pr-3 py-1 d-inline-block">
                <i class="fa fa-star text-warning"></i>
                <span>4.8</span>
                <span class="mx-2">•</span>
                <span>12 services</span>
              </span>
            </div>
            <a href="">Read more</a>
            <button class="card__btn"><a href="test.php">Book</a></button>
          </div>
        </div>
      </div>
    </div>






<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>




<!--<script>
    let currentIndex = 0;

function moveLeft() {
    const cards = document.querySelector('.cards');
    if (currentIndex > 0) {
        currentIndex--;
        updateTransform(cards);
    }
}

function moveRight() {
    const cards = document.querySelector('.cards');
    const cardCount = document.querySelectorAll('.card').length;
    if (currentIndex < cardCount - 1) {
        currentIndex++;
        updateTransform(cards);
    }
}

function updateTransform(cards) {
    const cardWidth = document.querySelector('.card').clientWidth;
    const containerWidth = document.querySelector('.card-container').clientWidth;
    const offset = (containerWidth - cardWidth) / 2;
    const transformValue = -(currentIndex * (cardWidth + (containerWidth * 0.05)) - offset);
    cards.style.transform = `translateX(${transformValue}px)`;
}

window.addEventListener('resize', () => {
    const cards = document.querySelector('.cards');
    updateTransform(cards);
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