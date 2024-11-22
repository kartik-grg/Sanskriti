<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retailer Dashboard</title>
    <link rel="stylesheet" href="retailer_dashboard.css">
</head>
<body>

<header>
    <?php include 'header.php'; ?>
</header>

<main class="container">
    <h2>Retailer Dashboard</h2>
    
    <div class="form-container">
        <button class="submit-button">Go To Inventory</button>


        <div class="info">
            <p><strong>Name:</strong>  abcdname </p>
            <p><strong>UserId:</strong> id1234</p>
            <p><strong>GST NO:</strong> XXXXX</p>
        </div>

        <form action="retailer_dashboard_action.php" method="POST">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter Password">

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required placeholder="Enter Phone">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email">

            <h4 id="address">Address</h4>
            <label for="street">Street:</label>
            <input type="text" id="street" name="street" required placeholder="Enter Street">

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required placeholder="Enter City">

            <label for="state">State:</label>
            <input type="text" id="state" name="state" required placeholder="Enter State">

            <label for="pincode">Pincode:</label>
            <input type="text" id="pincode" name="pincode" required placeholder="Enter Pincode">

            <div id="save">
                <button type="submit" class="submit-button">Update</button>
            </div>
        </form>
    </div>
</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>

</body>
</html>
