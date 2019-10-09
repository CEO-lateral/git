#!/bin/bash
echo "Content-type: text/plain\n";
echo '';
cd /var/www/domains/k.qzo.su/ || exit > /dev/null
git reset --hard > /dev/null
git pull > /dev/null
#git@bitbucket.org:gafurovstudio/g2.git
chmod -R 755 /var/www/domains/k.qzo.su > /dev/null