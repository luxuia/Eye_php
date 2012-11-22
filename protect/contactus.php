<?php
require('function.inc.php');
date_default_timezone_set('PRC');
$connection = connect();

if (isset($_POST['message'])) {
    $message = htmlspecialchars($_POST['message']);
    $sql = "INSERT INTO message(text, name, date, email) VALUES('".
        $message."','L' ,'".date('Y-m-d G:i:s')."', 'luxuia@foxmail.com')";
    $result = mysqli_query($connection, $sql) or die("error in query : $sql"
        .mysql_error());

}
$sql = "SELECT *  FROM message";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
?>
<table class="table table-hover">
<thead>
<tr>
<th>#</th>
<th>text</th>
<th>name</th>
<th>email</th>
<th>date</th>
</tr>
</thead>
<tbody>
<?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<th>'.$row['id'].'</th>'
            .'<th>'.$row['text'].'</th>'
            .'<th>'.$row['name'].'</th>'
            .'<th>'.$row['email'].'</th>'
            .'<th>'.$row['date'].'</th>';
        echo '</tr>';
    }
}
?>
</tbody>
</table>



<form class="form-horizontal" action="#" method="post">
<textarea  name="message" rows="3"> </textarea>
<input type="submit" class="btn btn-primary"></input>
</form>
