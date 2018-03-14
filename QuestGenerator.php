<?php

class QuestGenerator
{

    public function generateRumor () {

        $rawData = file_get_contents('data/rumors.json');
        $data = json_decode($rawData);

            $subjectId = rand(1, count($data->titles)) - 1;
            $nameId = rand(1, count($data->names)) - 1;
            $adjectiveId = rand(1, count($data->adjectives)) - 1;
            $subjectActionId = rand(1, count($data->subjectAction)) - 1;
            $subjectItemId = rand(1, count($data->subjectItem)) - 1;
            $subjectLocationId = rand(1, count($data->subjectLocation)) - 1;
            $subjectStatusId = rand(1, count($data->subjectStatus)) - 1;
            $raceId = rand(1, count($data->races)) - 1;

        $rumor = 'It is said that the ' . $data->adjectives[$adjectiveId] . ' ' . $data->races[$raceId] . ' ' .  $data->titles[$subjectId] . ' named ' . $data->names[$nameId] . ' ,' . $data->subjectAction[$subjectActionId]
            . ' ' . $data->subjectItem[$subjectItemId] . ' ' . $data->subjectLocation[$subjectLocationId] . ' . ' . $data->subjectStatus[$subjectStatusId].PHP_EOL;

        return $rumor;
    }

    public function generateQuest () {

        $rawData = file_get_contents('data/quests.json');
        $data = json_decode($rawData);

        $questGiverId = rand(1, count($data->QuestGiver)) - 1;
        $mainActionId = rand(1, count($data->MainAction)) - 1;
        $locationId = rand(1, count($data->Location)) - 1;
        $directionId = rand(1, count($data->Direction)) - 1;
        $durationId = rand(1, count($data->Duration)) - 1;
        $transportationId = rand(1, count($data->Transportation)) - 1;
        $rewardId = rand(1, count($data->Reward)) - 1;

        $quest = $data->QuestGiver[$questGiverId] . ' wants you to ' . $data->MainAction[$mainActionId] . ' found ' . $data->Location[$locationId] . ' ' . $data->Direction[$directionId] . ' ' . $data->Duration[$durationId] .
            ' ' . $data->Transportation[$transportationId] . ' from here. For this, you will receive ' . $data->Reward[$rewardId].PHP_EOL;

        return $quest;

    }
}