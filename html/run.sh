#!/bin/bash

SERVER=${SERVER:-localhost}
PORT=${PORT:-8080}

echo "Run: links http://$SERVER:$PORT"

echo
echo "Launching web server ..."
php -S $SERVER:$PORT
