<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HBS - ABOUT</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <?php require('links.php'); ?>
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }

        .swiper-slide .image-container {
            width: 100%;
            padding-bottom: 100%;
            /* Maintain 1:1 aspect ratio */
            position: relative;
            overflow: hidden;
        }

        .swiper-slide .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Maintain aspect ratio and cover the container */
        }
    </style>
</head>

<body class="bg-light">

    <?php require('header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bd-dark"></div>
        <p class="text-center mt-3">
            Welcome to UUM Hotel, where luxury meets tranquility, creating an unforgettable escape nestled in
            breathtaking natural surroundings. Here, every moment is infused with elegance, comfort, and impeccable
            service, ensuring a remarkable stay for every discerning traveler.
            <br>
            <br>
            Step into our stunning lobby, adorned with exquisite contemporary designs, and feel an immediate sense of
            sophistication and warmth. As you explore the hotel, you'll discover a seamless blend of modern aesthetics
            and traditional charm, creating an ambiance that is both inviting and awe-inspiring.
            <br>
            <br>

        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-mb-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Guest Room and suites</h3>
                <p>
                    Our guest rooms and suites are meticulously designed to provide the utmost comfort and relaxation.
                    With
                    plush furnishings, soothing color palettes, and panoramic views of the lush landscapes, each
                    accommodation
                    is a haven of tranquility, allowing you to unwind and rejuvenate in style.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/1.png" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/facilities/bed.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/review.svg" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 CLASS="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="row">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <div class="row">
                            <div class="col">
                                <div class="image-container">
                                    <img src="images/about/team/lau.jpg" alt="Lau Jia Min" class="w-100">
                                </div>
                                <h5 class="mt-2">Operations Manager</h5>
                                <h3 class="mt-2">Lau Jia Min 279620</h3>
                            </div>
                            <div class="col">
                                <div class="image-container">
                                    <img src="images/about/team/chong.jpg" alt="Chong Ching Wei" class="w-100">
                                </div>
                                <h5 class="mt-2">Housekeeping Manager</h5>
                                <h3 class="mt-2">Chong Ching Wei 278171</h3>
                            </div>
                            <div class="col">
                                <div class="image-container">
                                    <img src="images/about/team/ng.jpg" alt="Ng Pei Nyuk" class="w-100">
                                </div>
                                <h5 class="mt-2">Revenue Manager</h5>
                                <h3 class="mt-2">Ng Pei Nyuk 277209</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>



    <?php require('footer.php'); ?>

    <script src="https//unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
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
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>

</body>

</html>