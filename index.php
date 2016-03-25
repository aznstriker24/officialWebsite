<!DOCTYPE html>
<html>
    <head>
        <title>Brian Shin</title>
    </head>
    <body>
        <h1>Brian Shin</h1>
        <h2>some catchy tagline</h2>
        <?php
            echo "<p>Here's a list of a couple fibonacci numbers!</p>"
            $i = 0;
            $j = 1;
            while ($j < 1000) {
                echo "<p>{$i}</p>";
                $j = $j + $i;
                $i = $j - $i;
            }
        ?>
    </body>
</html>
