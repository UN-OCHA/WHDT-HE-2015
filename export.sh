#!/bin/bash


echo "Importing Humanity 360"

# cd src
sshpass -e scp -rv src/* ${WHDTHE_DEST}
