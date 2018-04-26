<?php

require 'QuestGenerator.php';

$generator = new QuestGenerator();

$rumor = $generator->generateRumor();
$quest = $generator->generateQuest();

if (isset($_POST['generate'])) {
    $rumor = $generator->generateRumor();
    $quest = $generator->generateQuest();
}
?>

<html>
<body>
<form action="test.php" method="post">
    <span><?php echo $rumor ?></span>
    <br>
    <br>
    <span> <?php echo $quest ?></span>
    <br>
    <br>
    <input type="submit" value="Generate" name="generate">
</form>
</body>
</html>
