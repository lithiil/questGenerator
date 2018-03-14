<?php

require 'QuestGenerator.php';

$generator = new QuestGenerator();

$data = $generator->getData();

$quest = $generator->generateRumor($data);

echo $quest;
