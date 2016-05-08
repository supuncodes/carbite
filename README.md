# Carbite - A PHP Microframework for REST Services

Developing data-centric single page web applications (SPA) requires backend REST services to access the databases. Carbite is a ulta-lightweight PHP microservice framework to write REST services.


# Configuring carbite



# Carbite Hello World

```php
require_once("./carbite.php");

Carbite::GET("/hello",function($req,$res){
	$res->Set("Hello World");
});

Carbite::Start();
```

# HTTP methods supported by carbite

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


# Licence

carbite is released under [LGPL](http://www.gnu.org/licenses/lgpl-3.0.en.html) licence
