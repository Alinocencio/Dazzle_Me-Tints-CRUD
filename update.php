<!DOCTYPE html>
<html>
<head>
<title>Update Record</title>
<link rel="stylesheet" href="css/stylecustomer.css">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
<?php 

include_once("connections/connection_customer.php");
$con = connection_customer();
if (isset($_POST['update'])) {
    $id = $_POST['customer_id'];
    $fullname = $_POST['customer_fullname'];
    $address = $_POST['customer_address'];
    $contact = $_POST['customer_contact'];
    $email = $_POST['customer_email'];

    $sql = "UPDATE customer_tbl SET `customer_id`=' $id',  `customer_fullname`='$fullname', `customer_address`='$address', `customer_contact`='$contact', `customer_email`='$email' WHERE `customer_id`='$id'";

    $result = $con->query($sql); 
    if ($result == TRUE) {
        echo "<div class='message-box'>
        <span class='btn-close'>&times;</span>
        <h2>Record updated successfully. Check the listing page</h2>
        <div class='line'></div>
        <button class='btn-ok' onclick='window.location=\"Customer_tbl.php\"'>OK</button>
      </div>";
    } else {
        echo "<div class='message-box'>
        <h2>Error: " . $sql . "<br>" . $con->error . "</h2>
        <div class='line'></div>
        <button class='btn-ok' onclick='window.history.back()'>OK</button>
      </div>";
    }
}

if (isset($_GET['customer_id'])) {
    $id = $_GET['customer_id']; 
    $sql = "SELECT * FROM customer_tbl WHERE `customer_id`='$id'";
    $result = $con->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $id = $row['customer_id'];
            $fullname = $row['customer_fullname'];
            $address = $row['customer_address'];
            $contact  = $row['customer_contact'];
            $email = $row['customer_email'];
        } 
    }
}
?>

<section id="header" class="first">
        <a href="#"><img src="img/logo1.png" class="logo" alt=""> </a>

        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="Customer_tbl.php">Customer List</a></li>
                <li><a href="addcustomer.php">Adding Page</a></li>
                <li><a class="active" href="update.php">Edit Page</a></li>
                <li><a href=""><i class="fas fa-shopping-bag"></i></a></li>   
                </ul>
                </div>
    </section>
   
<h1 class="updatetitle">Update Customer Form</h1>
    <form method="post" class="update-form">
        <label> ID</label>
         <input type="text" name="customer_id" value="<?php echo $id; ?>">

         <label> Fullname</label>
         <input type="text" name="customer_fullname"  value="<?php echo $fullname; ?>">
 
         <label> Address</label>
         <input type="text" name="customer_address" value="<?php echo $address; ?>">

        <label>Contact No.</label>
        <input type="text" name="customer_contact" value="<?php echo $contact; ?>">
        
        <label>Email</label>
        <input type="text" name="customer_email" value="<?php echo $email; ?>">

         <input type="submit" name="update" value="Update Form" />
    </form>

    </body>

    </html>



    