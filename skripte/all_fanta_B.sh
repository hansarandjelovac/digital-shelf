adb connect 192.168.0.7:5554
adb connect 192.168.0.8:5553
adb connect 192.168.0.9:5552
adb connect 192.168.0.10:5551
adb connect 192.168.0.11:5550
adb connect 192.168.0.12:5549

adb -s 192.168.0.7:5554 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
adb -s 192.168.0.8:5553 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
adb -s 192.168.0.9:5552 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
adb -s 192.168.0.10:5551 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
adb -s 192.168.0.11:5550 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
adb -s 192.168.0.12:5549 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/fanta.mp4" --activity-clear-task" &
