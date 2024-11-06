<!DOCTYPE html>
<head>
<title>Adding Customer Table</title>
<link rel="stylesheet" href="css/stylecustomer.css">

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
   
</head>


<?php
    include_once("connections/connection_customer.php");
    $con = connection_customer();
    if(isset($_POST['submit'])){
     $fullname = $_POST['customer_fullname'];
     $address = $_POST['customer_address'];
     $contact = $_POST['customer_contact'];
     $email = $_POST['customer_email']; 
     $sql = "INSERT INTO `customer_tbl`(`customer_fullname`, `customer_address`, `customer_contact`, `customer_email`) VALUES ('$fullname', '$address', '$contact', '$email')";

     $con->query($sql) or die($con->error);
    
         if ($con->affected_rows > 0) {
        echo "<div class='message-box'>
        <span class='btn-close'>&times;</span>
        <h2>Record added successfully. Check the listing page</h2>
        <div class='line'></div>
        <button class='btn-ok' onclick='window.location=\"Customer_tbl.php\"'>OK</button>
        </div>";
    } else {
        echo "<div class='message-box'>
        <h2>Error adding record: " . $con->error . "</h2>
        <div class='line'></div>
        <button class='btn-ok' onclick='window.history.back()'>OK</button>
        </div>";
    }
}
?>
 

<body>
<section id="header" class="first">
        <a href="#"><img src="img/logo1.png" class="logo" alt=""> </a>

        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="Customer_tbl.php">Customer List</a></li>
                <li><a class="active" href="addcustomer.php">Adding Page</a></li>
                <li><a href="update.php">Edit Page</a></li>
                <li><a href=""><i class="fas fa-shopping-bag"></i></a></li>   
                </ul>
                </div>
    </section>

<h1 class="addtitle">Add A Customer Record</h1>
    <form method="post" class="add-form">
        
         <label> Fullname</label>
         <input type="text" name="customer_fullname" id="fullname">
 
         <label> Address</label>
         <input type="text" name="customer_address" id="address">

        <label>Contact No.</label>
        <input type="text" name="customer_contact" id="contact">
        
        <label>Email</label>
        <input type="text" name="customer_email" id="email">


         <input type="submit" name="submit" value="Submit Form" />
    </form>

</body>
</html>