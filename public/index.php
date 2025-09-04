<?php
    
    declare(strict_types=1);
    
    use MelSpence\Framework\Http\Kernel;
    use MelSpence\Framework\Http\Request;
    use MelSpence\Framework\Http\Response;
    
    require_once "../vendor/autoload.php";


// request received
    $request = Request::createFromGlobals();


//perform some logic

//send response

    $kernel = new Kernel;

$response = $kernel->handle($request);
$response->send();