<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <style>
      *{
        font-family: 'Poppins', sans-serif;
      }
      .h-font{
        font-family: 'Merienda',cursive;
      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      input[type=number] {
        -moz-appearance: textfield;
      }
      .custom-bg{
        background-color: #2ec1ac;
      }
      .custom-bg:hover{
        background-color: #279e8c;
      }
      .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen and (max-width:575px){
        .availability-form{
          margin-top: 25px;
          padding: 0 35px;
        }
      }
      .swiper {
        width: 100%;
        height: 100%;
      }
      .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      }
      .swiper-slide img {
        display: block;
        width: 100%;
      }
      .square-image {
        width: 30px;
        height: 30px;
        overflow: hidden;
      }
      .square-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

    </style>
  </head>
  <body class="bg-light">

<!-- VARBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">UUM HOTEL</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link me-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item me-2" href="#">Action</a></li>
            <li><a class="dropdown-item me-2" href="#">Another action</a></li>
            <li><hr class="dropdown-divider me-2"></li>
            <li><a class="dropdown-item me-2" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link me-2 disabled">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
          Register
        </button>
      </form>
    </div>
    </div>
  </nav>
<!-- LOGIN BUTTON -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-circle fs-3 me-2"></i>
            User Login
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow-none">Login</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
          </div>
        </div>
        
        </form>
      </div>
    </div>
  </div>  
<!-- REGISTER BUTTON -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-lines-fill fs-3 me-2"></i>
            User Registration
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
            Note: Your details must be match with your IC/PASSPORT that will be required during check-in.
          </span>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
              </div>  
              <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
              </div>
              <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
              </div> 
              <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
              </div>  
              <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">StateCode</label>
                  <input type="number" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
              </div> 
              <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Comfirm Password</label>
                  <input type="password" class="form-control shadow-none">
              </div> 
            </div>
          </div>
          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">Register</button>
          </div>
          
        </div>
        </form>
      </div>
    </div>
  </div> 
<!-- SLIDERS -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container" style="width: 100%; height: 400px;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/1.png" class="img-fluid">
        </div>
        <div class="swiper-slide">
          <img src="images/2.png" class="img-fluid">
        </div>
        <div class="swiper-slide">
          <img src="images/3.png" class="img-fluid">
        </div>
        <div class="swiper-slide">
          <img src="images/4.png" class="img-fluid">
        </div>
        <!-- <div class="swiper-slide">
          <img src="images/1.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/1.png" class="w-100 d-block">
        </div> -->
      </div>
    </div>
    </div>
  </div>
<!-- AVAILABILITY -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
              <label class="form-label" style="font-weight:500;">Check-In</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
              <label class="form-label" style="font-weight:500;">Check-Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 mb-3">
              <label class="form-label" style="font-weight:500;">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 mb-3">
              <label class="form-label" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 mb-3">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- OUR ROOMS -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/4.png" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">RM200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Air Conditioner
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Swimming pool
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/4.png" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">RM200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Air Conditioner
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Swimming pool
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/4.png" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">RM200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Air Conditioner
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                Swimming pool
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
              <i class="bi bi-star text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
      </div>
    </div>
  </div>
<!-- OUR FACILITIES -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
      </div>
    </div>
  </div>
<!-- TESTIMONIALS -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <div class="square-image">
              <img src="images/user1.png">
            </div>
            <h6 class="m-0 ms-2"> Random User1</h6>
          </div>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
            <i class="bi bi-star text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <div class="square-image">
              <img src="images/user1.png">
            </div>            
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
            <i class="bi bi-star text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
           <div class="square-image">
              <img src="images/user1.png">
            </div>  
          <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
            <i class="bi bi-star text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
    </div>
  </div>

<!-- REACH US -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg=8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5761660877606!2d100.50710081160244!3d6.44842292400219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304cae152c08f777%3A0x76d78a9b0a4b933d!2sUniversiti%20Utara%20Malaysia!5e0!3m2!1sen!2smy!4v1686806921744!5m2!1sen!2smy" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +6049284000" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+6049284000
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter"></i> Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook"></i> Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i> Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-primary-subtle mt-5 pt-4">
    <div class="row">
      <div class="col-lg-4">
        <h3 class="h-font fw-bold fs-3 mb-2">UUM HOTEL</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Commodi laborum distinctio necessitatibus rem, dicta quam beatae laudantium, 
          veritatis sapiente placeat hic quidem perspiciatis minus id natus ducimus cumque consequatur qui.
        </p>
      </div>
      <div class="col-lg-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Rooms</a><br>
        <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Facilities</a><br>
        <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Contact us</a><br>
        <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4">
          <h5 class="mb-3">Follow us</h5>
          <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-twitter"></i> Twitter
          </a><br>
          <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-facebook"></i> Facebook
          </a><br>
          <a href="#" class="d-inline-block text-dark text-decoration-none">
            <i class="bi bi-instagram"></i> Instagram
          </a>
      </div>
    </div>
  </div>
  
  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Group 6</h6>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay:{
          delay: 3500,
          disableOnInteraction: false,
        }
      });
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true, 
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoint:{
          320:{
            slidesPerView:1,
          },
          640:{
            slidesPerView:1,
          },
          768:{
            slidesPerView:2,
          },
          1024:{
            slidesPerView:3,
          }
        }
      });
    </script>
  </body>
</html>   