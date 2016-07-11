<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Form\DogovorTypeType;
use AppBundle\Form\DogovorTypeForm;
use AppBundle\Form\DogovorType as FormDogovorType;
use AppBundle\Entity\DogovorType;
use AppBundle\Entity\Dogovor;
use AppBundle\Entity\Organization;


/**
 * @Route("/dogovor")
 * @Security("has_role('ROLE_ADMIN')")
*/
class DogovorController extends Controller
{
    /**
     * @Route("/createType", name="create_dogovor_type")
    */    
    public function createType(Request $request)
    {
        $dogovorTypes = $this->getDoctrine()->getRepository('AppBundle:DogovorType')->findAll();
        
        $dogovorType = new DogovorType();
        $form = $this->createForm(new DogovorTypeType(), $dogovorType);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($dogovorType);
            $em->flush();
            return $this->redirectToRoute('main_add_success');

        }

        return $this->render('dogovor/createType.html.twig', array(
            'form' => $form->createView(),
            'dogovorTypes' => $dogovorTypes
        ));
    }

    /**
     * @Route("/createDogovor/{id}", name="create_dogovor")
     * @ParamConverter("organization", class="AppBundle:Organization")
     */
    public function createDogovor(Organization $organization, Request $request)
    {
        //форма добавления договора
        $dogovor = new Dogovor();
        $dogovor->setOrganization($organization);

        $form = $this->createForm(new FormDogovorType(), $dogovor);
        $form->handleRequest($request);
        $organization_name = $organization->getNameShort();

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($dogovor);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('dogovor/createDogovor.html.twig', array(
            'form' => $form->createView(),
            'organization_name' => $organization_name,
        ));
    }

    /**
     * @Route("/editDogovor/{id}", name="edit_dogovor")
     * @ParamConverter("dogovor", class="AppBundle:Dogovor")
     */
    public function editDogovor(Dogovor $dogovor, Request $request)
    {
        $form = $this->createForm(DogovorTypeForm::class, $dogovor);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            if(!is_null($dogovor->getDate())){
                $dogovor->setDate(date_create_from_format('j-M-Y', date_format($dogovor->getDate(), 'j-M-Y')));
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($dogovor);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('dogovor/editDogovor.html.twig', array(
            'form' => $form->createView(),
            'dogovor' => $dogovor
        ));
    }

    /**
     * @Route("/deleteDogovor/{id}", name="delete_dogovor")
     * @ParamConverter("dogovor", class="AppBundle:Dogovor")
     */
    public function deleteDogovor(Dogovor $dogovor, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($dogovor);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/deleteType/{id}", name="delete_dogovor_type")
     * @ParamConverter("dogovorType", class="AppBundle:DogovorType")
     */
    public function deleteType(DogovorType $dogovorType, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($dogovorType);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/showNamesDogovor/{id}", name="show_names_dogovor")
     * @ParamConverter("organization", class="AppBundle:Organization")     
     */
    public function showNamesDogovor(Organization $organization, Request $request)
    {
        if(is_null($request->request->get('dateOt'))){
            $dateOt = date("Y-m-d", mktime(0, 0, 0, 1, 1, date("Y")));
            $dateOtTemplate = date("d.m.Y", mktime(0, 0, 0, 1, 1, date("Y")));
        }else{
            $dateOt = date_create($request->request->get('dateOt'))->format('Y-m-d');
            $dateOtTemplate = date_create($request->request->get('dateOt'))->format('d.m.Y');
        }
        if(is_null($request->request->get('dateDo'))){
            $dateDo = date("Y-m-d");
            $dateDoTemplate = date("d.m.Y");
        }else{
            $dateDo = date_create($request->request->get('dateDo'))->format('Y-m-d');
            $dateDoTemplate = date_create($request->request->get('dateDo'))->format('d.m.Y');
        }
        
        $dogovor = $this->getDoctrine()->getRepository('AppBundle:Dogovor')->dogovorAll($organization->getId(), $dateOt, $dateDo);
        
        return $this->render('dogovor/showNamesDogovor.html.twig', array(
            'dogovor' => $dogovor,
            'organization' => $organization->getId(),
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));

    }

    /**
     * @Route("/sortDogovor/{org_id}/{date}", name="sort_dogovor")
     */
    public function sortDogovor($org_id, $date, Request $request)
    {
        $dogovorOnDate = $this->getDoctrine()->getRepository('AppBundle:Dogovor')->dogovorForMain($org_id, $date);

        return $this->render('organization/dogovorOnDate.html.twig', array(
            'dogovorOnDate' => $dogovorOnDate,
        ));
    }

}
