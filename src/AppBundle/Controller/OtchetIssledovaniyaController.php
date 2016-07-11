<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/otchetIssledovaniya")
 * @Security("has_role('ROLE_ADMIN')")
*/
class OtchetIssledovaniyaController extends Controller{
    
    /**
     * @Route("/", name="issledovanie")
    */    
    public function issledovanie(Request $request)
    {   
        return $this->render('otchet/issledovanie.html.twig');
    }

    /**
     * @Route("/type", name="type_issledovanie")
    */    
    public function type(Request $request)
    {
        $organizations = $this->getDoctrine()->getRepository('AppBundle:Organization')->allNameOrganization();
        $issledovanieTypes = $this->getDoctrine()->getRepository('AppBundle:IssledovanieType')->findAll();

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

        $commonAll = $this->getDoctrine()->getRepository('AppBundle:Issledovanie')->commonAll($dateOt, $dateDo);

        return $this->render('otchet/ajax/issledovanie_type.html.twig', array(
            'commonAll' => $commonAll,
            'organizations' => $organizations,
            'issledovanieTypes' => $issledovanieTypes,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }
}