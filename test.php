<?php

require 'QuestGenerator.php';

$generator = new QuestGenerator();

$data = $generator->getData();

$quest = $generator->generateQuest($data);

echo $quest;
