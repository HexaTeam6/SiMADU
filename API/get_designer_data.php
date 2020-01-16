<?php
include "config.php";

$id_designer = $_GET['id_designer'];

$sth = $connect->query("select * from dummy_designer where id_designer = '$id_designer'");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
echo json_encode($rows);