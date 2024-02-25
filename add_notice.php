<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
          

            file_put_contents('notices.txt', "$title: $content" . PHP_EOL, FILE_APPEND);
           // echo '<script>alert("Notice Added Successfully...!!!");</script>';
        }
    }
        ?>