# Carbite - A PHP Microframework for REST Services

Developing data-centric single page web applications (SPA) requires backend REST services to access the databases. Carbite is a ulta-lightweight PHP microservice framework to write REST services.


## Configuring the environment for carbite

### Apache running in Linux/CentOS

First enable the rewrite module for apache

```shell
a2enmod rewrite
```

in your apache configuration (i.e. /etc/apache2/sites-enabled/000-default.conf) configure your root folder (or any other folder you prefer to apply config overriding) by setting these options.

```html
<Directory /var/www/>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride all
    Order allow,deny
    allow from all
</Directory>
```

finally restart the apache server

```shell
sudo service apache2 restart
```

make sure you have included the file '.htaccess' inside the folder where you have your web application.

### NginX running in Linux/CentOS

just add this line to your sever declaration (its usually in the file /etc/nginx/sites-enabled/default)

```shell
server {
    location / {
        try_files $uri $uri/ /index.php;
    }
}
```

### WAMP Server running in Windows

click on the WAMP server system tray icon, select the menu item "Apache", then select the menu item "Apache modules", then tick on the item "rewrite_module". And makesure you have the .htaccess file in your folder where you have your web application

## Carbite Hello World

```php
require_once("./carbite.php");

Carbite::GET("/hello",function($req,$res){
	$res->Set("Hello World");
});

Carbite::Start();
```

## HTTP methods supported by carbite

### GET

```php
Carbite::GET("/customer/@id",function($req,$res){
	$cust = new Customer(); //create a mock object for customer
	$cust->id = $req->Params()->id;
	$cust->name = "just a dummy customer";
	
	$res->setJSON($cust); //return the response as JSON
});
```

### POST, PUT, DELETE

These three request types work in the same way, to get the object that is recieved in the body, you can use the $req->Body() method.

```php
Carbite::POST("/customer/@id",function($req,$res){
	$custObj = $req->Body();
	$res->setJSON($custObj); //echo the post object
});

Carbite::PUT("/customer/@id",function($req,$res){
	$custObj = $req->Body();
	$res->setJSON($custObj); //echo the post object
});

Carbite::DELETE("/customer/@id",function($req,$res){
	$custObj = $req->Body();
	$res->setJSON($custObj); //echo the post object
});
```

## Licence

carbite is released under [LGPL](http://www.gnu.org/licenses/lgpl-3.0.en.html) licence
