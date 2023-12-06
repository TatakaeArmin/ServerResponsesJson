<?php


require_once "src/song.php";

class OST implements JsonSerializable
{
    private int $id;
    private string $name;
    private string $videoGameName;
    private int $releaseYear;
    private array $trackList = [];

    public function __construct($id, $name, $videoGameName, $releaseYear) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
    }

    public function addSong($song)
    {
        $this->trackList[] = $song;
    }

    public function jsonSerialize(): array
    {
        return array(
            "OST id" => $this->id,
            "OST name" => $this->name,
            "video game name" => $this->videoGameName,
            "release year" => $this->releaseYear,
            "tracklist" => $this->trackList
        );
    }

}