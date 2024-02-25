<!DOCTYPE html>
<html>
<head>
    <title>Online Notice Board - Add Notice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }
        text
        {
            width: 600px;
        }
        textarea {
                height: 100px;
                width: 400px;
            }
        header {
                text-align: center;
                background-color: #333;
                color: #fff;
                padding: 10px;
            }
            button
            {
                background: #333;
                color: #fff;
            }
    </style>
</head>
<body>
    <div class="container">
        
        <header>
            <h2>Notice Board</h2>
        </header>
        <form action="" method="post">
            <br><br>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required><br><br>
            <label for="content">Content:</label><br>
            <textarea name="content" id="content" rows="4" required></textarea><br><br><br>
            <button type="submit" name="submit">Post Notice</button>
            <button id="myid">View Notice</button>
        </form>

        <script>
             document.getElementById("myid").addEventListener("click", function() {
            window.location.href = "http://localhost/Notice/view_notice.php";
        });
            </script>
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
    </div>
</body>
</html>

