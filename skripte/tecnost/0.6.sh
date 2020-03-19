adb connect 192.168.0.6:5556

adb -s 192.168.0.6:5556 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/tecnost.mp4" --activity-clear-task" &
