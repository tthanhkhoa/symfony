<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/test1")
     */
    public function PostAction()
    {
        return $this->render('@AcmeTest/test.html.twig');
    }
}
