<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="css/stylecontactpage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css> 
</head>

<body>
<section id="header">
        <a href="#"><img src="img/logo1.png" class="logo" alt=""> </a>

        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="productpage.php">Products</a></li>
                <li><a href="aboutpage.php">About</a></li>
                <li><a class="active" href="contactpage.php">Contact</a></li>
                <li><a href="Customer_tbl.php">Customer List</a></li>
                <li><a href=""><i class="fas fa-shopping-bag"></i></a></li>   
                </ul>
                </div>
    </section>
<section class="contact">
        <div class="content">
            <h2>Get In Touch</h2>
            <br>
            <p>Any Question Or Remark? Just Write Us A Message!</p>
        </div>
 
            <div class="container1">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Valley Golf,<br>Cainta, Rizal<br>1900</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>(+63) 9611288290</p>

                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email Address</h3>
                            <p>Dazzlemetints.gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>

                      <div class="inputBox">
                                <input type="text" name="" required="required">
                                <span>Email Address</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your message...</span>
                    </div>
                    <div class = "inputBox">
                        <button type="reset" class="btn-primary btn-info btn-lg" data-toggle="modal" data-target="#myModal"><p>Submit</p></button>  

                        
                            <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <h4 class="res">Thank you! 
            <br>We've received your message and will respond to you within 24 hours.<br></h4>
       
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn" data-dismiss="modal" >Close</button>
        </div>
      </div>
      
    </div>
  </div>
              </div>
                        
            </div>
                    </form>
                </div>
            </div>
      
        </section>

<!-- footer -->
<footer>
    <div class="footer-content">
        <h3>ONLINE SHOP</h3>
        <p>DazzleMe Tints is your go-to destination for all your lip tint needs. As an exclusive shop dedicated solely to liptints, we specialize in providing a wide range of high-quality, vibrant, and long-lasting lip tints that will leave you feeling confident and beautiful.</p>
        <ul class="socials">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
        </ul>   
</div>
<div class="footer-bottom">
    <p> copyright &copy;2023 DazzleMeTints. design by <span>Alyssa Inocencio</span></p>
</div>
</footer>

</body>
</html>