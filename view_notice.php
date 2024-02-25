<!DOCTYPE html>
<html>
<head>
    <title>Online Notice Board - View Notices</title>
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
        .notice {
            margin-bottom: 20px;
        }

        h1, h2 {
            color: #333;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Notices</h1>

        <?php
        $notices = file_exists('notices.txt') ? file('notices.txt', FILE_IGNORE_NEW_LINES) : [];
        
        foreach ($notices as $index => $notice) 
        {
            [$title, $content] = explode(': ', $notice, 2);	

            echo "<div class='notice'>";
            echo date("Y-m-d H:i:s");
            echo "<h2>$title</h2>";
            echo "<p>$content</p>";
            echo "<a href='view_notice.php?index=$index'></a>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>

	 
