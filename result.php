<html>
    <head>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>Your Results</title>
    </head>
    <body>
    <h1>Most Awesome personality test ever</h1>
        <?php
        $color = $_POST['color'];
        $family = $_POST['family'];
        $movie = $_POST['movie'];
        $door = $_POST['door'];
        $flowers = $_POST['flowers'];
        //calculation of score
        $score = $color + $family + $movie + $door + $flowers;
        echo 'Your scored '."$score".'points'; 
    echo "<br>";
            /* total of 0-25 = great personality!
             * total 25-50 = fair personality
             * total 50 and up = Horrible personality  */
        
        if ($score<=25) {
          echo "<br>";
          echo "You have a GREAT personality. Keep it up! ‭💪";
        } elseif ($score >= 26 && $score <= 50) {
          echo "<br>";
          echo "You have a fair personality. 👌";            
        } else {
          echo "<br>";
          echo "Have you thought about being a hermit?... HORRIBLE PERSONALITY! 💩";
        }
        ?>


    </body>
</html>
