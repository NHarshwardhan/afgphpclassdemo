<?php

    require './Calculator.php';

    $option = array('uri'=>'urn:Calculator');

    $server  = new SoapServer('calculator.wsdl',$option);

    $server->setClass('Calculator');

    $server->handle();


?>