#!/bin/sh

# rebuild magento project
/usr/bin/php bin/magento setup:upgrade
echo 'Step 1 - finished'
/usr/bin/php bin/magento setup:di:compile
echo 'Step 2 - finished'
/usr/bin/php bin/magento setup:static-content:deploy -f
echo 'Step 3 - finished'
/usr/bin/php bin/magento cache:flush
echo 'Step 4 - finished'
/usr/bin/php bin/magento cache:clean
echo 'Step 5 - finished'

cd ../

sudo chmod 777 -R magento/

echo 'Step 6 - finished'

cd magento/

echo 'finished'
