<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/" , name="home")
     */
    public function indexAction()
    {
        return $this->render('@AcmeTest/Default/index.html.twig');
    }
    /**
     * @Route("/blogs" , name="blogs")
     */
    public function listblogs()
    {
        return $this->render('@AcmeTest/Default/listblogs.html.twig');
    }
    /**
     * @Route("/blogs/", name="singleblog", methods="GET")
     */
    public function singleblog(Request $request)
    {
        return $this->render('@AcmeTest/Default/single-blog.html.twig');
    }
    /**
     * @Route("/add-blog/", name="add_blog")
     */
    public function addpost_blog(Request $request)
    {
        if($request->isMethod('POST')){
            dump($_POST);
//            echo htmlspecialchars($_POST['content']);
            die();
        }
        return $this->render('@AcmeTest/Default/add-post-blog.html.twig');
    }
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {
        if($request->isMethod('POST')){
            return $this->redirectToRoute('blogs');
        }
        return $this->render('@AcmeTest/Default/login.html.twig');
    }
}
