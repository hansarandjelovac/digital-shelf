adb connect 192.168.0.8:5553

adb -s 192.168.0.8:5553 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/riba.mp4" --activity-clear-task" &
