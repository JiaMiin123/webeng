<?php
require('dbconnect.php');
require('user.php');

// Retrieve the selected room type from the form
$roomType = $_POST['room_type'];

// Query the database to get the room details based on the selected room type
$sql = "SELECT * FROM `rooms` WHERE `roomid` = '$roomType'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $paymentAmount = $row['price'];
    $room_name = $row['roomname'];
} else {
    // Handle if no payment record is found
    $paymentAmount = 0;
    $room_name = '';
}

// Calculate any additional details or retrieve from your database
$taxAmount = $paymentAmount * 0.1; // Example tax calculation
$totalAmount = $paymentAmount + $taxAmount; // Example total amount calculation
$currency = 'RM'; // Example currency symbol

$username = $user['name']; // Assuming the input field name is 'name'
$useremail = $user['email']; // Generate a random invoice number
$invoicenumber = mt_rand(1000, 9999);

// Get the current date
$currentDate = date('Y-m-d');

// Insert the invoice details into the database
$insertSql = "INSERT INTO `invoice` (`invoiceid`, `username`, `useremail`, `invoicedate`, `roomname`, `price`, `tax`, `total`)
              VALUES ('$invoicenumber','$username','$useremail','$currentDate ', '$room_name', $paymentAmount, $taxAmount, $totalAmount)";

if ($conn->query($insertSql) === TRUE) {
    $invoiceId = $conn->insert_id;
} else {
    echo "Error saving invoice: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .invoice {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .invoice-details h2 {
            font-size: 24px;
            margin: 0;
        }

        .invoice-details h4 {
            margin: 0;
            display: inline;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .invoice-total {
            text-align: right;
        }

        .print-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .print-button button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .back-button a {
            padding: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Invoice HTML structure -->
    <div class="invoice">
        <!-- Invoice details section -->
        <div class="invoice-details">
            <!-- Invoice header -->
            <h2>Invoice #
                <?php echo $invoicenumber ?>
            </h2>
            <p><span style="font-weight: bold;">Name:</span>
                <?php echo $user['name']; ?>
            </p>
            <p><span style="font-weight: bold;">Email:</span>
                <?php echo $user['email']; ?>
            </p>
            <p>Date:
                <?php echo $currentDate; ?>
            </p>
        </div>

        <!-- Invoice content section -->
        <div>
            <p style="display: inline;">This is the invoice for your booking in </p>
            <h4 style="display: inline; margin: 0;">
                <?php echo $room_name ?>
            </h4>
            <p>Thank you for choosing us.</p>
        </div>

        <!-- Invoice table -->
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Payment Amount</td>
                    <td>
                        <?php echo $currency . $paymentAmount; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tax (10%)</td>
                    <td>
                        <?php echo $currency . $taxAmount; ?>
                    </td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>
                        <?php echo $currency . $totalAmount; ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Invoice total -->
        <p class="invoice-total">Total:
            <?php echo $currency . $totalAmount; ?>
        </p>
    </div>

    <!-- Print and Back buttons -->
    <div class="print-button">
        <button onclick="window.print()">Print</button>
    </div>

    <div class="back-button">
        <a href="profile.php">← Back to Profile</a>
    </div>
</body>

</html>