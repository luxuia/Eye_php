<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <title>EyeImages DataBase</title>
    <link rel="stylesheet" type="text/css" href="./css/normal.css">
    <script type="text/javascript" src="./js/jquery.js"> </script>
    <script type="text/javascript"> 
    $(document).ready(function(){
        $("#Who_am_I").click(function(){
            $(".content").load('./protect/WaI.php');
        })
        $("#Info").click(function(){
            $(".content").load('./protect/contentMain.php') ;       
        })
    });
    </script>
</head>
<body>

<div class="container">

<div class="header">
<!--<h1 class="header">EyeImage DataBase</h1>-->
<?php
    Include('./protect/head.php')
?>

</div>


<div class="left">
<?php
    Include('./protect/leftSearch.php');
?>
</div>

<div class="content">
<?php
    Include('./protect/contentSearch.php');    
?>
</div>

<div class="footer">Copyright 2012 by Luxuia&&Zhaohui Investment.
</div>

</body>
</html>
