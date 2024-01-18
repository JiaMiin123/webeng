<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HBS</title>
  <?php require('links.php'); ?>
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width:575px) {
      .availability-form {
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

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-light">
  <?php
  require('header.php');
  ?>

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
        <form action="rooms.php">
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
            <h5>Simple Room</h5>
            <h6 class="mb-4">RM90 per night</h6>
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
                1 Sofa
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
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                2 Adults
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Children
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
              <a class="btn btn-sm btn-outline-dark shadow-none" onclick="showDetails_single()">More Details</a>
            </div>
            <div id="myModal1" class="modal">
              <div class="modal-content">
                <span class="close" onclick="hideDetails_single()">&times;</span>
                <h2>Details</h2>
                <p>Price: RM90 per night <br><br>Our Single Room at UUM Hotel offers a cozy and comfortable haven for
                  solo travelers. Step into a
                  well-appointed space designed with your needs in mind. The room features a comfortable single bed
                  adorned with plush linens, ensuring a restful night's sleep. Relax in a tastefully decorated
                  environment that combines modern aesthetics with a touch of warmth. Catch up on work or connect with
                  loved ones using the convenient work desk and complimentary high-speed Wi-Fi. Unwind in the private
                  en-suite bathroom, equipped with modern fixtures and luxurious amenities. The Single Room provides a
                  peaceful retreat for solo travelers seeking both convenience and comfort during their stay.</p>
              </div>
            </div>

            <script>
              function showDetails_single() {
                document.getElementById("myModal1").style.display = "block";
              }

              function hideDetails_single() {
                document.getElementById("myModal1").style.display = "none";
              }
            </script>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/4.png" class="card-img-top">
          <div class="card-body">
            <h5>Double Room</h5>
            <h6 class="mb-4">RM150 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                3 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                2 Bathrooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                2 Sofa
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
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                3 Adults
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                2 Children
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
              <a class="btn btn-sm btn-outline-dark shadow-none" onclick="showDetails_double()">More Details</a>
            </div>
            <div id="myModal2" class="modal">
              <div class="modal-content">
                <span class="close" onclick="hideDetails_double()">&times;</span>
                <h2>Details</h2>
                <p>Price: RM150 per night <br><br>Experience the perfect balance of comfort and style in our Double Room
                  at UUM Hotel. Designed for
                  couples or travelers seeking shared accommodation, the room features a spacious and inviting
                  atmosphere. Sink into the comfort of a plush double bed, adorned with soft linens and cozy pillows,
                  guaranteeing a restful night's sleep. The Double Room boasts modern decor and ample space to relax and
                  unwind after a day of exploration. Stay connected with complimentary high-speed Wi-Fi or catch up on
                  work at the dedicated work desk. The private en-suite bathroom offers contemporary fixtures and
                  luxurious amenities for your convenience and indulgence. Whether you're traveling with a loved one or
                  a friend, our Double Room provides the perfect retreat for a memorable stay.</p>
              </div>
            </div>

            <script>
              function showDetails_double() {
                document.getElementById("myModal2").style.display = "block";
              }

              function hideDetails_double() {
                document.getElementById("myModal2").style.display = "none";
              }
            </script>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/4.png" class="card-img-top">
          <div class="card-body">
            <h5>Deluxe Room</h5>
            <h6 class="mb-4">RM200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                4 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                3 Bathrooms
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                4 Sofa
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
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                4 Children
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
              <a class="btn btn-sm btn-outline-dark shadow-none" onclick="showDetails_deluxe()">More Details</a>
            </div>
            <div id="myModal3" class="modal">
              <div class="modal-content">
                <span class="close" onclick="hideDetails_deluxe()">&times;</span>
                <h2>Details</h2>
                <p>Price: RM200 per night <br><br>Indulge in the epitome of luxury and sophistication in our Deluxe Room
                  at UUM Hotel. Designed for
                  discerning travelers who seek the finer things in life, the Deluxe Room offers an expansive space
                  filled with elegant furnishings and modern comforts. Retreat to a sumptuous king-sized bed adorned
                  with high-quality linens, inviting you to sink into a blissful night's sleep. The room boasts a
                  thoughtfully designed sitting area, allowing you to unwind and enjoy the tranquil ambiance. Stay
                  connected with complimentary high-speed Wi-Fi or make use of the dedicated work desk for any business
                  needs. The opulent en-suite bathroom features premium fixtures, a relaxing rain shower, and a deep
                  soaking bathtub, providing a sanctuary for ultimate relaxation. Our Deluxe Room promises an
                  unforgettable experience where luxury and comfort converge, ensuring an exceptional stay for the most
                  discerning guests.</p>
              </div>
            </div>
            <script>
              function showDetails_deluxe() {
                document.getElementById("myModal3").style.display = "block";
              }

              function hideDetails_deluxe() {
                document.getElementById("myModal3").style.display = "none";
              }
            </script>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
      </div>
    </div>
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
        <img src="images/facilities/aircond.svg" width="80px">
        <h5 class="mt-3">Aircond</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/24hours.svg" width="80px">
        <h5 class="mt-3">24-hour Room Service</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/bed.svg" width="80px">
        <h5 class="mt-3">Fluffy Bed</h5>
      </div>
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
              <img src="images/testimonials/sarah.jpg">
            </div>
            <h6 class="m-0 ms-2"> Sarah</h6>
          </div>
          <p>
            My stay at UUM Hotel was an absolute delight! The serene surroundings, impeccable service, and luxurious
            accommodations exceeded my expectations. The staff went above and beyond to ensure my comfort, and the
            dining experience was exquisite. I highly recommend UUM Hotel to anyone seeking a truly exceptional and
            rejuvenating getaway. </p>
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
              <img src="images/testimonials/alban.jpg">
            </div>
            <h6 class="m-0 ms-2">Alban</h6>
          </div>
          <p>
            From the moment I stepped into UUM Hotel, I was captivated by its elegant ambiance and attention to detail.
            The rooms were beautifully appointed, offering stunning views of the surrounding nature. The staff's warmth
            and hospitality made me feel right at home. I couldn't have asked for a more perfect escape.
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
              <img src="images/testimonials/amanda.jpg">
            </div>
            <h6 class="m-0 ms-2">Amanda</h6>
          </div>
          <p>
            My family and I had an unforgettable stay at UUM Hotel. The facilities were top-notch, catering to both
            relaxation and entertainment. The kids loved the pool, and we indulged in rejuvenating spa treatments. The
            staff was incredibly friendly and accommodating, making our time at UUM Hotel truly special. We can't wait
            to come back!
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
  </div>

  <!-- REACH US -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg=8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5761660877606!2d100.50710081160244!3d6.44842292400219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304cae152c08f777%3A0x76d78a9b0a4b933d!2sUniversiti%20Utara%20Malaysia!5e0!3m2!1sen!2smy!4v1686806921744!5m2!1sen!2smy"
          loading="lazy"></iframe>
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
          <a href="https://twitter.com/uumnews?lang=en" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter"></i> Twitter
            </span>
          </a>
          <br>
          <a href="https://www.facebook.com/universitiutaramalaysia/?locale=ms_MY" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook"></i> Facebook
            </span>
          </a>
          <br>
          <a href="https://www.instagram.com/uumofficial/?hl=en" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram"></i> Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php require('footer.php'); ?>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
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
      breakpoint: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }
    });
  </script>
</body>

</html>