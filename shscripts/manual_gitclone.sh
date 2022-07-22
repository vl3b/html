cd /var/www/html
printf "startofscript" >> /var/www/html/logs 2>&1
printf "tag='git'tag='git clone'scriptname='manual_gitclone.sh'\n" >> /var/www/html/logs 2>&1
time=$(date)
printf "$time\n" >> /var/www/html/logs 2>&1
git pull https://github.com/vl3b/html >> /var/www/html/logs 2>&1