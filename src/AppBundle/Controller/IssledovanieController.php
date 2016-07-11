<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Form\IssledovanieTypeType;
use AppBundle\Form\IssledovanieObjectType;
use AppBundle\Form\PokazatelsIssledovaniyaType;
use AppBundle\Form\IssledovanieEditType;
use AppBundle\Entity\IssledovanieType;
use AppBundle\Entity\IssledovaniePokazatel;
use AppBundle\Entity\Organization;
use AppBundle\Entity\Issledovanie;
use AppBundle\Entity\IssledovanieObject;
use AppBundle\Entity\PokazatelsIssledovaniya;

/**
 * @Route("/issledovanie")
 * @Security("has_role('ROLE_ADMIN')")
*/

class IssledovanieController extends Controller
{    
    /**
     * @Route("/createType", name="create_type")
    */    
    public function createType(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $allTypes = $entityManager->getRepository('AppBundle:IssledovanieType')->findAll();
        
        $issledovanieType = new IssledovanieType();
        $form = $this->createForm(new IssledovanieTypeType(), $issledovanieType);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            if(!is_null($issledovanieType->getParent())){
                $issledovanieType->getParent()->setIsParent("1");
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($issledovanieType);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('issledovanie/createType.html.twig', array(
            'form' => $form->createView(),
            'allTypes' => $allTypes
        ));
    }

    /**
     * @Route("/showPodkat", name="show_podkat")
    */    
    public function showPodkat(Request $request)
    {
        $podkats = $this->getDoctrine()->getRepository('AppBundle:IssledovanieType')->showPodKat($request->request->get('parent_id'));

        return new Response(json_encode($podkats));
    }   
    
    /**
     * @Route("/{id}/showNamesIssl", name="show_names_issl")
     * @ParamConverter("organization", class="AppBundle:Organization")     
     */
    public function showNamesIssl(Organization $organization, Request $request)
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

        $issledovanie = $this->getDoctrine()->getRepository('AppBundle:Issledovanie')->issledovaniyaAll($organization->getId(), $dateOt, $dateDo);

        return $this->render('issledovanie/showNamesIssledovanie.html.twig', array(
            'issledovanie' => $issledovanie,
            'organization' => $organization->getId(),
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate
        ));

    }

    /**
     * @Route("/{id}/showPokazatels", name="show_pokazatels")
     * @ParamConverter("Issledovanie", class="AppBundle:Issledovanie")
     */
    public function showPokazatels(Issledovanie $issledovanie, Request $request)
    {
        $issledovanie = $this->getDoctrine()->getRepository('AppBundle:Issledovanie')->isslShowPokazatels($issledovanie->getId());

        return $this->render('issledovanie/showPokazatelsIssledovaniya.html.twig', array(
            'pokazatelsIssledovaniya' => $issledovanie
        ));
    }

    /**
     * @Route("/{id}/editIssledovanie", name="edit_issledovanie")
     * @ParamConverter("issledovanie", class="AppBundle:Issledovanie")
     */
    public function editIssledovanie(Issledovanie $issledovanie, Request $request)
    {
        $form = $this->createForm(new IssledovanieEditType(), $issledovanie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($issledovanie);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('issledovanie/editIssledovanie.html.twig', array(
            'form' => $form->createView(),
            'issledovanie' => $issledovanie
        ));
    }
    
    /**
     * @Route("/editPokazatel/{id}", name="edit_pokazatel")
     * @ParamConverter("PokazatelsIssledovaniya", class="AppBundle:PokazatelsIssledovaniya")
     */
    public function editPokazatel(PokazatelsIssledovaniya $pokazateslIssledovaniya, Request $request)
    {
        $form = $this->createForm(new PokazatelsIssledovaniyaType(), $pokazateslIssledovaniya);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pokazateslIssledovaniya);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('issledovanie/editPokazatel.html.twig', array(
            'form' => $form->createView(),
            'pokazateslIssledovaniya' => $pokazateslIssledovaniya
        ));
    }

    /**
     * @Route("/deletePokazatel/{id}", name="delete_pokazatel")
     * @ParamConverter("PokazatelsIssledovaniya", class="AppBundle:PokazatelsIssledovaniya")
     */
    public function deletePokazatel(PokazatelsIssledovaniya $pokazatelsIssledovaniya, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($pokazatelsIssledovaniya);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/deleteType/{id}", name="delete_issl_type")
     * @ParamConverter("issledovanieType", class="AppBundle:IssledovanieType")
     */
    public function deleteType(IssledovanieType $issledovanieType, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($issledovanieType);
        $em->flush();
        return $this->redirectToRoute('main_add_success');  
    }

    /**
     * @Route("/deleteIssledovanie/{id}", name="delete_issledovanie")
     * @ParamConverter("Issledovanie", class="AppBundle:Issledovanie")
     */
    public function deleteIssledovanie(Issledovanie $issledovanie, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($issledovanie);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/createIssledovanie/{id}", name="create_issledovanie")
     * @ParamConverter("organization", class="AppBundle:Organization")
     */
    public function createIssledovanie(Organization $organization, Request $request)
    {
        $issledovanie = new Issledovanie();
        $organization_name = $organization->getNameShort();
        $_COOKIE["org_id"] = $organization->getId();
        $issledovanie->setOrganization($organization);
        $form = $this->createForm(new IssledovanieType(), $issledovanie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            foreach($issledovanie->getPokazatelsIssledovaniy() as $val){
                $val->setIssledovanie($issledovanie);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($issledovanie);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('issledovanie/createIssledovanie.html.twig', array(
            'form' => $form->createView(),
            'organization_name' => $organization_name
        ));
    }

}
