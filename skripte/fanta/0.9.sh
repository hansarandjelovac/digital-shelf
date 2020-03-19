adb connect 192.168.0.9:5552

adb -s 192.168.0.9:5552 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
