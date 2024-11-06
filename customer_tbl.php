<!DOCTYPE html>	
<html>
<head>
    <title>Customer Table</title>
    <link rel="stylesheet" href="css/stylecustomer.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

</head>

<body>
<section id="header">
        <a href="#"><img src="img/logo1.png" class="logo" alt=""> </a>

        <div>
            <ul id="navbar" class="no">
                <li><a href="homepage.php">Home</a></li>
                <li><a class="active"href="Customer_tbl.php">Customer List</a></li>
                <li><a href="addcustomer.php">Adding Page</a></li>
                <li><a href="update.php">Edit Page</a></li>
                <li><a href=""><i class="fas fa-shopping-bag"></i></a></li>   
                </ul>
                </div>
    </section>
<header>           
</header>

<?php 
include_once("connections/connection_customer.php");
$con = connection_customer();

//data retreival     /*table name here*/
$sql = "SELECT * FROM customer_tbl";     
$customers= $con -> query($sql) or die ($con -> error);
$row = $customers -> fetch_assoc();                                       
//print_r($row); //array printing of row content. Check content for each row


echo "<center><h1 class='customertitle'>Customer Table</h1></center>";
echo "<center><a href=addcustomer.php class='over'>Add New<span> &#43;</span>
</a></center>";
echo "<center><table class='tbl'>";
echo "<tr>
<th>ID</th>
<th>Fullname</th>
<th>Address</th>
<th>Contact</th>
<th>Email</th>
<th>Action</th>
</tr>";

do {
echo "<tr>"; /*field name here*/
echo "<td>" . $row['customer_id'] . "</td>";
echo "<td>" . $row['customer_fullname'] . "</td>";
echo "<td>" . $row['customer_address'] . "</td>";
echo "<td>" . $row['customer_contact'] . "</td>";
echo "<td>" . $row['customer_email'] . "</td>";
echo "<td><a class='btn btn-info' href='update.php?customer_id=" . $row['customer_id'] . "'>Edit</a>&nbsp;<a class='btn btn-danger' href='delete.php?id=" . $row['customer_id'] . "'>Delete</a></td>";
echo "</tr>";
} while($row = $customers -> fetch_assoc());
?> 


</body>
</html>