<?php
    $conn = mysqli_connect('localhost', 'root', 'mysql7802', 'opentutorials');
    $sql = "
        INSERT INTO topic
            (title, description, created)
            VALUES(
                '{$_POST['title']}',
                '{$_POST['description']}',
                NOW()
            )
    ";
    mysqli_query($conn, $sql);
    echo $sql;
?>
