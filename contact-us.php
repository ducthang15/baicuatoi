<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="vi">

  <head>
  <link rel="shortcut icon" href="favicon.ico" type="image/png">
        <link rel="apple-touch-icon" href="favicon.ico">
        <meta name="description" content="Liên lạc">  
        <meta name="keywords" content="News, trending, media, magazine">
        <meta property="og:url" content="#">
        <meta property="og:image" content="#">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="author" content="VietNamNews@gmail.com" >
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="style.css">
        <meta name="msapplication-navbutton-color" content="#ffffff">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="VietNamNews">

    <title>UNLIM | Liên lạc</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/modern-business.css" rel="stylesheet"> -->

  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">Liên lạc</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>

<!-- Sidebar Widgets Column -->
 <?php include('includes/sidebar3.php');?>
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
