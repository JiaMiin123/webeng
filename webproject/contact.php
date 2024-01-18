<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HBS - CONTACT</title>
    <?php require('links.php'); ?>
</head>

<body class="bg-light">

    <?php require('header.php'); ?>

    <script>
        // Function to submit the form using AJAX
        // Function to submit the form using AJAX
        function submitForm() {
            var form = document.getElementById('contact-form');
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'insert_comment.php');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            alert(response.message);
                            form.reset(); // Reset the form
                        } else {
                            alert(response.message);
                        }
                    } else {
                        alert('Error occurred while submitting the form.');
                    }
                }
            };
            xhr.send(formData);
            return false; // Prevent the default form submission
        }

        // Event listener for form submission
        document.getElementById('contact-form').addEventListener('submit', submitForm);


        // Event listener for form submission
        document.getElementById('contact-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission
            submitForm(); // Call the submitForm function
        });
    </script>


    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bd-dark"></div>
        <p class="text-center mt-3">
            Please feel free to reach out to us with any inquiries, feedback, or special requests.<br> Our dedicated
            team is
            ready to address your needs and ensure your experience with us is nothing short of outstanding.
            <br>Don't
            hesitate to get in touch - we're here to make your interaction with us as seamless and enjoyable as
            possible.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5761660877606!2d100.50710081160244!3d6.44842292400219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304cae152c08f777%3A0x76d78a9b0a4b933d!2sUniversiti%20Utara%20Malaysia!5e0!3m2!1sen!2smy!4v1686806921744!5m2!1sen!2smy"
                        loading="lazy"></iframe>

                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/aE44poyo4Q8LQspH7" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> UUM HOTEL, Sintok, Kedah.
                    </a>

                    <h5 class=mt-4>Call us</h5>
                    <a href="tel: +6049284000" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +604-9284000
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: HBS@gamil.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> HBS_customerservice@gmail.com
                    </a>

                    <h5 class=mt-4>Follow us</h5>
                    <a href="https://twitter.com/uumnews?lang=en" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="https://www.facebook.com/universitiutaramalaysia/?locale=ms_MY"
                        class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="https://www.instagram.com/uumofficial/?hl=en" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form id="contact-form" action="insert_comment.php" method="post">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none" name="name">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none" name="email">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none" name="subject">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="1" style="resize: none;"
                                name="message"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>

                    <!-- Display success or error message using PHP -->
                    <?php
                    if (isset($_GET['success'])) {
                        $success = $_GET['success'];
                        echo '<div class="alert alert-success">' . $success . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php require('footer.php'); ?>

</body>

</html>