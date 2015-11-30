#!/bin/bash

# echo "Importing Flipbook\n"
# cd whdt-flipbook && scp -r * 568e@568elmp02.blackmesh.com:/home/568e/unocha.org/var/www/staging.unocha.org/htdocs/data-and-trends-2015/

echo "Importing Humanity 360"

# cd src
sshpass -e scp -rv src/* ${WHDTHE_DEST}

sshpass -e ssh 568e@568elmp02.blackmesh.com "touch /home/568e/unocha.org/var/www/staging.unocha.org/htdocs/humanity360/index.html"
