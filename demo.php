<?php
    
$winner = $_POST["winner"];
$ratingA = $_POST["ratingA"];
$ratingB = $_POST["ratingB"];

?>

<form action="index.php" method="post">
Rating of A: <input type="number" name="ratingA"><br>
Rating of B: <input type="number" name="ratingB"><br>
Winner: <input type="radio" name="winner" value="0">A
    <input type="radio" name="winner" value="1">B
<br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
    
require 'Rating.php';

echo '<h2>Instantiating Rating</h2>';

$demoRating = new Rating\Rating;

if ($winner = 0) {
    $demoRating -> setNewSettings($_POST["ratingA"], $_POST["ratingB"], 1, 0);
} elseif ($winner = 1) {
    $demoRating -> setNewSettings($_POST["ratingA"], $_POST["ratingB"], 0, 1);
}

echo '<tt><pre>' . var_export($demoRating, TRUE) . '</pre></tt>';

?> . var_export($demoRating, TRUE) . '</pre></tt>';