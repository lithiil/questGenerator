<?php

require 'QuestGenerator.php';

$generator = new QuestGenerator();

$quest = $generator->generateRumor();

echo $quest;
