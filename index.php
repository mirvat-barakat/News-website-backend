<?php
header('Content-Type: application/json');
include('connection.php');
$sql = "SELECT id, title, description, date FROM news";
$result = mysqli_query($conn, $sql);
$news = array();

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $news[] = $row;
    }
}
mysqli_close($conn);
echo json_encode($news);

?>