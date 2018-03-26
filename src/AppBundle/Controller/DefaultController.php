<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; //rajouté
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/emy/{name}/{firstname}", name="homepage-emy")
     * @param Request $request the request
     * @return array
     * @Template()
     */
    public function indexAction($name='gelas', $firstname='emelyne', Request $request) //si on veut appeler notre fichier autrement que index, on change indexAction par totoAction
    {
        $forms = $this->getDoctrine()->getRepository("AppBundle:Formation")->findAll();
        $loisirs = $this->getDoctrine()->getRepository('AppBundle:Loisirs')->findAll();
        //$loisirs = $this->getDoctrine()->getRepository('AppBundle:Loisirs')->findBy(array('name' => 'D')); pour afficher seulement le nom des loisirs commençant par D
        
        return array(
            'name'=> $name, 'firstname'=> $firstname,
            'formations' => $forms,
            'loisirs' => $loisirs,
        );
    }
    
    /**
     * @Route("/demo", name="homepage")
     * @Template() 
     */
    public function demoAction(Request $request) //si on veut appeler notre fichier autrement que index, on change indexAction par totoAction
    {
        
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
        
        return array(); //rajouté
    }
    
     /**
     * @Route("/insert", name="formations-emy")
     * @Template() 
     */
    public function insertAction() 
    {
        
       $form = new Formation(); //instanciation de l'objet $form
       $form->setName('Ma formation');
       
       $eManager = $this->getDoctrine()->getManager(); //méthode qui va chercher l'objet EntityManager de Dotrine utilisé pour la sauvegarde de l'objet Formation
       
       $eManager->persist($form); //dit à Doctrine de s'occuper de l'objet $form (n'exécute pas la requête)
       
       $eManager->flush(); //exécute la requête (sauvegarde l'objet)
 
    }
    
}

