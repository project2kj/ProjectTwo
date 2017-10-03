<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="quizstyle.css" />
  <link href='https://fonts.googleapis.com/css?family=Glass Antiqua' rel='stylesheet'>
   <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <title>Nice to meet you!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

  <body>
   
    <form action="result.php" method="post">
        <h1>Most Awesome personality test ever</h1>
  <?php
        $agerange = $_POST['agerange'];
        $firstname = $_POST['firstname'];
        print '<p id="talk">Hi ' . "$firstname" . ' this personality test will help you in your ' . "$agerange</p>";
        ?>
		<table>
		<tr>
		<td>
		<div id= "q1">
        <p><span id = "opt">1.</span> What is your favorite color?</p>
        <input type="radio" name="color" value="5" > <span id = "opt2">red</span><br>
        <input type="radio" name="color" value="10" ><span id = "opt2">blue</span><br>
        <input type="radio" name="color" value="15" > <span id = "opt2">green</span><br>
</div>
</td>
<td>
<div id= "q1">
        <p><span id = "opt">2.</span>Someone gives you flowers, what do you do?</p>
        <input type="radio" name="flowers" value="5"><span id = "opt2">Accept them kindly</span><br>
        <input type="radio" name="flowers" value="10"><span id = "opt2">Decline and never speak to this person again</span><br>
        <input type="radio" name="flowers" value="15"><span id = "opt2">Accept and throw them away asap</span><br>
		
		</div></td>


<td>
<div id= "q1">
        <p><span id = "opt">3.</span> What's your favaorite movie theme?</p>
        <input type="radio" name="movie" value="5"><span id = "opt2">Love Story</span><br>
        <input type="radio" name="movie" value="10"><span id = "opt2">Horror</span><br>
        <input type="radio" name="movie" value="15"><span id = "opt2">Action/Adventure</span><br>
	</div>	</td>
		
</tr>
<tr>

<td>
<div id= "q1">
        <p><span id = "opt">4.</span> Are you an indoor or outdoor type of person?</p>
        <input type="radio" name="door" value="5"><span id = "opt2">Indoor</span><br>
        <input type="radio" name="door" value="10"><span id = "opt2">Outdoor<br>
        <input type="radio" name="door" value="15">Don't care</span><br> </div>
</td>


		<td> <input type="submit" class="button button1" value="Sumbit Quiz" name="submit" /></td>
	
		<td><div id= "q1">
        <p><span id = "opt">5.</span> Have you ever been in love before?</p>
        <input type="radio" name="family" value="5"> <span id = "opt2">Yes<br>
        <input type="radio" name="family" value="10"> No<br>
        <input type="radio" name="family" value="15"> Prefer not to answer</span><br></div>
</td></tr>
</table>

      
   </form>
  </body>
</html>
