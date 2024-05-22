<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://germaniumtechnologies.in/demo/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://germaniumtechnologies.in/demo/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://germaniumtechnologies.in/demo/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://germaniumtechnologies.in/demo/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="https://germaniumtechnologies.in/demo/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="https://germaniumtechnologies.in/demo/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://germaniumtechnologies.in/demo/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>        
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
         <main id="main" class="main">

    
    <section class="section card">
      <div class="row card-body">
          
<?php
$servername = "127.0.0.1:3306";
$username = "u496524825_manmil";
$password = "manmilM@123";
$dbname = "u496524825_manmil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["upload"])) {
    // Handle the first file upload
    $uploadfile1 = $_FILES["uploadfile"]["name"];
    $target_dir1 = "upload_directory1/"; // Change this to your desired directory
    $target_file1 = $target_dir1 . basename($uploadfile1);

    if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file1)) {
        echo "File 1 uploaded successfully.";
    } else {
        echo "Error uploading File 1.";
    }

   
    
     $heading =$_POST["heading"];
     $short_description =$_POST["short_description"];
     $details =$_POST["details"];
      $keywords =$_POST["keywords"];
    
   
$sql = "INSERT INTO `seo`( `tittle`, `keyword`, `description`, `filename`, `details`) VALUES ('$heading','$keywords','$short_description','$target_file1','$details')";

mysqli_query($conn, $sql);

    
    
    
}




?>
  
      
          <form class="row g-3 p-5" method="POST"  enctype="multipart/form-data" >
                <div class="col-md-12">
                  <input type="text" class="form-control" name ="heading" placeholder="Page tittle" >
                </div>
                 <div class="col-md-12">
                  <input type="text" class="form-control" name ="keywords" placeholder="Keywords" >
                </div>
                 <div class="col-md-12">
                     <textarea class="form-control" placeholder="Product description" name="short_description" id="floatingTextarea" style="height: 100px;"></textarea>
                </div>
                
                        <div class="col-lg-6">
                     
 
                        <img id="uploadPreview"  src="image/9k=.jpg" style="width: 100%; height: 500px;" />
                        <input id="uploadImage" type="file"  class="form-control" name="uploadfile" name="myPhoto" onchange="PreviewImage();" />
                        <br><br>
                                     
        </div>

        <div class="col-lg-6">

             <div class="col-md-12">
                      <textarea id="summernote" name="details"></textarea>
                </div>
                
        </div>

                 
         <div class="text-center">
                  <button   type="upload" value="upload" name="upload" class="btn btn-primary">Save it</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
         </form>
               
    </section>

  </main><!-- End #main -->
<script>
    $('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 500,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ],
      });
</script>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
        <?php include "footer.php"; ?>
