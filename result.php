<html>
    <head>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>Nice to meet you!</title>
    </head>
    <body>
        <?php

        $color = $_POST['color'];
        $family = $_POST['family'];
        $movie = $_POST['movie'];
        $door = $_POST['door'];
        $flowers = $_POST['flowers'];


        //these echo statemnents can be removed, just wanted to print them to make sure the values were acting right.
        echo $color;
        echo "<br>";
        echo $family;
        echo "<br>";
        echo $movie;
        echo "<br>";
        echo $door;
        echo "<br>";
        echo $flowers;
        echo "<br>";

        //calculation of score
        $score = $color + $family + $movie + $door + $flowers;
        //not necessary to share score with user, either way its okay
        echo 'Your score is: '."$score"; 

        //Add if statements here using variable $score to determine personality 

            /* total of 0-25 = great personality!
             * total 25-50 = fair personality
             * total 50 and up = Horrible personality  */
        
        if($score<=25){
		echo "<br>";
		echo "You have a great personality.";
	}elseif($score >= 26 && $score <= 50){
		echo "<br>";
		echo "You have a fair personality";			
	}elseif($score >= 51 && $score <= 100){
		echo "<br>";
		echo "Have you thought about being a hermit.";
	}

        ?>


    </body>
</html>
