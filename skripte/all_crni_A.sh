adb connect 192.168.0.13:5560
adb connect 192.168.0.2:5559
adb connect 192.168.0.3:5558
adb connect 192.168.0.4:5557
adb connect 192.168.0.5:5555
adb connect 192.168.0.6:5556

adb -s 192.168.0.13:5560 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/crni.mp4" --activity-clear-task" &
adb -s 192.168.0.2:5559 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/crni.mp4" --activity-clear-task" &
adb -s 192.168.0.3:5558 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/crni.mp4" --activity-clear-task" &
adb -s 192.168.0.4:5557 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/crni.mp4" --activity-clear-task" &
adb -s 192.168.0.5:5555 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/crni.mp4" --activity-clear-task" &
adb -s 192.168.0.6:5556 shell "am start -n com.mxtech.videoplayer.ad/.ActivityScreen -d "file:///storage/sdcard/Movies/crni.mp4" --activity-clear-task" &
