<?php

include_once "PostMediaManager.php";

class Instagram extends PostMediaManager {
    public function chat(): void{
        echo "chat using Instagram\n";
    }
    public function sendPhotosAndVideos(): void {
        echo "send photo and video using Instagram\n";
    }
    public function publishPost(): void {
        echo "publish post using Instagram\n";
    }

}