<?php

    $video = $_POST['video'];

    // echo $video;

    if($video == 1){
        $command = "sh /var/www/html/polica/skripte/gornji/video1.sh";
        system($command, $output);
    } else if($video == 2){
        $command = "sh /var/www/html/polica/skripte/gornji/video2.sh";
        system($command, $output);
    }
