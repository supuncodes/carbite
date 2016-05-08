<?php
require_once("carbite.php");

Carbite::GET("/hello/@name",function($req,$res){
	$res->SetJSON("Hello ". $req->Params()->name);
});

Carbite::Start();
?>