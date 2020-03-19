adb connect 192.168.0.4:5557

adb -s 192.168.0.4:5557 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/tecnost.mp4" --activity-clear-task" &
