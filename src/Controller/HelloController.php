<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;




class HelloController extends AbstractController {
    
    /**
     *@Route({
        "fr": "/bonjour",
        "en": "/hello"}) 
     */
    function hello(Request $request) {
        $locale = $request->getLocale();
        return new Response('Hello, locale : ' . $locale);
    }

    
}