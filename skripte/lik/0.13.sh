adb connect 192.168.0.13:5560

adb -s 192.168.0.13:5560 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/lik.mp4" --activity-clear-task" &
