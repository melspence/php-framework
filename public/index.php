<?php
    
    declare(strict_types=1);
    
    use MelSpence\Framework\Http\Request;
    use MelSpence\Framework\Http\Response;
    
    require_once "../vendor/autoload.php";


// request received
    $request = Request::createFromGlobals();
    

//perform some logic

//send response
$content = '<h1>Hello World!</h1>';

$response = new Response(content: $content, status: 200, headers: []);

$response->send();