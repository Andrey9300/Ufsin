<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/otchetDogovor")
 * @Security("has_role('ROLE_ADMIN')")
*/
class OtchetDogovorController extends Controller{

    /**
     * @Route("/common", name="common_dogovor")
    */    
    public function common(Request $request)
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
        
        $dogovors = $this->getDoctrine()->getRepository('AppBundle:Dogovor')->onOrganization($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization();         
        $dogovorsType = $this->getDoctrine()->getRepository('AppBundle:DogovorType')->findAll();
        
        return $this->render('otchet/dogovor.html.twig', array(
            'dogovors' => $dogovors,
            'organizations' => $organizations,
            'dogovorsType' => $dogovorsType,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }
}