<?php
    $conn = mysqli_connect('localhost', 'root', 'mysql7802', 'opentutorials');
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    print_r(mysqli_fetch_array($result));
?>
