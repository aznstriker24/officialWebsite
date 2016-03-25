<!DOCTYPE html>
<html>
    <head>
        <title>Brian Shin</title>
    </head>
    <body>
        <h1>Brian Shin</h1>
        <h2>some catchy tagline</h2>
        <?php
            echo "<p>Here's a list of a couple fibonacci numbers!</p>";
            echo "<p>";
            $i = 0;
            $j = 1;
            while ($j < 1000) {
                echo "{$i}\t";
                $j = $j + $i;
                $i = $j - $i;
            }
            echo "</p>";
        ?>
    </body>
</html>
