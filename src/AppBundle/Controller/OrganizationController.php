<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\OrganizationType;
use AppBundle\Form\OrganizationEditType;
use AppBundle\Form\ObjectsType;
use AppBundle\Entity\Organization;
use AppBundle\Entity\RukovoditelZamestitel;
use AppBundle\Entity\Objects;


/**
 * @Route("/organization")
 * @Security("has_role('ROLE_ADMIN')")
*/

class OrganizationController extends Controller{
    
    /**
     * @Route("/newOrganization", name="organization_new")
    */    
    public function newOrganization(Request $request)
    {
        $organization = new Organization();
        
        $form = $this->createForm(new OrganizationType(), $organization);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            foreach($organization->getRukovoditel()->getRukovoditelZamestitel() as $val){
                $val->setRukovoditel($organization->getRukovoditel());
            }
            $organization->setPosition("1");

            $em = $this->getDoctrine()->getManager();
            $em->persist($organization);
            $em->flush();
            return $this->redirectToRoute('main_add_success');

        }

        return $this->render('organization/newOrganization.html.twig', array(
            'form' => $form->createView()
        ));

    }
    
    /**
     * @Route("/createObject", name="create_object")
     */
    public function createObject(Request $request)
    {
        $objects = $this->getDoctrine()->getManager()->getRepository('AppBundle:Objects')->findAll();
        
        $object = new Objects();    
        $form = $this->createForm(new ObjectsType(), $object);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($object);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('organization/createObject.html.twig', array(
            'form' => $form->createView(),
            'objects' => $objects,
        ));
    }  
    
    /**
     * @Route("/allNameOrganization", name="all_name_organization")
     */    
    public function allOrganizationsAction()
    {
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization();
        
        if(empty($organizations)){
            $organizations = "";
        }
        return $this->render('organization/allNameOrganizations.html.twig', array(
            'organizations' => $organizations
        ));

    }
    
    /**
     * @Route("/{id}", name="current_organization")
     * @ParamConverter("organization", class="AppBundle:Organization")
     */
    public function showCurrentOrganization(Organization $organization, Request $request)
    {
        //вывод всех параметров текущей организации
        $objects = $organization->getObjects();
        $mch = $organization->getOrganizationMCH();
        $rukovoditel = $this->getDoctrine()->getRepository('AppBundle:Rukovoditel')->findById($organization->getRukovoditel());       
        $org_ruk_zams = $this->getDoctrine()->getRepository('AppBundle:RukovoditelZamestitel')->findByRukovoditel($organization->getRukovoditel());
            
        $entityManager = $this->getDoctrine()->getManager();
        $proverkaAll = $entityManager->getRepository('AppBundle:Proverka')->proverkaAll($organization->getId(), date("Y"));   
        $proverkaIds = $entityManager->getRepository('AppBundle:Proverka')->proverkaIds($organization->getId(), date("Y"));   
        $dogovorAll = $entityManager->getRepository('AppBundle:Dogovor')->dogovorForMain($organization->getId(), date("Y"));
        $osugdenyiCount = $entityManager->getRepository('AppBundle:Osugdenyi')->countForMain($organization->getId(), date("Y"));
        $lichnyiSostavCount = $entityManager->getRepository('AppBundle:LichnyiSostav')->countForMain($organization->getId(), date("Y"));
        
        $dogovorDates = $entityManager->getRepository('AppBundle:Dogovor')->dogovorDates($organization->getId());
        $proverkiDates = $entityManager->getRepository('AppBundle:Proverka')->proverkiDates($organization->getId());
        $osugdenyiDates = $entityManager->getRepository('AppBundle:Osugdenyi')->osugdenyiDates($organization->getId());
        $lichnyiSostavDates = $entityManager->getRepository('AppBundle:LichnyiSostav')->lichnyiSostavDates($organization->getId());
        $zabolevaniyaDates = array_unique(array_merge($osugdenyiDates, $lichnyiSostavDates), SORT_REGULAR);
        
        $proverkaNevyp = $entityManager->getRepository('AppBundle:Proverka')->proverkaNevyp($organization->getId(), date("Y")); 
        $proverkaNakazaniya = $entityManager->getRepository('AppBundle:Proverka')->proverkaNakazaniya($organization->getId(), date("Y"));
        
        return $this->render('organization/currentOrganization.html.twig', 
                       array('organization' => $organization, 
                             'objects' => $objects,
                             'mch' => $mch,
                             'rukovoditel' => $rukovoditel,
                             'org_ruk_zams' => $org_ruk_zams,
                             'proverkaAll' => $proverkaAll,
                             'proverkaIds' => $proverkaIds,
                             'dogovorAll' => $dogovorAll,
                             'osugdenyiCount' => $osugdenyiCount,
                             'lichnyiSostavCount' => $lichnyiSostavCount,
                             'dogovorDates' => $dogovorDates,
                             'proverkiDates' => $proverkiDates,
                             'zabolevaniyaDates' => $zabolevaniyaDates,
                             'proverkaNevyp' => $proverkaNevyp,
                             'proverkaNakazaniya' => $proverkaNakazaniya,
                            ));
    }

    /**
     * @Route("/editOrganization/{id}", name="edit_organization")
     * @ParamConverter("organization", class="AppBundle:Organization")
     */
    public function editOrganization(Organization $organization, Request $request)
    {
        $editOrganization = new Organization();

        $editOrganization->setNameFull($organization->getNameFull());
        $editOrganization->setNameShort($organization->getNameShort());
        $editOrganization->setUrAddress($organization->getUrAddress());
        $editOrganization->setRukovoditel($organization->getRukovoditel());
        $editOrganization->setOrganizationMCH($organization->getOrganizationMCH());
        $rukZams = [];
        $i = 0;        
        
        foreach($organization->getRukovoditel()->getRukovoditelZamestitel() as $val){
           $rukZam = new RukovoditelZamestitel();
           $rukZam->setId($val->getId());
           $rukZam->setFio($val->getFio());
           $rukZam->setZvanie($val->getZvanie());
           $rukZam->setOblastDeaytelnosti($val->getOblastDeaytelnosti());
           $organization->getRukovoditel()->removeRukovoditelZamestitel($val);
           
           $rukZams[$i] = $rukZam;
           $i++;
        }
        
        $form = $this->createForm(new OrganizationEditType(), $editOrganization);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            if(!is_null($editOrganization->getRukovoditel()->getRukovoditelZamestitel())){
                foreach($editOrganization->getRukovoditel()->getRukovoditelZamestitel() as $val){
                    $val->setRukovoditel($editOrganization->getRukovoditel());
                }            
            } 
            
            if(!is_null($editOrganization->getRukovoditel()->getRukovoditelZamestitel())){
                foreach($editOrganization->getRukovoditel()->getRukovoditelZamestitel() as $val){
                    $organization->getRukovoditel()->addRukovoditelZamestitel($val);
                }
            }
            
            if(!is_null($editOrganization->getObjects())){
                foreach($editOrganization->getObjects() as $val){
                    $organization->addObject($val);
                }
            }    
            
            if(!is_null($editOrganization->getNameFull())){
                $organization->setNameFull($editOrganization->getNameFull());
            }  
            if(!is_null($editOrganization->getNameShort())){
                $organization->setNameShort($editOrganization->getNameShort());
            }  
            if(!is_null($editOrganization->getUrAddress())){
                $organization->setUrAddress($editOrganization->getUrAddress());
            }  
            if(!is_null($editOrganization->getRukovoditel())){
                $organization->setRukovoditel($editOrganization->getRukovoditel());
            } 
            if(!is_null($editOrganization->getOrganizationMCH())){
                $organization->setOrganizationMCH($editOrganization->getOrganizationMCH());
            } 

            foreach($rukZams as $val){
                $organization->getRukovoditel()->addRukovoditelZamestitel($val);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($organization);
            $em->flush();
            return $this->redirectToRoute('main_add_success');    
        }     

        return $this->render('organization/editOrganization.html.twig', array(
            'form' => $form->createView(),
            'organization' => $organization, 
            'organization_rukovoditel_zamestitel' => $rukZams,
        ));
    }

    /**
     * @Route("/deleteObjectOrganization/{org_id}/{obj_id}", name="delete_object_organization")
     */
    public function deleteObjectOrganization($org_id, $obj_id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $org = $entityManager->getRepository('AppBundle:Organization')->findOneById($org_id);
        $obj = $entityManager->getReference('AppBundle:Objects', $obj_id);
        $org->removeObject($obj);
        $entityManager->flush();
 
        $obj = $entityManager->getRepository('AppBundle:Objects')->findOneById($obj_id);
        $org = $entityManager->getReference('AppBundle:Organization', $org_id);
        $obj->removeOrganizationId($org);
        $entityManager->flush();
        return $this->redirectToRoute('main_add_success');
    }  
    
    /**
     * @Route("/deleteOrganization/{id}", name="delete_organization")
     * @ParamConverter("organization", class="AppBundle:Organization")
     */
    public function deleteOrganization(Organization $organization, Request $request)
    {
            
        $em = $this->getDoctrine()->getManager();
        $em->remove($organization);
        $em->flush();
        return $this->redirectToRoute('main_add_success');  
    }  
    
    /**
     * @Route("/deleteRukZam/{id}", name="delete_ruk_zam")
     * @ParamConverter("rukovoditelZamestitel", class="AppBundle:RukovoditelZamestitel")
     */
    public function deleteRukZam(RukovoditelZamestitel $rukovoditelZamestitel, Request $request)
    {
            
        $em = $this->getDoctrine()->getManager();
        $em->remove($rukovoditelZamestitel);
        $em->flush();
        return $this->redirectToRoute('main_add_success');  
    }

    /**
     * @Route("/deleteObject/{id}", name="delete_object")
     * @ParamConverter("objects", class="AppBundle:Objects")
     */
    public function deleteObject(Objects $objects, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($objects);
        $em->flush();
        return $this->redirectToRoute('main_add_success');  
    }
}