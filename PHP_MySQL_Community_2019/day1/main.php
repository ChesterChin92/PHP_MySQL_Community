<html>
    <head>
        <title>This is a title</title>
        <style>
            p {
                <?php 
                $color = "blue";
                echo "background-color :$color; ";
                echo "color : white";
                ?>
               
            }
        </style>
    </head>
    <body>

        <?php 
            $message = "This is from PHP variable";

            echo "<p>$message</p>" ;
        ?>
        
        <button>Click me</button>

    </body>
</html>