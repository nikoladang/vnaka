#!/bin/bash
mysqldump -u vnaka -pvnakavnaka vnaka > db_sync.sql
git add db_sync.sql
git commit
git push https://github.com/jackcommon/vnaka.git
