<?php

function showPagination($current, $total) {
?>
    <div class="pagination"> 
            <ul>
<?php
        for ($i = 1; $i <= $total; ++$i) {
        if ($i == $current) {
             echo '<li class="active"><a href="#">'. $i .'</a></li>';
        } else {
             echo '<li><a href="?page='. $i .'">'. $i .'</a></li>';
        }
}
?>
    </ul>
</div>
<?php
}
?>
