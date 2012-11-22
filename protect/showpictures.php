<?php
require("function.inc.php");
$host = "localhost";
$user = "eye";
$pass = "life";
$db   = "eyeImageTest";

$rowsperpage = 9;

$connection = connect();
//$connection = mysqli_connect($host, $user, $pass, $db) 
//    or die("database connect error, $host, $userm, $pass, $db");

$sql = "SELECT COUNT(*) FROM imageURL";
$result = mysqli_query($connection, $sql);
$r = mysqli_fetch_row($result);
$numrows = $r[0];


$totalpages = ceil($numrows / $rowsperpage);

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentpage = (int) $_GET['page'];
} else {
    $currentpage = 1;
}

if ($currentpage > $totalpages) {
    $currentpage = $totalpages;
}

if ($currentpage < 1) {
    $currentpage = 1;
}

$offset = ($currentpage - 1) * $rowsperpage;

$query = "SELECT url FROM imageURL LIMIT $offset, $rowsperpage";
$result= mysqli_query($connection, $query) or die("query execute error");

echo showPagination($currentpage, $totalpages);

?>


<?php
while (true) {
    $flg = 1;
    echo '<ul class="thumbnails">';
        for ($i = 0; $i < 3; ++$i)
            if ($row = mysqli_fetch_row($result)) {
?>
    <li class="span4"> 
        
        <a class="thumbnail href="#">
            <img class="" 
                <?php echo 'src="'. $row[0] .'"'?>
            >
        </a>
        <div>
            <?php
                echo '<h4 class="media-heading">'. $row[0] .'</h4>';
            ?>
        </div>
    </li>
<?php
            } else {
                $flg = 0;    
            }
        echo '</ul>';
        if ($flg == 0)
            break;
    }

echo showPagination($currentpage, $totalpages);
?>

