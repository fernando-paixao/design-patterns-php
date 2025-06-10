<?php

require_once 'Subject.php';
require_once 'RealSubject.php';
require_once 'Proxy.php';

// Client code
echo "Proxy Pattern Example\n\n";

$realSubject = new RealSubject();
$proxy = new Proxy($realSubject);

// Client uses the proxy instead of the real subject
echo "Client: Executing request through proxy:\n";
$proxy->request();

?>