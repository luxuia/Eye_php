<?php
    $leftMain = array('Who_am_I', 'Info');
?>

<ul> 
<?php
    
    foreach($leftMain as $lable) {
        echo '<p class="leftMain" id="'.$lable.'">'.$lable.'</p>';
    }
?>
</ul>
