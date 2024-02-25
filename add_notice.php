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
