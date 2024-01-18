<!DOCTYPE html>
<html>

<head>
    <title>Payment Page</title>
    <style>
        /* Add your CSS styles for the payment page here */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-form-container {
            display: flex;
            justify-content: space-between;
            width: 800px;
            /* Set the desired width */
        }

        .payment-form {
            flex: 0 0 48%;
            /* Adjust the width as needed */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .payment-form h2 {
            text-align: center;
        }

        .payment-form label {
            display: block;
            margin-bottom: 10px;
        }

        .payment-form input[type="text"],
        .payment-form input[type="email"],
        .payment-form input[type="file"],
        .payment-form select {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .payment-form textarea {
            width: 100%;
            height: 100px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .payment-form button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .payment-form:not(:last-child) {
            margin-right: 20px;
            /* Adjust the spacing between forms */
        }

        .no-back-button {
            display: none;
        }
    </style>
    <script>
        function validateForm() {
            var paymentEvidence = document.getElementById("payment_evidence");

            if (paymentEvidence.files.length === 0) {
                alert("Please upload the payment evidence.");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="payment-form-container">
        <div class="payment-form">
            <p>Name: Group 6 STIW3024</p>
            <p>Bank Islam: </p>
            <p>123412341234</p>
            <p>Qr Code:</p>
            <img src="images/bank.jpg" alt="Bank Image" style="width: 200px; height: auto;">
        </div>

        <div class="payment-form">
            <h2>Payment Page</h2>
            <form action="invoice.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="room_type">Card Type:</label>
                <select id="room_type" name="room_type" required>
                    <option value="">Select Room</option>
                    <option value="1">single room</option>
                    <option value="2">double room</option>
                    <option value="3">deluxe room</option>
                    <option value="4">family room</option>
                </select>

                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" required>

                <label for="expiry_date">Expiry Date:</label>
                <input type="text" id="expiry_date" name="expiry_date" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>

                <label for="payment_evidence">Payment Evidence (In Picture Form):</label>
                <input type="file" id="payment_evidence" name="payment_evidence" accept="image/*" required>

                <button type="submit">Submit Payment</button>
            </form>
        </div>
    </div>
</body>

</html>