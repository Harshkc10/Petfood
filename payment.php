<?php
include "connect.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Payment Gateway</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9942a;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            margin-top: 50px;
        }

        .container h2 {
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>PETOO</h2>
        <form id="paymentForm" method="POST">
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>

            <label for="cardExpiry">Expiration Date</label>
            <input type="text" id="cardExpiry" name="cardExpiry" placeholder="MM/YY" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352" required>

            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter amount" required>

            <input type="submit" name="pay" value="Pay Now">
        </form>
    </div>

</body>

</html>

<?php
if (isset($_POST["pay"])) {
    $cardNumber = $_POST["cardNumber"];
    $cardExpiry = $_POST["cardExpiry"];
    $cvv = $_POST["cvv"];
    $amount = $_POST["amount"];

    $querry = "INSERT INTO `payments`(`cardNumber`, `cardExpiry`, `cvv`,`amount`) VALUES ('$cardNumber','$cardExpiry','$cvv','$amount')";
    $result = mysqli_query($conn, $querry);
    if ($result) {
        echo "<script>
                alert('Payment successful!');
                location.href = 'http://localhost/TE_IT/index.php';
                </script>";
    } else {
        echo "<script>
                alert('something went wrong');
                </script>";
    }
}
?>