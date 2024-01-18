<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HBS - ROOMS</title>
  <?php require('links.php'); ?>
  <style>
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
  <?php require('header.php'); ?>

  <script>
    function confirmBooking(roomName) {
      var roomid;

      if (roomName == "Single Room") {
        roomid = 1;
      } else if (roomName == "Double Room") {
        roomid = 2;
      } else if (roomName == "Deluxe Room") {
        roomid = 3;
      } else if (roomName == "Family Room") {
        roomid = 4;
      }

      var confirmation = confirm("Are you sure you want to book " + roomName + "?");

      if (confirmation) {
        // Redirect to the payment page
        window.location.href = "payment_page.php?room=" + encodeURIComponent(roomid);
      }
    }
  </script>





  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bd-dark"></div>
  </div>

  <div class="container">
    <div class="column">  
      <br>

      <div class="col-lg-12 col-md-12 px-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card border-0 shadow">
              <img src="images/1.png" class="card-img-top" alt="Room Image">
              <div class="card-body">
                <h5 class="card-title" name="single_room" id="single_room">Single Room</h5>
                <p class="card-text"> A cozy and comfortable retreat for solo travelers, providing a peaceful haven with
                  a comfortable bed and convenient amenities. </p>
                <a class="btn btn-primary" name="book_button_1" id="book_button_1"
                  onclick="confirmBooking('Single Room')">Book Now</a>
                <a class="btn btn-primary" onclick="showDetails_single()">More
                  Details</a>
              </div>
            </div>
          </div>
          <div id="myModal1" class="modal">
            <div class="modal-content">
              <span class="close" onclick="hideDetails_single()">&times;</span>
              <h2>Details</h2>
              <p>Price: RM90 per night <br><br>Experience the perfect balance of comfort and style in our Double Room at
                UUM Hotel. Designed for
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
            function showDetails_single() {
              document.getElementById("myModal1").style.display = "block";
            }

            function hideDetails_single() {
              document.getElementById("myModal1").style.display = "none";
            }
          </script>
          <div class="col">
            <div class="card border-0 shadow">
              <img src="images/2.png" class="card-img-top" alt="Room Image">
              <div class="card-body">
                <h5 class="card-title">Double Room</h5>
                <p class="card-text"> A cozy and comfortable retreat for solo travelers, providing a peaceful haven with
                  a comfortable bed and convenient amenities.</p>
                <a href="#" class="btn btn-primary" name="book_button_2" id="book_button_2"
                  onclick="confirmBooking('Double Room')">Book Now</a>
                <a class="btn btn-primary" onclick="showDetails_double()">More Details</a>
              </div>
            </div>
          </div>
          <div id="myModal2" class="modal">
            <div class="modal-content">
              <span class="close" onclick="hideDetails_double()">&times;</span>
              <h2>Details</h2>
              <p>Price: RM150 per night <br><br>Experience the perfect balance of comfort and style in our Double Room
                at UUM Hotel. Designed for
                couples or travelers seeking shared accommodation, the room features a spacious and inviting atmosphere.
                Sink into the comfort of a plush double bed, adorned with soft linens and cozy pillows, guaranteeing a
                restful night's sleep. The Double Room boasts modern decor and ample space to relax and unwind after a
                day of exploration. Stay connected with complimentary high-speed Wi-Fi or catch up on work at the
                dedicated work desk. The private en-suite bathroom offers contemporary fixtures and luxurious amenities
                for your convenience and indulgence. Whether you're traveling with a loved one or a friend, our Double
                Room provides the perfect retreat for a memorable stay.</p>
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
          <div class="col">
            <div class="card border-0 shadow">
              <img src="images/3.png" class="card-img-top" alt="Room Image">
              <div class="card-body">
                <h5 class="card-title">Deluxe Room</h5>
                <p class="card-text"> Indulge in luxury and sophistication in this expansive room with a sumptuous
                  king-sized bed, elegant furnishings, and opulent amenities for a truly unforgettable experience. </p>
                <a class="btn btn-primary" name="book_button_3" id="book_button_2"
                  onclick="confirmBooking('Deluce Room')">Book Now</a>
                <a class="btn btn-primary" onclick="showDetails_deluxe()">More Details</a>
              </div>
            </div>
          </div>
          <div id="myModal3" class="modal">
            <div class="modal-content">
              <span class="close" onclick="hideDetails_deluxe()">&times;</span>
              <h2>Details</h2>
              <p>Price: RM200 per night <br><br>Indulge in the epitome of luxury and sophistication in our Deluxe Room
                at UUM Hotel. Designed for
                discerning travelers who seek the finer things in life, the Deluxe Room offers an expansive space filled
                with elegant furnishings and modern comforts. Retreat to a sumptuous king-sized bed adorned with
                high-quality linens, inviting you to sink into a blissful night's sleep. The room boasts a thoughtfully
                designed sitting area, allowing you to unwind and enjoy the tranquil ambiance. Stay connected with
                complimentary high-speed Wi-Fi or make use of the dedicated work desk for any business needs. The
                opulent en-suite bathroom features premium fixtures, a relaxing rain shower, and a deep soaking bathtub,
                providing a sanctuary for ultimate relaxation. Our Deluxe Room promises an unforgettable experience
                where luxury and comfort converge, ensuring an exceptional stay for the most discerning guests.</p>
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
          <div class="col">
            <div class="card border-0 shadow">
              <img src="images/4.png" class="card-img-top" alt="Room Image">
              <div class="card-body">
                <h5 class="card-title">Family Room</h5>
                <p class="card-text">A spacious and welcoming haven for families, offering comfortable beds, ample
                  space, and thoughtful amenities to ensure a memorable stay for everyone.</p>
                <a class="btn btn-primary" name="book_button_4" id="book_button_4"
                  onclick="confirmBooking('Family Room')">Book Now</a>
                <a class="btn btn-primary" onclick="showDetails_family()">More Details</a>
              </div>
            </div>
          </div>
          <div id="myModal4" class="modal">
            <div class="modal-content">
              <span class="close" onclick="hideDetails_family()">&times;</span>
              <h2>Details</h2>
              <p>Price: RM200 per night <br><br>Our Family Room at UUM Hotel is designed to provide a spacious and
                welcoming haven for families
                traveling together. Step into a room that offers ample space for everyone to relax and unwind. The
                Family Room features comfortable beds, ensuring a restful night's sleep for both parents and children.
                The thoughtfully designed layout provides privacy and convenience, with separate sleeping areas or
                interconnected rooms, creating a sense of togetherness while allowing for personal space. Enjoy modern
                amenities, including a flat-screen TV, complimentary Wi-Fi, and a well-equipped en-suite bathroom.
                Whether you're traveling with little ones or teenagers, our Family Room ensures a comfortable and
                enjoyable stay for the whole family, creating cherished memories together. </p>
            </div>
          </div>

          <script>
            function showDetails_family() {
              document.getElementById("myModal4").style.display = "block";
            }

            function hideDetails_family() {
              document.getElementById("myModal4").style.display = "none";
            }
          </script>
        </div>
      </div>
    </div>
  </div>


  <script>
    document.getElementById("availabilityForm").addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent form submission

      // Retrieve form values
      var checkInDate = document.getElementById("checkInDate").value;
      var checkOutDate = document.getElementById("checkOutDate").value;
      var facilities = Array.from(document.querySelectorAll('input[name="facilities"]:checked')).map(function (element) {
        return element.id;
      });
      var adults = document.getElementById("adults").value;
      var children = document.getElementById("children").value;

      // Perform availability check and update the DOM
      checkRoomAvailability(checkInDate, checkOutDate, facilities, adults, children);
    });

    function checkRoomAvailability(checkInDate, checkOutDate, facilities, adults, children) {
      // Perform your availability check here
      // You can use the retrieved values to query a database or perform any other logic to determine available rooms

      // Example logic for generating room cards (replace with your own)
      var roomData = [
        { roomNumber: 1, price: 100, capacity: 2, facilities: ["f1", "f2"] },
        { roomNumber: 2, price: 120, capacity: 3, facilities: ["f1", "f3"] },
        { roomNumber: 3, price: 80, capacity: 2, facilities: ["f2", "f3"] },
      ];

      var filteredRooms = roomData.filter(function (room) {
        // Check if the room matches the user's criteria
        var isAvailable = true;
        if (room.facilities) {
          for (var i = 0; i < facilities.length; i++) {
            if (!room.facilities.includes(facilities[i])) {
              isAvailable = false;
              break;
            }
          }
        }
        return isAvailable && room.capacity >= (parseInt(adults) + parseInt(children));
      });

      var roomCardsContainer = document.getElementById("roomCards");
      roomCardsContainer.innerHTML = ""; // Clear previous room cards

      for (var i = 0; i < filteredRooms.length; i++) {
        var room = filteredRooms[i];

        var cardElement = document.createElement("div");
        cardElement.className = "col-md-4 mb-4";
        cardElement.innerHTML = `
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Room ${room.roomNumber}</h5>
          <p class="card-text">Price: $${room.price}</p>
          <p class="card-text">Capacity: ${room.capacity} ${room.capacity > 1 ? "persons" : "person"}</p>
        </div>
      </div>
      `;

        roomCardsContainer.appendChild(cardElement);
      }
    }
  </script>

  <?php require('footer.php'); ?>


</body>

</html>