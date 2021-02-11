  <?php 

$dossier = 'pages/';
$pages = scandir($dossier);

if (isset($_GET['page']) && !empty($_GET['page'])) {
   if (in_array($_GET['page'].'.php',$pages)) {
      $page = $_GET['page'];
   } else {
      $page = "error";
   }
  
} else {
   $page = "accueil";
}

  ?>

<!Doctype html>
<html lang="zxx">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sapco</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- google fonts -->
 <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  
    

 </head>

<body>
 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/theme-change.js"></script>
  <script src="js/owl.carousel.js"></script>
  
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
  
  <!--//MENU-JS-->

  <script src="js/bootstrap.min.js"></script>

    <?php
    
   include "general/header.php";

        
   include 'Pages/' . $page . '.php';
       

   include "general/footer.php";
 
   ?>

</body>

</html>