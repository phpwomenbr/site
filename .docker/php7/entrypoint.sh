#!/bin/bash
. $NVM_DIR/nvm.sh
npm install
vendor/bin/jigsaw build
vendor/bin/jigsaw serve --host=0.0.0.0