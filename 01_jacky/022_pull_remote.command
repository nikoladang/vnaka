#!/bin/bash
# My example bash script
#git pull https://github.com/jackcommon/vnaka.git
git pull
mysql -u vnaka -pvnakavnaka vnaka < db_sync.sql
mysql -u vnaka -pvnakavnaka vnaka < db_update_remote.sql
