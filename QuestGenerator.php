<?php

class QuestGenerator
{
    public function getData () {

        $rawData = file_get_contents('data/data.json');
        $data = json_decode($rawData);
        return $data;
    }

    public function generateQuest ($data) {

        $ids = [
            $subjectId = rand(1, count($data->subjects)) - 1,
            $nameId = rand(1, count($data->names)) - 1,
            $adjectiveId = rand(1, count($data->adjective)) - 1,
            $subjectActionId = rand(1, count($data->subjectAction)) - 1,
            $subjectItemId = rand(1, count($data->subjectItem)) - 1,
            $subjectLocationId = rand(1, count($data->subjectLocation)) - 1,
            $subjectStatusId = rand(1, count($data->subjectStatus)) - 1,
            $raceId = rand(1, count($data->races)) - 1,
        ];

        $quest = 'The ' . $data->adjective[$adjectiveId] . ' ' . $data->races[$raceId] . ' ' .  $data->subjects[$subjectId] . ' named ' . $data->names[$nameId] . ' ,' . $data->subjectAction[$subjectActionId]
            . ' ' . $data->subjectItem[$subjectItemId] . ' ' . $data->subjectLocation[$subjectLocationId] . ' . ' . $data->subjectStatus[$subjectStatusId].PHP_EOL;

        return $quest;
    }
}