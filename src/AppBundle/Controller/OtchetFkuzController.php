<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/otchetFkuz")
 * @Security("has_role('ROLE_ADMIN')")
 */
class OtchetFkuzController extends Controller{

    /**
     * @Route("/", name="otchetFkuz")
     */
    public function dogovor(Request $request)
    {
        return $this->render('otchet/fkuz.html.twig');
    }

    /**
     * @Route("/nakazaniya", name="nakazaniya_fkuz")
     */
    public function nakazaniyaFkuz(Request $request)
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

        $narusheniyaPeoAtt = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazaniePeople("Аттестованый");
        $narusheniyaPeoVol = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazaniePeople("Вольный");
        $narusheniyaType1 = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieType("Неполное служебное");
        $narusheniyaType2 = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieType("Строгий выговор");
        $narusheniyaType3 = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieType("Выговор");
        $narusheniyaType4 = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieType("Замечание");
        $narusheniyaType5 = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieType("Ограничиться ранее");
        $narusheniyaType6 = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieType("Строго предупредить");
        $narusheniyaVidSlug = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieVid("Служебная проверка");
        $narusheniyaVidAdm = $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazanieVid("Административная проверка");
        $allNamefilial = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->findAll();

        return $this->render('otchet/ajax/proverka_nakazanie_fkuz.html.twig', array(
            'narusheniyaPeoAtt' => $narusheniyaPeoAtt,
            'narusheniyaPeoVol' => $narusheniyaPeoVol,
            'narusheniyaType1' => $narusheniyaType1,
            'narusheniyaType2' => $narusheniyaType2,
            'narusheniyaType3' => $narusheniyaType3,
            'narusheniyaType4' => $narusheniyaType4,
            'narusheniyaType5' => $narusheniyaType5,
            'narusheniyaType6' => $narusheniyaType6,
            'narusheniyaVidSlug' => $narusheniyaVidSlug,
            'narusheniyaVidAdm' => $narusheniyaVidAdm,
            'allNamefilial' => $allNamefilial,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }

    /**
     * @Route("/type", name="type_issledovanie_fkuz")
     */
    public function type(Request $request)
    {
        $fkuzs = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->findAll();
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

        $commonAll = $this->getDoctrine()->getRepository('AppBundle:IssledovanieFkuz')->commonAll($dateOt, $dateDo);

        return $this->render('otchet/ajax/issledovanie_type_fkuz.html.twig', array(
            'commonAll' => $commonAll,
            'fkuzs' => $fkuzs,
            'issledovanieTypes' => $issledovanieTypes,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }
}