<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berry Macaroon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="css/styleproductpage.css">  
</head>

<body>
<section id="header">
        <a href="#"><img src="img/logo1.png" class="logo" alt=""> </a>

        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a class="active" href="productpage.php">Products</a></li>
                <li><a href="aboutpage.php">About</a></li>
                <li><a href="contactpage.php">Contact</a></li>
                <li><a href="Customer_tbl.php">Customer List</a></li>
                <li><a href=""><i class="fas fa-shopping-bag"></i></a></li>   
                </ul>
                </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/Berry.png" width="100%" id="MainImg"alt="">
    
            <div class="small-img-group">
                <div class="small-img-col">
                <img src="img/Berry.png" width="100%" id="small-img"alt="">
                </div>
                <div class="small-img-col">
                <img src="img/Ber.png" width="100%" id="small-img"alt="">
                </div>
                <div class="small-img-col">
                <img src="img/vegan.png" width="100%" id="small-img"alt="">
                </div>
                <div class="small-img-col">
                <img src="img/use.png" width="100%" id="small-img"alt="">
                </div>
            </div>
    
        </div>
    <div class="single-pro-details">
        <h6>Home/Liptints</h6>
        <h1>DazzleMeTint Liptint</h1>
        <h2>₱100.00</h2>
       <label for="color-select">Choose a color:</label>
        <select id="mySelect" onchange="redirectToPage(this)">
            <option>#38481 Berry Macaroon</option>
            <option value="productpageS.php">#15256 Sugar Plum</option>
            <option value="productpageR.php">#43360 Red Velvet</option>
            <option value="productpageP.php">#26316 Peachy Smoothie</option>
            <option value="productpageC.php">#54669 Choco Tart</option>
        </select>
        <input type="number" value="1">
        <button>Add To Cart</button>
        <h4>Product Details</h4>
        <span>Weight: about 20g <br>Shelf life: 3 years<br>Ingredients:</span>
        <h3>DIMETHICONE/VINYL DIMETHICONE CROSSPOLYMER,CYCLOPENTASILOXANE,DIMETHICONE,<br> PHENYL TRIMETHICONE, BUTYLENE GLYCOL,LAURYL PEG/PPG-18/18 METHICONE, ACRYLATES COPOLYMER,TRIETHANOLAMINE,CI 15985,CI 15510,CI 16255,TOCOPHERYL ACETATE</h3>
        <h5>Experience weightless and moisturizing perfection with our revolutionary lip tint. This hydro-matte formula delivers a comfortable and lightweight feel, while ensuring a matte finish. It's designed to stay put without transferring onto face masks or food, making it perfect for all-day wear. Our lip tint effortlessly blends onto the lips, providing a natural stained effect that enhances your lip line or can be applied all over. Enjoy the benefits of high moisture and nourishment, while maintaining a matte look. Our lip tint has undergone rigorous testing to prevent smudging, even when wearing a mask. With a watery texture and easy application, it's a must-have addition to your makeup collection. Elevate your lip game and embrace long-lasting, moisturizing matte perfection.<h1>
    </div>
</section>

<script>
    var MainImg = document.getElementById("MainImg");
    var smallImg = document.getElementsByClassName("small-img-col");

    smallImg[0].onclick = function(){
        MainImg.src = smallImg[0].querySelector("img").src;
    }
    smallImg[1].onclick = function(){
        MainImg.src = smallImg[1].querySelector("img").src;
    }
    smallImg[2].onclick = function(){
        MainImg.src = smallImg[2].querySelector("img").src;
    }
    smallImg[3].onclick = function(){
        MainImg.src = smallImg[3].querySelector("img").src;
    }
</script>

<script>
  function redirectToPage(selectElement) {
    var selectedValue = selectElement.value;
    if (selectedValue !== "") {
      window.location.href = selectedValue;
    }
  }
</script>

</body>
</html>