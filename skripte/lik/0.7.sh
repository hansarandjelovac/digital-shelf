adb connect 192.168.0.7:5554

adb -s 192.168.0.7:5554 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/lik.mp4" --activity-clear-task" &
