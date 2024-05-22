<?php include "include/header.php"; ?>
  <?php
$servername = "127.0.0.1:3306";
$username = "u496524825_lets";
$password = "Ajay@1234aum";
$dbname = "u496524825_lets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
             
if (isset($_GET['id'])) {
$id = $_GET['id'];
}
      $sql = "SELECT `id`, `tittle`, `keyword`, `description`, `filename`, `details` FROM `seo` WHERE id='$id'";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $row['description'];?>">
    <meta name="keywords" content="<?php echo $row['keyword'];?>">
    <meta name="author" content="Manmil Exim Private Limited">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="<?php echo $row['tittle'];?>">
    <meta property="og:description" content="description">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://manmileximpvtltd.com">
    <meta property="og:image" content="seo/upload_directory1/<?php echo $row['filename'];?>">
    <meta property="og:site_name" content="Manmil Exim Private Limited">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $row['tittle'];?>">
    <meta name="twitter:description" content="<?php echo $row['description'];?>">
    <meta name="twitter:image" content="seo/upload_directory1/<?php echo $row['filename'];?>">
    <title><?php echo $row['tittle'];?></title>

  </head>
<br><br>
<section id="detail_home p-5">
 <div class="container">
  <div class="row">
   <div class="detail_home clearfix">
	<div class="col-sm-6">
	 <div class="detail_home_right clearfix">
	  <h1><?php echo $row['tittle'];?></h1>
	 <?php echo $row['details'];?>
	 </div>
	</div>
	<div class="col-sm-6 p-5">
	 <div class="detail_home_left clearfix">
	   <div class="grid clearfix">
					<figure class="effect-jazz">
						<img   src="seo/<?php echo $row['filename'];?>" alt="<?php echo $row['tittle'];?>"/>
						<figcaption>
						
						</figcaption>			
		  </figure>
					
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

 <?php
   } }
       ?>
<?php include "include/footer.php"; ?>
