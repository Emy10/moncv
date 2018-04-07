<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use AppBundle\Form\ExperienceType;
use AppBundle\Entity\Experience;

/**
 * @Route("/experience")
 */
class ExperienceController extends Controller
{
    /**
    * @Route("/create", name="create_experience")
    * @Template()
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function createAction()
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);
        
        return array(
          'entity' => $experience,
          'form' => $form->createView(),
        );
    }
     
    /**
     * @Route("/create_valid", name="validate_create_experience")
     * @Method("POST")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function validateExperienceAction(Request $request)
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $eManager = $this->getDoctrine()->getManager();
            $eManager->persist($experience);
            $eManager->flush();
            
            return $this->redirectToRoute('homepage'); //la page vers laquelle je veux me diriger
        }
        
        return $this->redirectToRoute('create_experience', array(
            'entity' => $experience,
            'form' => $form->createView(),
            ));
    }
      
    /**
     * @Route("/edit/{id}", name="edit_experience")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id)
    {
        $eManager = $this->getDoctrine()->getManager();
        $experience = $eManager->getRepository("AppBundle:Experience")->FindOneBy(["id" => $id]);
        $form = $this->createForm(ExperienceType::class, $experience);
        
        return array(
          'entity' => $experience,
          'form' => $form->createView(),
        );
    }
     
    /**
    * @Route("/edit_valid/{id}", name="validate_edit_experience")
    * @Method("POST")
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function validateEditExperienceAction(Request $request, $id)
    {
        $eManager = $this->getDoctrine()->getManager();
        $experience = $eManager->getRepository("AppBundle:Experience")->FindOneBy(["id" => $id]);
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $eManager->persist($experience);
            $eManager->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->redirectToRoute('create_experience', array(
            'entity' => $experience,
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/delete/{id}", name="delete_experience")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction($id)
    {
        $eManager = $this->getDoctrine()->getManager();
        $experience = $eManager->getRepository("AppBundle:Experience")->FindOneBy(["id" => $id]);
        $form = $this->createForm(ExperienceType::class, $experience);
        $eManager->remove($experience);
        $eManager->flush();
        return $this->redirectToRoute('homepage');
        
        return array(
          'entity' => $experience,
          'form' => $form->createView(),
        );
    }
}
