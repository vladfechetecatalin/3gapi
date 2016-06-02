# 3G API

1. Download and install WampServer ( https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/wampserver3_x64_apache2.4.17_mysql5.7.9_php5.6.16_php7.0.0.exe/download?use_mirror=liquidtelecom )
  - make sure port 80 is not used or make apache listen (httpd.conf) to another port (e.g. 8079).
  
2. Download and install Composer ( https://getcomposer.org/Composer-Setup.exe ).

3. Clone this repo.

4. Execute: "composer install" in repo folder.

5. Execute: "php artisan migrate" in repo folder.

6. Execute: "php artisan serve --port=3000 --host=lvh.me"
  - The server should now start and the application should be available on localhost:3000 or lvh.me:3000.
