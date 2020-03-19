<?php

$command = "ssh pi@192.168.0.200 'sh /home/pi/final.sh > /dev/null 2>&1' &";
system($command, $output);
