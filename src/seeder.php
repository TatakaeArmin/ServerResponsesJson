<?php

require_once "src/song.php";
require_once "src/OST.php";

class seeder
{
    public function generateData(): array {
        $osts = [];
        for ($i = 1; $i <= 3; $i++) {
            $ost = new OST($i, "OST $i", "Video Game $i", 2022);
            for ($j = 1; $j <= 4; $j++) {
                $song = new Song($j, "Song $j", "Artist $j", $j, "0:30");
                $ost->addSong($song);
            }
            $osts[] = $ost;
        }
        return $osts;
    }
}