<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Entity\Ochag;
use AppBundle\Entity\LichnyiSostav;
use AppBundle\Entity\Osugdenyi;
use AppBundle\Entity\DatesFLG;
use AppBundle\Entity\SoputPatol;
use AppBundle\Entity\Kontaktnyi;
use AppBundle\Form\LichnyiSostavType;
use AppBundle\Form\OsugdenyiType;
use AppBundle\Form\OchagType;


/**
 * @Route("/zabolevaniya")
 * @Security("has_role('ROLE_ADMIN')")
*/
class ZabolevaniyaController extends Controller
{
    
    /**
     * @Route("/createZabolevanieLichnyi", name="create_zabolevanie_lichnyi")
     */
    public function createZabolevanieLichnyi(Request $request)
    {
        //форма добавления исследования
        $lichnyiSostav = new LichnyiSostav();    
        $form = $this->createForm(new LichnyiSostavType(), $lichnyiSostav);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($lichnyiSostav);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('zabolevaniya/createZabolevanieLichnyi.html.twig', array(
            'form' => $form->createView(),
        ));
    }   
  
    /**
     * @Route("/createZabolevanieOsugdenyi", name="create_zabolevanie_osugdenyi")
     */
    public function createZabolevanieOsugdenyi(Request $request)
    {
        //форма добавления исследования
        $osugdenyi = new Osugdenyi();    
        $form = $this->createForm(new OsugdenyiType(), $osugdenyi);
        $form->handleRequest($request);

        $kontakts = [];
        $in_ochag = [];
        
        if ($form->isSubmitted()) {

            $entityManager = $this->getDoctrine()->getManager();
            $is_kontakt = $entityManager->getRepository('AppBundle:Kontaktnyi')->is_kontakt($osugdenyi->getOrganization(), $osugdenyi->getFio(), $osugdenyi->getDateBirthday()->format('Y-m-d'));
            
            $is_ochag = $entityManager->getRepository('AppBundle:Kontaktnyi')->in_ochag($osugdenyi->getOrganization(), $osugdenyi->getFio(), $osugdenyi->getDateBirthday()->format('Y-m-d'));
                        
            $is_ill = $entityManager->getRepository('AppBundle:Osugdenyi')->is_ill($osugdenyi->getOrganization(), $osugdenyi->getFio(), $osugdenyi->getDateBirthday()->format('Y-m-d'));
            
            foreach($osugdenyi->getKontaktnyi() as $val){
                $kontakts[] = $entityManager->getRepository('AppBundle:Kontaktnyi')->is_kontakt($osugdenyi->getOrganization(), $val->getFio(), $val->getDateBirthday()->format('Y-m-d'));
            }
            
            foreach($osugdenyi->getKontaktnyi() as $val){
                $in_ochag[] = $entityManager->getRepository('AppBundle:Kontaktnyi')->in_ochag($osugdenyi->getOrganization(), $val->getFio(), $val->getDateBirthday()->format('Y-m-d'));
            }
            
            if($is_kontakt){
                $osugdenyi->setIsKontakt("1");
            }

            if(!is_null($osugdenyi->getDatesFLG())){
                foreach($osugdenyi->getDatesFLG() as $val){
                    $val->setOsugdenyi($osugdenyi);
                }
            }
            
            if(!is_null($osugdenyi->getSoputPatol())){
                foreach($osugdenyi->getSoputPatol() as $val){
                    $val->setOsugdenyi($osugdenyi);
                }
            }
            
            if(!is_null($osugdenyi->getKontaktnyi())){
                foreach($osugdenyi->getKontaktnyi() as $val){
                    $val->setOsugdenyi($osugdenyi);
                }
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($osugdenyi);
            $em->flush();
            return $this->render('main/addSuccess.html.twig', array(
                'is_ill' => $is_ill,            
                'is_kontakt' => $is_kontakt,
                'is_ochag' => $is_ochag,
                'kontakts' => $kontakts,
                'in_ochag' => $in_ochag,
            ));
        }
        
        return $this->render('zabolevaniya/createZabolevanieOsugdenyi.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/createZabolevanieOchag", name="create_zabolevanie_ochag")
     */
    public function createZabolevanieOchag(Request $request)
    {
        //форма добавления исследования
        $ochag = new Ochag();    
        $form = $this->createForm(new OchagType(), $ochag);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
                        
            foreach($ochag->getOsugdenyi() as $val){
                $val->setOchag($ochag);
            }
            
            foreach($ochag->getKontaktnyi() as $val){
                $val->setOchag($ochag);
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($ochag);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('zabolevaniya/createZabolevanieOchag.html.twig', array(
            'form' => $form->createView(),
        ));
    }       

    /**
     * @Route("/showLichnyiSostavs", name="show_lichnyi_sostavs")   
     */    
    public function showLichnyiSostavs(Request $request)
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
        
        $lichnyiSostavs = $this->getDoctrine()->getRepository('AppBundle:LichnyiSostav')->allLichnyiSostav($dateOt, $dateDo);
        
        return $this->render('zabolevaniya/showLichnyiSostavs.html.twig', array(
            'lichnyiSostavs' => $lichnyiSostavs,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate
        ));

    }
    
    /**
     * @Route("/lichnyi/{id}", name="show_card_lichnyi")
     * @ParamConverter("lichnyiSostav", class="AppBundle:LichnyiSostav")
    */    
    public function showCardLichnyiSostav(LichnyiSostav $lichnyiSostav, Request $request)
    {   
		$organization_name = $lichnyiSostav->getOrganization()->getNameShort();
		
        return $this->render('zabolevaniya/lichnyi_sostav_card.html.twig', array(
            'lichnyiSostav' => $lichnyiSostav,
            'organization_name' => $organization_name,
        ));
    }  
    
    /**
     * @Route("/editLichnyiSostav/{id}", name="edit_lichnyi_sostav")
     * @ParamConverter("lichnyiSostav", class="AppBundle:LichnyiSostav")
     */
    public function editLichnyiSostav(LichnyiSostav $lichnyiSostav, Request $request)
    {
        $form = $this->createForm(new LichnyiSostavType(), $lichnyiSostav);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            if(!is_null($lichnyiSostav->getDateBirthday())){
                $lichnyiSostav->setDateBirthday(date_create_from_format('j-M-Y', date_format($lichnyiSostav->getDateBirthday(), 'j-M-Y')));
            }
            
            if(!is_null($lichnyiSostav->getDataExtrIzv())){
                $lichnyiSostav->setDataExtrIzv(date_create_from_format('j-M-Y', date_format($lichnyiSostav->getDataExtrIzv(), 'j-M-Y')));
            }
            
            if(!is_null($lichnyiSostav->getDataZabolevaniya())){
                $lichnyiSostav->setDataZabolevaniya(date_create_from_format('j-M-Y', date_format($lichnyiSostav->getDataZabolevaniya(), 'j-M-Y')));
            }
            
            if(!is_null($lichnyiSostav->getDataObracheniya())){
                $lichnyiSostav->setDataObracheniya(date_create_from_format('j-M-Y', date_format($lichnyiSostav->getDataObracheniya(), 'j-M-Y')));
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($lichnyiSostav);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('zabolevaniya/editLichnyiSostav.html.twig', array(
            'form' => $form->createView(),
            'lichnyiSostav' => $lichnyiSostav
        ));
    } 
    
    /**
     * @Route("/deleteLichnyiSostav/{id}", name="delete_lichnyi_sostav")
     * @ParamConverter("lichnyiSostav", class="AppBundle:LichnyiSostav")
    */    
    public function deleteLichnyiSostav(LichnyiSostav $lichnyiSostav, Request $request)
    {   

        $em = $this->getDoctrine()->getManager();
        $em->remove($lichnyiSostav);
        $em->flush();
        return $this->redirectToRoute('main_add_success');

    }  
    
    /**
     * @Route("/showOsugdenyis", name="show_osugdenyis")   
     */    
    public function showOsugdenyis(Request $request)
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
        
        $osugdenyis = $this->getDoctrine()->getRepository('AppBundle:Osugdenyi')->allWithNameOrg($dateOt, $dateDo);
        
        return $this->render('zabolevaniya/showOsugdenyis.html.twig', array(
            'osugdenyis' => $osugdenyis,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate
        ));

    }
    
    /**
     * @Route("/osugdenyi/{id}", name="show_card_osugdenyi")
     * @ParamConverter("osugdenyi", class="AppBundle:Osugdenyi")
    */    
    public function showCardOsugdenyi(Osugdenyi $osugdenyi, Request $request)
    {   
        $organization_name = $osugdenyi->getOrganization()->getNameShort();

        return $this->render('zabolevaniya/osugdenyi_card.html.twig', array(
            'osugdenyi' => $osugdenyi,
            'kontakts' => $osugdenyi->getKontaktnyi(),
            'datesFLG' => $osugdenyi->getDatesFLG(),
            'soputPatol' => $osugdenyi->getSoputPatol(),
            'organization_name' => $organization_name,
        ));
    }   
    
    /**
     * @Route("/editOsugdenyi/{id}", name="edit_osugdenyi")
     * @ParamConverter("osugdenyi", class="AppBundle:Osugdenyi")
     */
    public function editOsugdenyi(Osugdenyi $osugdenyi, Request $request)
    {
        $editOsugdenyi = new Osugdenyi();

        $editOsugdenyi->setOrganization($osugdenyi->getOrganization());
        $editOsugdenyi->setGender($osugdenyi->getGender());
        $editOsugdenyi->setFio($osugdenyi->getFio());
        $editOsugdenyi->setDateBirthday($osugdenyi->getDateBirthday());
        $editOsugdenyi->setPlaceJob($osugdenyi->getPlaceJob());
        $editOsugdenyi->setPlaceStudy($osugdenyi->getPlaceStudy());
        $editOsugdenyi->setPlaceProgivaniya($osugdenyi->getPlaceProgivaniya());
        $editOsugdenyi->setDateViyavleniya($osugdenyi->getDateViyavleniya());
        $editOsugdenyi->setDateVzyatiyaNaUchet($osugdenyi->getDateVzyatiyaNaUchet());
        $editOsugdenyi->setMbt($osugdenyi->getMbt());
        $editOsugdenyi->setDateGospit($osugdenyi->getDateGospit());
        $editOsugdenyi->setDatePerevoda($osugdenyi->getDatePerevoda());
        $editOsugdenyi->setDateZaklDezin($osugdenyi->getDateZaklDezin());
        $editOsugdenyi->setDatePostVOrg($osugdenyi->getDatePostVOrg());
        $editOsugdenyi->setDateObr($osugdenyi->getDateObr());
        $editOsugdenyi->setViyavlen($osugdenyi->getViyavlen());
        $editOsugdenyi->setRecidiv($osugdenyi->getRecidiv());
        $editOsugdenyi->setPostupilIz($osugdenyi->getPostupilIz());
        $editOsugdenyi->setAddressCommon($osugdenyi->getAddressCommon());
        $editOsugdenyi->setAddressPropiska($osugdenyi->getAddressPropiska());
        $editOsugdenyi->setOchag($osugdenyi->getOchag());
        
        $form = $this->createForm(new OsugdenyiType(), $editOsugdenyi);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            if(!is_null($editOsugdenyi->getDatesFLG())){
                foreach($editOsugdenyi->getDatesFLG() as $val){
                    $val->setOsugdenyi($osugdenyi);
                }            
            }            
            
            if(!is_null($editOsugdenyi->getSoputPatol())){
                foreach($editOsugdenyi->getSoputPatol() as $val){
                    $val->setOsugdenyi($osugdenyi);
                }            
            }            
            
            if(!is_null($editOsugdenyi->getKontaktnyi())){
                foreach($editOsugdenyi->getKontaktnyi() as $val){
                    $val->setOsugdenyi($osugdenyi);
                }
            }
            
            if(!is_null($editOsugdenyi->getDatesFLG())){
                foreach($editOsugdenyi->getDatesFLG() as $val){
                    $osugdenyi->addDatesFLG($val);
                }
            }
            
            if(!is_null($editOsugdenyi->getSoputPatol())){
                foreach($editOsugdenyi->getSoputPatol() as $val){
                    $osugdenyi->addSoputPatol($val);
                }
            }
            
            if(!is_null($editOsugdenyi->getKontaktnyi())){
                foreach($editOsugdenyi->getKontaktnyi() as $val){
                    $osugdenyi->addKontaktnyus($val);
                }
            }
            
            if(!is_null($editOsugdenyi->getDateBirthday())){
                $osugdenyi->setDateBirthday(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDateBirthday(), 'j-M-Y')));
            }
            if(!is_null($editOsugdenyi->getDateViyavleniya())){
                $osugdenyi->setDateViyavleniya(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDateViyavleniya(), 'j-M-Y')));
            }
            if(!is_null($editOsugdenyi->getDateVzyatiyaNaUchet())){
                $osugdenyi->setDateVzyatiyaNaUchet(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDateVzyatiyaNaUchet(), 'j-M-Y')));
            }
            if(!is_null($editOsugdenyi->getDateGospit())){
                $osugdenyi->setDateGospit(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDateGospit(), 'j-M-Y')));
            }
            if(!is_null($editOsugdenyi->getDatePerevoda())){
                $osugdenyi->setDatePerevoda(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDatePerevoda(), 'j-M-Y')));
            }
            if(!is_null($editOsugdenyi->getDateZaklDezin())){
                $osugdenyi->setDateZaklDezin(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDateZaklDezin(), 'j-M-Y')));
            }
            if(!is_null($editOsugdenyi->getDatePostVOrg())){
                $osugdenyi->setDatePostVOrg(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDatePostVOrg(), 'j-M-Y')));
            }
            if(!is_null($editOsugdenyi->getDateObr())){
                $osugdenyi->setDateObr(date_create_from_format('j-M-Y', date_format($editOsugdenyi->getDateObr(), 'j-M-Y')));
            }         
            
            if(!is_null($editOsugdenyi->getOrganization())){
                $osugdenyi->setOrganization($editOsugdenyi->getOrganization());
            }            
            if(!is_null($editOsugdenyi->getGender())){
                $osugdenyi->setGender($editOsugdenyi->getGender());
            }            
            if(!is_null($editOsugdenyi->getFio())){
                $osugdenyi->setFio($editOsugdenyi->getFio());
            }            
            if(!is_null($editOsugdenyi->getPlaceJob())){
                $osugdenyi->setPlaceJob($editOsugdenyi->getPlaceJob());
            }            
            if(!is_null($editOsugdenyi->getPlaceStudy())){
                $osugdenyi->setPlaceStudy($editOsugdenyi->getPlaceStudy());
            }            
            if(!is_null($editOsugdenyi->getPlaceProgivaniya())){
                $osugdenyi->setPlaceProgivaniya($editOsugdenyi->getPlaceProgivaniya());
            }            
            if(!is_null($editOsugdenyi->getMbt())){
                $osugdenyi->setMbt($editOsugdenyi->getMbt());
            }            
            if(!is_null($editOsugdenyi->getViyavlen())){
                $osugdenyi->setViyavlen($editOsugdenyi->getViyavlen());
            }            
            if(!is_null($editOsugdenyi->getRecidiv())){
                $osugdenyi->setRecidiv($editOsugdenyi->getRecidiv());
            }            
            if(!is_null($editOsugdenyi->getPostupilIz())){
                $osugdenyi->setPostupilIz($editOsugdenyi->getPostupilIz());
            }            
            if(!is_null($editOsugdenyi->getAddressCommon())){
                $osugdenyi->setAddressCommon($editOsugdenyi->getAddressCommon());
            }            
            if(!is_null($editOsugdenyi->getAddressPropiska())){
                $osugdenyi->setAddressPropiska($editOsugdenyi->getAddressPropiska());
            }            
            if(!is_null($editOsugdenyi->getOchag())){
                $osugdenyi->setOchag($editOsugdenyi->getOchag());
            }                      
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($osugdenyi);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('zabolevaniya/editOsugdenyi.html.twig', array(
            'form' => $form->createView(),
            'osugdenyi' => $osugdenyi,
        ));
    }
    
    /**
     * @Route("/deleteOsugdenyi/{id}", name="delete_osugdenyi")
     * @ParamConverter("osugdenyi", class="AppBundle:Osugdenyi")
    */    
    public function deleteOsugdenyi(Osugdenyi $osugdenyi, Request $request)
    {   

        $em = $this->getDoctrine()->getManager();
        $em->remove($osugdenyi);
        $em->flush();
        return $this->redirectToRoute('main_add_success');

    } 

    /**
     * @Route("/deleteOsugdenyiFlg/{id}", name="delete_osugdenyi_flg")
     * @ParamConverter("datesFlg", class="AppBundle:DatesFLG")
    */    
    public function deleteOsugdenyiFlg(DatesFLG $datesFlg, Request $request)
    {   

        $em = $this->getDoctrine()->getManager();
        $em->remove($datesFlg);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }
    
    /**
     * @Route("/deleteOsugdenyiSoputPatol/{id}", name="delete_osugdenyi_soput_patol")
     * @ParamConverter("soputPatol", class="AppBundle:SoputPatol")
    */    
    public function deleteOsugdenyiSoputPatol(SoputPatol $soputPatol, Request $request)
    {   

        $em = $this->getDoctrine()->getManager();
        $em->remove($soputPatol);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }
    
    /**
     * @Route("/deleteOsugdenyiKontaktnyi/{id}", name="delete_osugdenyi_kontaktnyi")
     * @ParamConverter("kontaktnyi", class="AppBundle:Kontaktnyi")
    */    
    public function deleteOsugdenyiKontaktnyi(Kontaktnyi $kontaktnyi, Request $request)
    {   

        $em = $this->getDoctrine()->getManager();
        $em->remove($kontaktnyi);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }
    
    /**
     * @Route("/showOchags", name="show_ochags")   
     */    
    public function showOchags(Request $request)
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
        
        $ochags = $this->getDoctrine()->getRepository('AppBundle:Osugdenyi')->allOchags($dateOt, $dateDo);
        
        return $this->render('zabolevaniya/showOchags.html.twig', array(
            'ochags' => $ochags,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate
        ));
    }  
    
    /**
     * @Route("/ochag/{id}", name="show_card_ochag")
     * @ParamConverter("ochag", class="AppBundle:Ochag")
    */    
    public function showCardOchag(Ochag $ochag, Request $request)
    {   
        $organization_name = $ochag->getOrganization()->getNameShort();

        return $this->render('zabolevaniya/ochag_card.html.twig', array(
            'ochag' => $ochag,
            'ochag_osugdenye' => $ochag->getOsugdenyi(),
            'ochag_kontaktnye' => $ochag->getKontaktnyi(),
            'organization_name' => $organization_name,
        ));
    } 
    
    /**
     * @Route("/editOchag/{id}", name="edit_ochag")
     * @ParamConverter("ochag", class="AppBundle:Ochag")
    */    
    public function editOchag(Ochag $ochag, Request $request)
    {
        $editOchag = new Ochag();

        $editOchag->setOrganization($ochag->getOrganization());
        $editOchag->setName($ochag->getName());
        $editOchag->setDate($ochag->getDate());
        $editOchag->setPlace($ochag->getPlace());

        $form = $this->createForm(new OchagType(), $editOchag);
        $form->handleRequest($request);    
        
        if ($form->isSubmitted()) {

            if(!is_null($editOchag->getKontaktnyi())){
                foreach($editOchag->getKontaktnyi() as $val){
                    $val->setOchag($ochag);
                }            
            }            

            if(!is_null($editOchag->getKontaktnyi())){
                foreach($editOchag->getKontaktnyi() as $val){
                    $ochag->addKontaktnyus($val);
                }
            }

            if(!is_null($editOchag->getDate())){
                $ochag->setDate(date_create_from_format('j-M-Y', date_format($editOchag->getDate(), 'j-M-Y')));
            }
            
            if(!is_null($editOchag->getOrganization())){
                $ochag->setOrganization($editOchag->getOrganization());
            } 
            if(!is_null($editOchag->getName())){
                $ochag->setName($editOchag->getName());
            } 
            if(!is_null($editOchag->getDate())){
                $ochag->setDate($editOchag->getDate());
            } 
            if(!is_null($editOchag->getPlace())){
                $ochag->setPlace($editOchag->getPlace());
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($ochag);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('zabolevaniya/editOchag.html.twig', array(
            'form' => $form->createView(),
            'ochag' => $ochag,
        ));
    }  

    /**
     * @Route("/deleteOchag/{id}", name="delete_ochag")
     * @ParamConverter("ochag", class="AppBundle:Ochag")
    */  
    public function deleteOchag(Ochag $ochag, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($ochag);
        $em->flush();
        return $this->redirectToRoute('main_add_success');  
    }

    /**
     * @Route("/sortZabolveniya/{org_id}/{date}", name="sort_zabolevaniya")
     */
    public function sortZabolveniya($org_id, $date, Request $request)
    {
        $osugdenyiCount = $this->getDoctrine()->getRepository('AppBundle:Osugdenyi')->countForMain($org_id, $date);
        $lichnyiSostavCount = $this->getDoctrine()->getRepository('AppBundle:LichnyiSostav')->countForMain($org_id, $date);

        return $this->render('zabolevaniya/zabolevaniyaOnDate.html.twig', array(
            'osugdenyiCount' => $osugdenyiCount,
            'lichnyiSostavCount' => $lichnyiSostavCount,
        ));

    }
}
