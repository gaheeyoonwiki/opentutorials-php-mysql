<?php
    // $mysqli = mysqli_connect("example.com", "user", "password", "database");
    // $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DU-AL");
    // $row = mysqli_fetch_assoc($res);
    // echo $row['_msg'];

    $conn = mysqli_connect("localhost", "root", "mysql7802", "opentutorials");
    $sql = "
        INSER INTO topic (
            title,
            description,
            created
        ) VALUES (
            'MySQL',
            'MySQL is ....',
            NOW()
        )";
    echo $sql;
    $result = mysqli_query($conn, $sql);
?>
