adb connect 192.168.0.2:5559

adb -s 192.168.0.2:5559 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/beli.mp4" --activity-clear-task" &
