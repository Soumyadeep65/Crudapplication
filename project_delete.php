<?php
require_once("db_conf.php");
$pdo_statement=$pdo_conn->prepare("delete from oap where id=" . $_GET['id']);

$pdo_statement->execute();
header('location:project.php');
?>