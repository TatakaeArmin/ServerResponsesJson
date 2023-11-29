<?php

require_once "src/song.php";

class OST
{
    public $id;
    public $name;
    public $videoGameName;
    public $releaseYear;
    public $trackList = [];

    public function __construct($id, $name, $videoGameName, $releaseYear) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
    }

    public function addSong($song) {
        $this->trackList[] = $song;
    }
}
