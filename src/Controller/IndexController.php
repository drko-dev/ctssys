<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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
     * @Route("/api/get-users/", name="get-users", defaults={"_format": "json"})
     * @Method("GET")
     */
    public function getUsers()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('App:User')->findAll();
        $users = array();

        foreach ($user as $value) {
            $users[$value->getId()] = array(
                'id' => $value->getId(),
                'username' => $value->getUsername(),
                'email' => $value->getEmail(),                  
            );
        }

        return new JsonResponse($users);
    }

    /**
     * @Route("/json-demo/", name="json-demo")
     * @Method("GET")
     */
    public function jsonDemo()
    {   
      $myresponse = array(
        'content' => array( 
            array(
                'nombre' => 'Gustavito',
                'apellido' => 'Marcon'
            ),
            array(
                'nombre' => 'Constanza',
                'apellido' => 'Marcon'
            )
        )
      );
        
      return new JsonResponse($myresponse);
    }   

    /**
     * @Route("/api/contact/", name="contact")
     * @Method("POST")
     */
    public function contact(Request $request)
    {  
        if ($request->isMethod('POST')) {                  
           
            var_dump($request);
       
        }
        return new JsonResponse('ok', 201);
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

