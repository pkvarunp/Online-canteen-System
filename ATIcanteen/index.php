<!DOCTYPE html>
<html>
<head>
<title>BAD/IT/2020/P/0006</title>    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<!-- navbar section -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<b><a class="navbar-brand" href="#"><i class="fas fa-hamburger">ATI canteen badulla...</i></a></b>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#about">About</a>
  </li>
  <!-- Dropdown -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Menu</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#product">breakfast</a>
      <a class="dropdown-item" href="#product">lunch </a>
      <a class="dropdown-item" href="#product"> fresh juice</a>
    </div>
  </li>
 
</ul>
</div>
<div class="text-left">

<a href="User/userReg.php"><button type="button" class="btn btn-warning">Register</button></a>
</div>
</nav>
  <br>
  <!-- header Section -->
<div class="hero-image">

<div class="hero-text">

  <h1 style="font-size:50px">ATI CANTEEN BADULLA</h1>
  <p>Sdent's Happieness is Our Aim !</p>
  <a href="User/login.php"> <button >&nbsp;Login&nbsp;</button></a>

</div>
</div>
<!-- about Section -->
<section id="about">
<b><h2 class="pt-5 text-center ">About Us</h2><hr class="w-25 mx-auto pt-3"></b>
<div class="container pb-3">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-12 text-center pb-3">
    <h5>Welcome to the Advance Technological Institute Canteen in Badulla! We take pride in serving the best of both worlds - mouthwatering meals and cutting-edge technology. Our canteen offers a seamless fusion of culinary excellence and modern conveniences. With state-of-the-art cooking equipment and innovative food preparation techniques, we guarantee a delightful dining experience for our students, faculty, and staff. Our diverse menu features a wide array of nutritious and delectable options, catering to various dietary preferences. Whether you're in the mood for traditional favorites or trendy culinary creations, our dedicated team ensures every dish is prepared to perfection. Join us at the Advance Technological Institute Canteen and indulge in a gastronomic journey infused with technological brilliance.</h5>
    
      </div>
      <div class="col-lg-5 col-md-5 col-12">
      <img src="./User/upload/ati.jpg" alt="Image1" class="img-fluid card-img-top">
      </div>
  </div>
</div> 
</section >
<!-- Product section -->
<section id="product">
<b><h2 class="pt-5 text-center ">Our Product</h2><hr class="w-25 mx-auto pt-3"></b>
  <section>
  <div class="container">
      <div class="row text-center py-5">
      <?php
          include('connection.php');
          $sql = "SELECT * FROM `menu` ORDER BY name LIMIT 8";
          $result= $conn->query($sql);
          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
              echo '<div class="col-md-3 col-sm-6 my-3 my-md-0 extra-div ">
                    <form action="" method="post">
                    <div class="card shadow mt-3">
                    <div>
                    <img src="User/'.$row["image"].'" alt="Image1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                    <h2 class="card-title">'.$row["name"].'</h2>
                    <h2>
                       
                        <span class="price">Rs..'.$row["price"].'</span>
                    </h2> 
                    <a href="User\order.php" class="btn btn-warning">Purchase</a>
                    </div>
                    </div>
                    </form>
                </div> ';
              }
          }
      ?>
      </div>
</div>
</section>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script> 
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
  $('.count').counterUp({
  delay:10,
  time:3000
})
// for scrolltop
mybutton =document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction(){
  // when the user scroll down 20px from the top of the document ,show the button
  if(document.body.scrollTop >20 || document.documentElement.scrollTop > 20){
    mybutton.style.display ="block";

  }else{
    mybutton.style.display ="none";

  }
}
// when the user click on the button ,scroll the top 
function topFunction(){
  document.body.scrollTop = 0;// for safari
  document.documentElement.scrollTop = 0;// for chrome, firefox and opera
}

</script>
</body>
</html>
