<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
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
            while ($j < 1000000000) {
                echo "{$i},\t\t";
                $j = $j + $i;
                $i = $j - $i;
            }
            echo "</p>";
        ?>
    </body>
</html>
