adb connect 192.168.0.3:5558

adb -s 192.168.0.3:5558 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
