<?php

namespace Mpk\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //Get the entity manager
        $em = $this->getDoctrine()->getManager();
        //Get the first post (for test purpose)
        $post1 = $em->getRepository('MpkCmsBundle:Post')->find(1);
        return $this->render('MpkCmsBundle:Cms:index.html.twig', array('post1' => $post1));
    }
    
    public function singlePageAction()
    {
        //Get the entity manager
        $em = $this->getDoctrine()->getManager();
        //Get the first post (for test purpose)
        $post1 = $em->getRepository('MpkCmsBundle:Post')->find(1);
        return $this->render('MpkCmsBundle:Cms:single_page.html.twig', array('post1' => $post1));
    }
    
    public function servicesAction()
    {
        return $this->render('MpkCmsBundle:Cms:services.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('MpkCmsBundle:Cms:contact.html.twig');
    }
}
