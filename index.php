<!DOCTYPE html>
<html>
    <head>
        <title>Home | Brian Shin</title>
    </head>
    <body>


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
