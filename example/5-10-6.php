<?php
    $conn = mysqli_connect('localhost', 'root', 'mysql7802', 'opentutorials');

    $filtered = array(
        'title' => ($_POST['title']),
        'description' => ($_POST['description'])
    );

    $sql = "
        INSERT INTO topic
            (title, description, created)
            VALUES(
                '{$filtered['title']}',
                '{$filtered['description']}',
                NOW()
            )
    ";
    die($sql);

    $result = mysqli_multi_query($conn, $sql);
    if( $result === false ) {
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
    } else {
        echo '성공했습니다. <a href="index.php">돌아가기</a>';
    }
?>
