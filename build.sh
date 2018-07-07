#!/bin/bash

USER=root

uid=$(whoami);
if [ $uid != $USER ]; then
	sudo su $USER -c "${BASH_SOURCE[0]}";
	exit;
fi

echo "Attempting build"
echo `pwd`

# Git pull

git fetch
git reset --hard origin/master

# Install composer packages

composer install

# Any other build steps should be done here

# Send back the hash we're on
lasthash=`git rev-parse HEAD`
echo "ZJXArtcc site now on $lasthash" 