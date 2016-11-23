<?php

/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 19.11.16
 * Time: 17:39
 */


namespace  Acme\HelloBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction($name)

{

return new  Response('<html><body>Hello'.$name.'!</body></html>');

}

}