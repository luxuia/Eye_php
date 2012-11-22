<?php
$headLables = array('Main'=>'index.php', 
                    'Search'=>'search.php',
                    'UpLoad'=>'upload.php',
                    'DownLoad'=>'download.php',
                    'Communicate'=>'communicate.php');
?>


<ul id="haedLable" class="lable">
<?php
foreach ($headLables as $lable => $page) {
  echo '<li class="hlable"> <a href='. $page .'>'. $lable .'</a></li>';      
}
?>
</ul>
