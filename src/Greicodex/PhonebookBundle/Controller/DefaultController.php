<?php

namespace Greicodex\PhonebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @param string $name
     * @return Response
     */
    public function indexAction($name='Javier')
    {
        if ($this->get('security.context')->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('contact');
        }
        return $this->redirectToRoute('fos_user_security_login');
    }
    
}
