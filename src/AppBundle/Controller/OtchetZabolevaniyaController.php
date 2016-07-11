<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Entity\Osugdenyi;

/**
 * @Route("/otchetZabolevaniya")
 * @Security("has_role('ROLE_ADMIN')")
*/
class OtchetZabolevaniyaController extends Controller{
    
    /**
     * @Route("/", name="zabolevaniya")
    */    
    public function zabolevaniya(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $lichnyiSostav = $entityManager->getRepository('AppBundle:LichnyiSostav')->onOrganization($dateOt, $dateDo);
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->onOrganization($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/zabolevaniya.html.twig', array(
            'lichnyiSostav' => $lichnyiSostav,
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate
        ));
    }
    
    /**
     * @Route("/kontaktnye", name="kontaktnye")
    */    
    public function kontaktnye(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $kontaktnyeOnOrganization = $entityManager->getRepository('AppBundle:Osugdenyi')->kontaktnyeOnOrganization($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_kontaktnye.html.twig', array(
            'kontaktnyeOnOrganization' => $kontaktnyeOnOrganization,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate            
        ));
    }
    
    /**
     * @Route("/otryad", name="otryad")
    */    
    public function otryad(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->orgProgivaniya($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_otryad.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }  
    
    /**
     * @Route("/otryadKontakt", name="otryad_kontakt")
    */    
    public function otryadKontakt(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $orgKontaktnyeProgivaniya = $entityManager->getRepository('AppBundle:Osugdenyi')->kontaktnyeOrgProgivaniya($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_kontaktnye_otryad.html.twig', array(
            'orgKontaktnyeProgivaniya' => $orgKontaktnyeProgivaniya,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }   
    
    /**
     * @Route("/mbt", name="mbt")
    */    
    public function mbt(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->mbt($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_mbt.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }
    
    /**
     * @Route("/viyavlenie", name="viyavlenie")
    */    
    public function viyavlenie(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->viyavlenie($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_viyavlenie.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }      
    
    /**
     * @Route("/recidiv", name="recidiv")
    */    
    public function recidiv(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->recidiv($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_recidiv.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }  
    
    /**
     * @Route("/postupilIs", name="postupil_is")
    */    
    public function postupilIs(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->postupilIs($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_postupil_is.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }  
    
    /**
     * @Route("/addressCommon", name="address_common")
    */    
    public function addressCommon(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->addressCommon($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_address_common.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }  
    
    /**
     * @Route("/ochag", name="ochag")
    */    
    public function ochag(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->ochag($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization();
        $ochags = $this->getDoctrine()->getRepository('AppBundle:Ochag')->findAll();  
        
        return $this->render('otchet/ajax/zabolevaniya_ochag.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'ochags' => $ochags,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }  

    /**
     * @Route("/patologiya", name="patologiya")
    */    
    public function patologiya(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $osugdeniy = $entityManager->getRepository('AppBundle:Osugdenyi')->patologiya($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization();  
        
        return $this->render('otchet/ajax/zabolevaniya_patologiya.html.twig', array(
            'osugdeniy' => $osugdeniy,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }      

    /**
     * @Route("/povtorno", name="povtorno")
    */    
    public function povtorno(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $onOrganizationPovtornye = $entityManager->getRepository('AppBundle:Osugdenyi')->onOrganizationPovtornye($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 

        $result = []; $i=0;

        foreach($onOrganizationPovtornye as $key => $val){
            $result[$i] = $val["name_full"]; $i++;
        }

        $onOrganizationPovtornye = array_count_values($result);

        return $this->render('otchet/ajax/zabolevaniya_povtornye.html.twig', array(
            'onOrganizationPovtornye' => $onOrganizationPovtornye,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }

    /**
     * @Route("/izKontaktnyh", name="iz_kontaktnyh")
    */    
    public function izKontaktnyh(Request $request)
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

        $entityManager = $this->getDoctrine()->getManager();
        $onOrganizationIzKontaktnyh = $entityManager->getRepository('AppBundle:Osugdenyi')->onOrganizationIzKontaktnyh($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        return $this->render('otchet/ajax/zabolevaniya_iz_kontaktnyh.html.twig', array(
            'onOrganizationIzKontaktnyh' => $onOrganizationIzKontaktnyh,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateOtTemplate   
        ));
    }    
}