#!/bin/bash
num=`ps -ef | grep monitorVisit.php | grep -v 'grep' | wc -l`
PHP_BIN=/usr/bin/php
PHP_Reader_Dir=/opt/www/piwik/misc/cron
PHP_Reader=monitorVisit.php
echo $Reader "num is " $num
#少于10个进程，拉起
if [ $num -lt 10 ]
then
diff=`expr 10 - $num`
echo "need more"$diff
for((i=0;i<$diff;i++));do
$PHP_BIN ${PHP_Reader_Dir}/${PHP_Reader} &
done
fi


