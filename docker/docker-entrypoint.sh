#!/bin/bash
set -e
apache2ctl -D FOREGROUND
exec "$@"
