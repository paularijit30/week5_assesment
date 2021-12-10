<?php



$request = $_SERVER['REQUEST_URI'];
// echo $request;

switch ($request) {
    case '/' :
        require __DIR__ . '/index.php';
        break;
    case '' :
        require __DIR__ . '/index.php';
        break;
    case '/breakfast' :
        require __DIR__ . '/breakfast.php';
        break;
    case '/lunch' :
        require __DIR__ . '/lunch.php';
        break;
    case '/dinner' :
        require __DIR__ . '/dinner.php';
        break;
        
}

?>