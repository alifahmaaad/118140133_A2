<?php
$sambung = new mysqli("localhost", "root", "", "prakwebminggu3");
if (!$sambung) {
    die('could not connect:' . mysqli_connect_error());
}
