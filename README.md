# Mobile Connect example apps (PHP SDK)

**WARING: *This code is just a quick example how to get started with Mobile Connect PHP SDK it should not be cosider to describe best practices.***

## Introduction
This repo includes source code for Tapstore and Yolo Mobile Connect demo apps. This example is supplementary and does not replace documentation at the Mobile Connect developer portal.

## Repo Structure
In root directory there are ```yolo/``` and ```tapstore/``` directories each containing stanalone app. (In future those directories will be referenced to as ```<app directory>```)

Inside app direcotry there is Laravel application, directory structure is standard for Laravel apps. Please cunsult [Laravel documentation](http://laravel.com/docs/5.1) for details. Frontend is using Foundation.

### Getting set up
Run following in app directory to get app ready (requires composer and bower):

	composer install
	cd public/
	bower install
	bundle exec compass compile

### Mobile Connect SDK configuration
For Mobile Connect SDK to function properly it needs to be configured first. ```<app directory>/app/config/etalio.php``` contains all the configuration for Mobile Connect to work.

To get started quickly the following keys need to be set:

	'appId'        => '<YOUR APP ID HERE>',
	'secret'       => '<YOUR APP SECRET HERE>',
	'redirect_uri' => '<YOUR APP BASE URI HERE>/authenticate'

Note the ```/authenticate``` part or ```redirect_uri```. 

Possible points of interest:


- ```<app directory>/app/controllers/HomeController.php``` 
	handles requests

- ```<app directory>/app/routes.php``` 
	list of possible routs

- ```<app directory>/bootstrap/start.php```
	sets up etalio signleton which is used in controller
