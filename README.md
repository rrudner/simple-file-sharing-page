# simple-file-sharing-page
Just simple page for file sharing on nginx and php7.4

requirements:
	docker
	docker-compose
	
uses:
	php:7.4-fpm
	nginx
	
instructions:
	```
	git clone https://github.com/rrudner/simple-file-sharing-page.git
	cd simple-file-sharing-page
	docker network create simple-file-sharing-page
	docker-compose up -d
	```