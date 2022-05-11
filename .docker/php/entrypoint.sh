#!/bin/bash
if [ ! -d "vendor" ]; then
    composer install
fi
. $NVM_DIR/nvm.sh
if [ ! -d "node_modules" ]; then
    npm install
fi
npm run watch