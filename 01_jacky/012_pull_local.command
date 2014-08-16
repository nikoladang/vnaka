#!/bin/bash
# My example bash script
git pull https://github.com/jackcommon/vnaka.git
mysql -u root vnaka < db_sync.sql
mysql -u root vnaka < db_update_local.sql
