<?php

// 1. Mediaインターフェース
interface Media {
    public function play();
}

// 2. Musicクラス
class Music implements Media {
    private $songTitle;

    public function __construct($songTitle) {
        $this->songTitle = $songTitle;
    }

    public function play() {
        echo "{$this->songTitle} を再生中\n";
    }
}

// 3. Videoクラス
class Video implements Media {
    private $videoTitle;

    public function __construct($videoTitle) {
        $this->videoTitle = $videoTitle;
    }

    public function play() {
        echo "{$this->videoTitle} を再生中\n";
    }
}

// 4. Podcastクラス
class Podcast implements Media {
    private $episodeTitle;

    public function __construct($episodeTitle) {
        $this->episodeTitle = $episodeTitle;
    }

    public function play() {
        echo "{$this->episodeTitle} を再生中\n";
    }
}

// === 動作確認 ===
$mediaList = [
    new Music("ありがとう"),
    new Video("PHP入門講座"),
    new Podcast("明日のニュース")
];

foreach ($mediaList as $media) {
    $media->play();
}

