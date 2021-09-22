#!/bin/bash
# this way is best if you want to stay up to date
# or submit patches to node or npm
# https://askubuntu.com/questions/981799/how-to-install-node-js-without-sudo-access-but-with-npm-1-3-10-installed


# create a directory where you want to install node js
#mkdir ~/nodejs-latest

# download and extract nodejs binaries into the created directory

# done localy
#wget -c http://nodejs.org/dist/node-latest.tar.gz | tar xz --strip-components=1

cd ~/nodejs-latest
# append the following lines to the ~/.bashrc file
export NODE_HOME=~/nodejs-latest

export PATH=$PATH:$NODE_HOME/bin

./configure --prefix=~/local

make install 

# refresh environment variables
source ~/.bashrc
