adb connect 192.168.0.11:5550

adb -s 192.168.0.11:5550 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
