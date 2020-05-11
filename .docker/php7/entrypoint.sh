#!/bin/bash
if [ ! -d "vendor" ]; then
    composer global require hirak/prestissimo
    composer install
fi
. $NVM_DIR/nvm.sh
if [ ! -d "node_modules" ]; then
    npm install
fi
npm run watch