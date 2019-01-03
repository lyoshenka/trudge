#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

find content/ -iname '*.txt' -o -iname '*.csv' | xargs fromdos
sudo chown -R www-data:grin content/ thumbs/ site/accounts/
sudo find $DIR/content/ -type f -exec chmod 664 {} \+
sudo find $DIR/content/ -type d -exec chmod 774 {} \+

