cd apps/blog/shared/config
nano database.yml 
logout
exit
sudo rm /etc/nginx/sites-enabled/default 
sudo service nginx restart
sudo update-rc.d unicorn_blog defaults
git add .
exit
cd apps/isg/shared/config/
nano database.yml 
logout
sh -c 'cd /home/deployer/apps/isg/releases/20130125185456 && bundle install --gemfile /home/deployer/apps/isg/releases/20130125185456/Gemfile --path /home/deployer/apps/isg/shared/bundle --deployment --quiet --without development test'
cd /home/deployer/apps/isg/releases/
ls
sudo -u postgres psql
nano /var/lib/pgsql/data/pg_hba.conf
cd /
l
logout
cd 
ls
cd ..
ls
cd
ls
cd ..
ls
curl https://raw.github.com/fesplugas/rbenv-installer/master/bin/rbenv-installer | bash
nano ~/.bashrc
. ~/.bashrc
rbenv bootstrap-ubuntu-10-04
. ~/.bashrc
rbenv bootstrap-ubuntu-10-04
rbenv
curl https://raw.github.com/fesplugas/rbenv-installer/master/bin/rbenv-installer | bash
nano ~/.bashrc
. ~/.bashrc
rbenv
cd 
. ~/.bashrc
rbenv
curl https://raw.github.com/fesplugas/rbenv-installer/master/bin/rbenv-installer | bash
nano ~/.bashrc
. ~/.bashrc
rbenv
rbenv bootstrap-ubuntu-10-04
whoami
rbenv install 1.9.3-p125
rbenv global 1.9.3-p125
ruby -v
gem install bundler --no-ri --no-rdoc
rbenv rehash
bundle -v
ruby -v
ssh git@github.com
nano ~/.ssh/known_hosts
ssh git@github.com
cd 
l
cd apps/isg/
ls
cd current
cd ..
ls
cd shared/
ls
cd config/
nano database.yml 
sudo service nginx restart
cd ..
ls
sudo update-rc.d unicorn_isg defaults
cd ..
ls
sudo -u postgres psql
cd 
cd apps/blog/shared/config
nano database.yml 
cd ..
cd ...
cd ..
cd isg/
cd shared/
ls
cd config/
nano database.yml 
sudo -u postgres psql
sudo -d isg_production -u postgres psql
sudo -u postgres ps
cd apps/blog/shared/config
cd 
cd apps/blog/shared/config
nano database.yml 
cd ..
cd .
cd ..
cd isg/shared/config/
nano database.yml 
find . nginx
cd /
find . -name nginx
cd /etc/nginx/
ls
cd ..
nano /var/log/nginx/error.log;
nano /var/log/nginx/access.log;
tail -f /var/log/nginx/error.log;
tail -f /var/log/nginx/access.log;
service nginx start
sudo service nginx start
sudo tail -f /var/log/nginx/error.log;
cd  /etc/nginx/sites-enabled/
ls
nano blog 
nano isg
rm blog
sudo rm blog
sudo service nginx start
sudo tail -f /var/log/nginx/error.log;
sudo service nginx stop
sudo service nginx restart
cd ~
ls
cd apps/
ls
cd isg/
ls
cd shared/
ls
cd log/
l
ls
tail -f production.log 
/apps/isg/shared/log$ tail -f production.log 
cd /apps/isg/shared/log
cd apps/isg/shared/lo
cd apps/isg/shared/log
tail -f production.log 
ls
cd apps/isg/
ls
rake db:migrate RAILS_ENV=production
rake
ls
cd shared
rake db:migrate RAILS_ENV=production
ls
cd ..
ls
cd current
ls
rake db:migrate RAILS_ENV=production
cd ..
cd shared/
ls
cd config/
nano database.yml database.yml 
ls
nano database.yml
cd /home/deployer/apps/isg/shared
ls
cd config/
ls
nano database.yml 
cd ..
ls
cd ..
ls
cd
rake
rake db:schema:load
rails generate migration createAllDB
ls
cd apps/
ls
cd isg/
ls
cd shared/
ls
cd ..
ls
cd current
ls
cd db/
ls
nano schema.rb 
cd migrate/
ls
cd .
cd ..
ls
cd ..
ls
cd ..
ls
rails console
cd current
rails console
cd /home/deployer/apps/isg/shared/
ls
cd ..
ls
cd current
ls
cd db/
ls
nano seeds.rb 
git add .
git commit .
git commit -m "cekirdek"
git push
cd /home/deployer/apps/isg/shared 
ls
cd config/
ls
nano database.yml 
cd /home/deployer/apps/isg/current
ls
cd db
ls
nano seeds.rb 
sudo -u postgres psql
ruby script/console production
ruby script/console production
ruby
cd ..
ls
cd script/
ls
cd rails 
ls
nano rails
ls
cd ..
ls
ruby script/console production
bundle exec rails console productioncd
ls
cd ..
ls
bundle exec rails console production
cd current
bundle exec rails console production
gem
gem install imagemagick
sudo apt-get install imagemagick libmagickcore-dev
sudo gem install rmagick
sudo apt-get install libmagickwand-dev
cd /home/deployer/apps/isg/sharedcd /home/deployer/apps/isg/shared
ls
cd apps/isg/shared/
ls
cd config/
ls
nano database.yml 
ls
cap deploy:cold
mate  /home/deployer/apps/isg/shared/config/database.y
nano /home/deployer/apps/isg/shared/config/database.yml
cd ..
ls
cd deployer/
ls
cd apps/
ls
cd isg/
ls
cd shared
ls
cd log
ls
tails -f production.log 
sudo tail -f production.log 
cd ..
ls
cd ..
ls
cd shared/
ls
cd config/
ls
cd cached-copy
ls
cd ..
ls
cached-copy
cd cached-copy/
ls
cd ..
rm -r cached-copy/
rm -rf cached-copy/
ls
cd ..
ls
cd current
ls
cd ..
cd shared/
ls
cd config/
ls
nano  database.yml 
cap deploy:cold
cd ..
ls
cd ..
ls
cd..
ls
rm -rf
rm -rf current
ls
rm -rf shared
ls
rm -rf releases
ls
nano /home/deployer/apps/isg/shared/config/database.yml
sudo update-rc.d unicorn_blog defaults
ls
cd shared
ls
cd assets/
ls
cd ..
ls
cd ..
ls
current
ls
cd current
ls
cd public/
ls
cd images/
l
ls
cd location/
ls
cd ..
cd...
cd ..
find . stderr
find . -name stderr
cd ..
cd /
find . -name stderr
sudo find . -name stderr
etc/init.d/unicorn_isg restart
cd /home/deployer/apps/isg/current
cd log/unicorn.log 
ls
nano log/unicorn.log 
tail -f log/unicorn.log 
cd ..
ls
cd ..
ls
rm -rf blog/
service nginx start
sudo service nginx start
cap deploy
cd isg/
ls
cap deploy
tail -f log/unicorn.log 
sudo apt-get install libxslt-dev libxml2-dev
cd apps/blog/shared/config
ls
cd apps/blog/shared/config
cd app
cd apps
ls
cd isg/
ls
cd shared/config/
ls
nano database.yml 
exit
nano /home/deployer/apps/isg/shared/config/database.yml
nano /home/deployer/apps/isg/shared/bundle/ruby/1.9.1/gems/railties-3.2.9/lib/rails/application/configuration.rb
nano +115 /home/deployer/apps/isg/shared/bundle/ruby/1.9.1/gems/railties-3.2.9/lib/rails/application/configuration.rb
nano /home/deployer/apps/isg/shared/config/database.yml
nano +115 /home/deployer/apps/isg/shared/bundle/ruby/1.9.1/gems/railties-3.2.9/lib/rails/application/configuration.rb
cd /home/deployer/apps/isg/shared/bundle/ruby/1.9.1/gems/railties-3.2.9/lib/rails/application
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd shared/
ls
cd con
cd config
ls
nano database.yml 
postgres
sudo -u postgres psql
ld
ls
nano database.yml 
sudo -u postgres psql
exit
cd apps/blog/shared/config
ls
exit
ls
cd apps/blog/shared/config
ls
cd apps/
ls
cd isg/
ls
cd shared/
ls
cd config/
ls
nano database.yml 
CD ..
cd ..
ls
cd .
cd /var/
ls
cd lib/
ls
cd postgresql/
ls
cd 8.4
ls
cd main/
ls
cd main
ls
sudo cd main
su root
ls
cd apps/
ls
cd isg
ls
cd releases/
ls
exit
ssh-add
exit
sudo su deployer
sudo su deployer
ls /home/deployer/apps/isg/shared/assets/.sprockets-manifest*
ls /home/deployer/apps/isg/shared/assets/
ls
ls /home/deployer/apps/isg/shared/assets/
ls /home/deployer/apps/isg/shared/assets/manifest.yml 
ssh git@github.com
ls -al ~/.ssh
ssh-keygen -t rsa -b 4096 -C "cal.par@gmail.com"
eval "$(ssh-agent -s)"
ls -al ~/.ssh
cd
ruby -v
ssh git@github.com
git --version
cd /
hef39kar
cd /
cd /home/deployer/apps/isg/shared/assets/
mkdir .sprockets-manifest
ls
cd .sprockets-manifest/
ls /home/deployer/apps/isg/shared/assets/
hef39kar
which wkhtmltopdf
ssh -vT git@github.com
ls -al ~/.ssh
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
rails c
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
sudo tail -f /home/deployer/apps/isg/current/log/unicorn.log
sudo tail -f /home/deployer/apps/isg/current/log/production.log
1802alpa
sudo tail -f /home/deployer/apps/isg/current/log/production.log
ls
cd apps/
ls
cd  is
cd  isg
ls
cd ..
ls
cd ..
ls
cd ..
ls
