<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>EyeImage Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Luxuia">

    <!-- Le styles -->
   <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
        .footer {margin: 0 auto;
            padding: 50px 0 25px 0;
            text-align: center;
            margin-top:30px;
        }
        img.eye {
            width:20%;
            height:auto;
        }
    </style>
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

  <body>

    <div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./main_files/main.php">EyeImage DataBase</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="./main_files/main.php" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="./main_files/main.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <form class="navbar-search pull-left action"> 
                <input type="text" class="search-query span2" placeholder="Search">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active">
                <a href="#">All Pictures</a>
              </li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
              <li><a href="./main_files/main.php">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
            <?php
                Include("./protect/showpictures.php");
            ?>
        </div>
      <hr>

    </div><!--/.fluid-container-->
    <div class="footer">
        <p>Copyright 2012 Luxuia&&Zhaohui</p> 
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./main_files/jquery.js"></script>
    <script src="./main_files/bootstrap-transition.js"></script>
    <script src="./main_files/bootstrap-alert.js"></script>
    <script src="./main_files/bootstrap-modal.js"></script>
    <script src="./main_files/bootstrap-dropdown.js"></script>
    <script src="./main_files/bootstrap-scrollspy.js"></script>
    <script src="./main_files/bootstrap-tab.js"></script>
    <script src="./main_files/bootstrap-tooltip.js"></script>
    <script src="./main_files/bootstrap-popover.js"></script>
    <script src="./main_files/bootstrap-button.js"></script>
    <script src="./main_files/bootstrap-collapse.js"></script>
    <script src="./main_files/bootstrap-carousel.js"></script>
    <script src="./main_files/bootstrap-typeahead.js"></script>

  
    <span id="sfButtons"></span>
    </body>
</html>
