<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css file link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <!-- font awesome sdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- custom css file link -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- header secton starts -->

<section class="header">


<a href="home.php" class="logo">travel.</a>

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->


<div class="heading" style="background:url(images/headng-bg-1.jpg) no-repeat">
    <h1>Book now</h1>
</div>

<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">Book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="innputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="innputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="innputBox">
            <span>Phone :</span>
            <input type="number" placeholder="enter your number" name="phonee">
        </div>
        <div class="innputBox">
            <span>Address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="innputBox">
            <span>Where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="innputBox">
            <span>How many :</span>
            <input type="number" placeholder="number of  guests" name="guests">
        </div>
        <div class="innputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrivals">
        </div>
        <div class="innputBox">
            <span>Leaving :</span>
            <input type="date" name="Leaving">
        </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>











<!-- swiper js file link -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>


<!-- custom js file link -->
 <script> strc="js/main.js"</script>
</body>
</html>