<?php

include_once "VideoGroupManager.php";

class WhatsApp extends VideoGroupManager {
    public function chat(): void{
        echo "chat using WhatsApp\n";
    }
    public function sendPhotosAndVideos(): void {
        echo "send photo and video using WhatsApp\n";
    }
    public function callGroupVideo(): void {
        echo "use WhatsApp grup video\n";
    }

}