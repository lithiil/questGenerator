<?php

class QuestGenerator
{

    public function generateRumor () {

        $rawData = file_get_contents('data/rumors.json');
        $data = json_decode($rawData);

            $subjectId = rand(1, count($data->Titles)) - 1;
            $nameId = rand(1, count($data->Names)) - 1;
            $adjectiveId = rand(1, count($data->Adjectives)) - 1;
            $subjectActionId = rand(1, count($data->SubjectAction)) - 1;
            $subjectItemId = rand(1, count($data->SubjectItem)) - 1;
            $subjectLocationId = rand(1, count($data->SubjectLocation)) - 1;
            $subjectStatusId = rand(1, count($data->SubjectStatus)) - 1;
            $raceId = rand(1, count($data->Races)) - 1;

        $rumor = 'It is said that the ' . $data->Adjectives[$adjectiveId] . ' ' . $data->Races[$raceId] . ' ' .  $data->Titles[$subjectId] . ' named ' . $data->Names[$nameId] . ' ,' . $data->SubjectAction[$subjectActionId]
            . ' ' . $data->SubjectItem[$subjectItemId] . ' ' . $data->SubjectLocation[$subjectLocationId] . ' . ' . $data->SubjectStatus[$subjectStatusId].PHP_EOL;

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