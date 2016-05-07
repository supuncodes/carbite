# carbite - A PHP microservice for REST services

Developing data-centric single page web applications (SPA) requires backend REST services to access the databases. Carbite is a ulta-lightweight PHP microservice framework to write REST services.


# configuring carbite



# carbite Hello World

# HTTP methods supported by carbite

### GET

```php
Carbite::GET("/hello",function($req,$res){
	$returnObj = new Customer();
	$res->Set($returnObj);
});
```

### POST


### PUT

### DELETE


# Licence

carbite is released under [LGPL](http://www.gnu.org/licenses/lgpl-3.0.en.html) licence
