<?php
	declare(strict_types=1); // public/index.php
	use MelSpence\Framework\Http\Request;
	use MelSpence\Framework\Http\Response;
	
	require_once dirname(__DIR__) . '/vendor/autoload.php';

// request received
	$request = Request::createFromGlobals();
	

// perform some logic

// send response (string of content)
	$content =  '<h1>Hello World</h1>';
	
	$response = new Response($content, status: 200, headers: []);
	
	$response->send();
