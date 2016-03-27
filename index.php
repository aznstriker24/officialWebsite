<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <title>Brian Shin</title>
    </head>
    <body>
        <div class="header">
            <h1>Brian Shin</h1>
            <h2>some catchy tagline</h2>
        </div>
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

        <div class="pure-g">
            <div class="pure-u-1-3"><p>Thirds</p></div>
            <div class="pure-u-1-3"><p>Thirds</p></div>
            <div class="pure-u-1-3"><p>Thirds</p></div>
        </div>
    </body>
</html>
