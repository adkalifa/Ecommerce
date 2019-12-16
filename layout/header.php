<html>
<?php 
  session_start();
?>
<head>
    <title>E-Commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/assets/css/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/fontawesome/brands.css">
    <link rel="stylesheet" href="/assets/css/fontawesome/regular.css">
    <link rel="stylesheet" href="/assets/css/fontawesome/solid.css">



    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <div class="bg-dark navbar-dark">
        <div class="container">
            <nav class="navbar navbar-expand-md ">
                <a class="navbar-brand" href="#">Ecommerce</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex navbar-collapse input_left justify-content-center">
                    <input type="text" placeholder="Search..">
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <?php 
                        if(!isset($_SESSION['user_id'])){
                           echo "<li class='nav-item'>
                                  <a class='nav-link' href='login.php'>Login & Sign Up</a>
                                </li>";
                        }
                          else {
                            echo "<li class='nav-item'>
                                    <a class='nav-link' href='logout.php'>Logout</a>
                                  </li>";
                          }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="navbar">
  <a href="#home">Mobile</a>
  <div class="subnav">
    <button class="subnavbtn">TVs & Appliances <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">Bring</a>
      <a href="#deliver">Deliver</a>
      <a href="#package">Package</a>
      <a href="#express">Express</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Men <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Women <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Home & Furniture<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Home & Furniture<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Sports, Books & More<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Grocery<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Offer Zone<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
</div>
</body>
<script>
    function pagechecking(){
      if()
    }
</script>
</html>
