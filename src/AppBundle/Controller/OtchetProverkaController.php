<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/otchetProverka")
 * @Security("has_role('ROLE_ADMIN')")
*/
class OtchetProverkaController extends Controller{

    /**
     * @Route("/", name="otchet_proverka")
    */    
    public function proverka(Request $request)
    {   
        return $this->render('otchet/proverka.html.twig');
    }
    
    /**
     * @Route("/common", name="common_proverka")
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

        $entityManager = $this->getDoctrine()->getManager();
        $onTypeAndOrganizationQuantity = $entityManager->getRepository('AppBundle:Proverka')->proverki($dateOt, $dateDo);
        $proverkaType = $entityManager->getRepository('AppBundle:Proverka')->allTypesProverka();
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        
        return $this->render('otchet/ajax/proverka_type.html.twig', array(
            'onTypeAndOrganizationQuantity' => $onTypeAndOrganizationQuantity,
            'organizations' => $organizations,
            'proverkaType' => $proverkaType,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }
    
    /**
     * @Route("/narusheniya", name="narusheniya")
    */    
    public function narusheniya(Request $request)
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
        $isprNarusheniyaOrgTypeQuantity = $entityManager->getRepository('AppBundle:Proverka')->narusheniya($dateOt, $dateDo);
        
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        $proverkaType = $entityManager->getRepository('AppBundle:Proverka')->allTypesProverka();

        $proverka_temp = [];$i=0;
 
        foreach($organizations as $org){
            foreach($isprNarusheniyaOrgTypeQuantity as $nar){
                if($org->getId() == $nar["id"]){
                    foreach($proverkaType as $proverka){
                        if($proverka["name"] == $nar["name"]){
                            $name = $proverka['name'];
                            $otmetka_ustraneniya = $nar['otmetka_ustraneniya'];
                            $org_id = $org->getId();
                            $org_name = $org->getNameShort();
                            $proverka_temp[$org_name][$name]["otmetka_ustraneniya"][$otmetka_ustraneniya] = $proverka["name"];
                            $proverka_temp[$org_name][$name]["otmetka_ustraneniya"][$otmetka_ustraneniya] = $nar[1];
                            $i++;
                        }
                    }
                    

                }
            }
        }

        return $this->render('otchet/ajax/proverka_narusheniya.html.twig', array(
            'proverkaType' => $proverkaType,
            'proverka_temp' => $proverka_temp,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }

    /**
     * @Route("/narusheniyaObj", name="narusheniya_obj")
    */    
    public function narusheniyaObj(Request $request)
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
        $narusheniyaObj = $entityManager->getRepository('AppBundle:Proverka')->narusheniyaObj($dateOt, $dateDo);
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization(); 
        $objects = $this->getDoctrine()->getRepository('AppBundle:Objects')->findAll();

        return $this->render('otchet/ajax/proverka_narusheniya_obj.html.twig', array(
            'narusheniyaObj' => $narusheniyaObj,
            'objects' => $objects,
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }
    
    /**
     * @Route("/nakazaniya", name="nakazaniya")
    */    
    public function nakazanie(Request $request)
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
        $organizations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Organization')->allNameOrganization();         

        return $this->render('otchet/ajax/proverka_nakazanie.html.twig', array(
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
            'organizations' => $organizations,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }
    
    /**
     * @Route("/narusheniyaAll", name="narusheniya_all")
    */    
    public function narusheniyaAll(Request $request)
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
        $narusheniyaAll = $entityManager->getRepository('AppBundle:Proverka')->narusheniyaAll($dateOt, $dateDo);

        return $this->render('otchet/ajax/proverka_narusheniya_all.html.twig', array(
            'narusheniyaAll' => $narusheniyaAll,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }

    /**
     * @Route("/proverkaNakazaniya", name="proverka_nakazaniya")
     */
    public function proverkaNakazaniya(Request $request)
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

        $proverkaNakazaniya = $this->getDoctrine()->getRepository('AppBundle:Proverka')->proverkaNakazaniyaAll($dateOt, $dateDo);

        return $this->render('otchet/proverkaNakazaniyaAll.html.twig', array(
            'proverkaNakazaniya' => $proverkaNakazaniya,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }

    /**
     * @Route("/proverkaNevyp", name="proverka_nevyp")
     */
    public function proverkaNevyp(Request $request)
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

        $proverkaNevypAll = $this->getDoctrine()->getRepository('AppBundle:Proverka')->proverkaNevypAll($dateOt, $dateDo);

        return $this->render('otchet/proverkaNevypAll.html.twig', array(
            'proverkaNevypAll' => $proverkaNevypAll,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }

    /**
     * @Route("/proverkaNarusheniyaVnimanie", name="proverka_narusheniya_vnimanie")
     */
    public function proverkaNarusheniyaVnimanie(Request $request)
    {
        if(is_null($request->request->get('dateOt'))){
            $dateOt = date("Y-m-d", mktime(0, 0, 0, 1, 1, date("Y")));
            $dateOtTemplate = date("d.m.Y", mktime(0, 0, 0, 1, 1, date("Y")));
        }else{
            $dateOt = date_create($request->request->get('dateOt'))->format('Y-m-d');
            $dateOtTemplate = date_create($request->request->get('dateOt'))->format('d.m.Y');
        }
        if(is_null($request->request->get('dateDo'))){
            $dateDo = date("Y-m-d", mktime(0, 0, 0, 12, 31, date("Y")));
            $dateDoTemplate = date("d.m.Y", mktime(0, 0, 0, 12, 31, date("Y")));
        }else{
            $dateDo = date_create($request->request->get('dateDo'))->format('Y-m-d');
            $dateDoTemplate = date_create($request->request->get('dateDo'))->format('d.m.Y');
        }

        $proverkaNarusheniyaVnimanie = $this->getDoctrine()->getRepository('AppBundle:Proverka')->proverkaNarusheniyaVnimanie($dateOt, $dateDo);

        return $this->render('otchet/proverkaNarusheniyaVnimanie.html.twig', array(
            'proverkaNarusheniyaVnimanie' => $proverkaNarusheniyaVnimanie,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));
    }
}