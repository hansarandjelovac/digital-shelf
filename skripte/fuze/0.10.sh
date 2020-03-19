adb connect 192.168.0.10:5551

adb -s 192.168.0.10:5551 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fuze.mp4" --activity-clear-task" &
