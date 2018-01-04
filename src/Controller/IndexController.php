<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Route("/{route}", name="vue_sub_pages", requirements={"route"="demo|hello|home"})
     */
    public function index(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/index/", name="demo")
     */
    public function demo(Request $request)
    {   
        $this->mail('gustavito');
        return $this->render('default/index.html.twig');
    }    

    public function mail($name)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('gustavitomarcon@gmail.com')
            ->setTo('gustavitomarcon@gmail.com')
            ->setBody(
                $this->renderView(
                    'emails/registration.html.twig',
                    array('name' => $name)
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        $mailer = $this->get('mailer');         
        return $mailer->send($message);
    }
}
