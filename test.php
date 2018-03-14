<?php

require 'QuestGenerator.php';

$generator = new QuestGenerator();

//$rumor = $generator->generateRumor();
$quest = $generator->generateQuest();

echo $quest;
