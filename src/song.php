<?php

class song implements JsonSerializable {
    private int $id;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private string $duration;

    public function __construct($id, $name, $artist, $trackNumber, $duration) {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

    public function jsonSerialize(): array
    {
        return array(
            "song id" => $this->id,
            "song name" => $this->name,
            "artist" => $this->artist,
            "tracknumber" => $this->trackNumber,
            "duration" => $this->duration
        );
    }
}
