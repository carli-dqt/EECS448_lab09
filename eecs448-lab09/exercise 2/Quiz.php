<html>
<body>
<?php

    $score = 0;

    if($_POST["album"] == "Harry Styles"){$score = $score +1;}
    if($_POST["birthdate"] == "Feb 01, 1994"){$score = $score +1;}
    if($_POST["hometown"] == "Redditch, Worcestershire, England"){$score = $score +1;}
    if($_POST["song"] == "Sign of the Times"){$score = $score +1;}
    if($_POST["acting"] == "Dunkirk"){$score = $score +1;}

    $percentage = $score * 20;

echo "<h3>Question 1: What is Harry Styles' first solo album? (it's more obvious than you think)</h3>";
echo "   You answered: " . $_POST["album"] . "<br>";
echo "   Correct answer: Harry Styles<br>";

echo "<h3>Question 2: When was Harry Styles born?</h3><br>";
echo "   You answered: " . $_POST["birthdate"] . "<br>";
echo "   Correct answer: Feb 01, 1994<br>";

echo "<h3>Question 3: Where was Harry Styles born?</h3>";
echo "   You answered: " . $_POST["hometown"] . "<br>";
echo "   Correct answer: Redditch, Worcestershire, England<br>";

echo "<h3>Question 4: What was his debut single?</h3><br>";
echo "   You answered: " . $_POST["song"] . "<br>";
echo "   Correct answer: Sign of the Times<br>";

echo "<h3>Question 5: What was the first film he participated in as an actor?</h3>";
echo "   You answered: " . $_POST["acting"] . "<br>";
echo "   Correct answer: Dunkirk<br>";

echo "Total correct answers: " . $score . "<br>";
echo "Score percentage: " . $percentage . "%<br>";

?>
</body>
<html>
