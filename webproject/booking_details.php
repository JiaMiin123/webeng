<?php
require('dbconnect.php');
require('user.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }

        .invoice-card {
            border: 1px solid #e6e6e6;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .invoice-card h4 {
            margin-bottom: 10px;
        }

        .invoice-card p {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Booking Details</h1>
        <?php
        // Prepare the SQL statement with a placeholder for user email
        $sql = "SELECT * FROM invoice WHERE useremail = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind the user email parameter
            $stmt->bind_param("s", $user['email']); // Assuming $user['email'] contains the user's email
        
            // Execute the prepared statement
            $stmt->execute();

            // Get the result set
            $result = $stmt->get_result();

            // Check if any rows are returned
            if ($result->num_rows > 0) {
                // Output data for each row
                while ($row = $result->fetch_assoc()) {
                    // Access the data from each row
                    $invoiceId = $row["invoiceid"];
                    $customerName = $row["username"];
                    $totalAmount = $row["total"];
                    $dateInvoice = $row["invoicedate"];
                    ?>

                    <div class="invoice-card">
                        <h4>Invoice ID:
                            <?php echo $invoiceId; ?>
                        </h4>
                        <p>Customer Name:
                            <?php echo $customerName; ?>
                        </p>
                        <p>Total Amount:
                            <?php echo $totalAmount; ?>
                        </p>
                        <p>Date Booked:
                            <?php echo $dateInvoice; ?>
                        </p>
                        <p>If you wish to cancel the booking, kindly call our office number: +6049284000</p>
                        <a href="refund.php?invoiceId=<?php echo $invoiceId; ?>" class="btn btn-danger">Refund</a>
                    </div>


                    <?php
                }
            } else {
                echo "No invoices found.";
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "Error in preparing the SQL statement.";
        }

        // Close the database connection
        $conn->close();
        ?>

        <a href="profile.php" class="btn btn-primary">Back</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>