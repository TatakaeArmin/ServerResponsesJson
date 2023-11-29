<?php
class song {
    public $id;
    public $name;
    public $artist;
    public $trackNumber;
    public $duration;

    public function __construct($id, $name, $artist, $trackNumber, $duration) {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }
}
