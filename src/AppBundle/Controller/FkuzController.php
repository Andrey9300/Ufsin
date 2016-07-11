<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\ProverkaFkuz;
use AppBundle\Entity\ProverkaNakazanieFkuz;
use AppBundle\Entity\Fkuz;
use AppBundle\Entity\License;
use AppBundle\Entity\SanZakl;
use AppBundle\Entity\DogovorFkuz;
use AppBundle\Entity\PokazatelsIssledovaniyaFkuz;
use AppBundle\Entity\IssledovanieFkuz;
use AppBundle\Form\ProverkaFkuzType;
use AppBundle\Form\ProverkaNakazanieFkuzType;
use AppBundle\Form\FkuzType;
use AppBundle\Form\PokazatelsIssledovaniyaFkuzType;
use AppBundle\Form\LicenseType;
use AppBundle\Form\SanZaklType;
use AppBundle\Form\DogovorFkuzType;
use AppBundle\Form\IssledovanieFkuzType;
use AppBundle\Form\IssledovanieEditFkuzType;

/**
 * @Route("/fkuz")
 * @Security("has_role('ROLE_ADMIN')")
*/
class FkuzController extends Controller
{
    
    /**
     * @Route("/createFkuz", name="create_fkuz")
     */
    public function createFkuz(Request $request)
    {
        $fkuz = new Fkuz();

        $form = $this->createForm(new FkuzType(), $fkuz);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($fkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/createFkuz.html.twig', array(
            'form' => $form->createView()
        ));

    }

    /**
     * @Route("/editFkuz/{id}", name="edit_fkuz")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")
     */
    public function editFkuz(Fkuz $fkuz, Request $request)
    {
        $form = $this->createForm(new FkuzType(), $fkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($fkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editFkuz.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/deleteFkuz/{id}", name="delete_fkuz")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")
     */
    public function deleteFkuz(Fkuz $fkuz, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($fkuz);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/{id}", name="fkuz")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")
     */
    public function showCurrentFilial(Fkuz $fkuz, Request $request)
    {
        $rukovoditel = $this->getDoctrine()->getRepository('AppBundle:Rukovoditel')->findById($fkuz->getRukovoditel());

        $rukZams = $this->getDoctrine()->getRepository('AppBundle:RukovoditelZamestitel')->findByRukovoditel($fkuz->getRukovoditel());
        $proverkaNakazaniyaFkuz =  $this->getDoctrine()->getRepository('AppBundle:ProverkaFkuz')->nakazaniya($fkuz->getId(), date("Y"));

        if($fkuz->getId() == "1"){

            $licenses = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->licenses();
            $sanZakls = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->sanZakls();
            $dogovorFkuz = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->dogovorFkuz();
            $proverkaFkuz = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->proverkaFkuz();
            $licenseDates = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->licenseDates();
            $sanZaklDates = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->sanZaklDates();
            $dogovorDates = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->dogovorDates();
            $proverkaFkuzDates = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->proverkaFkuzDates();

            return $this->render('fkuz/showFkuz.html.twig', array(
                'fkuz' => $fkuz,
                'rukovoditel' => $rukovoditel,
                'rukZams' => $rukZams,
                'licenses' => $licenses,
                'sanZakls' => $sanZakls,
                'dogovorFkuz' => $dogovorFkuz,
                'proverkaFkuz' => $proverkaFkuz,
                'licenseDates' => $licenseDates,
                'sanZaklDates' => $sanZaklDates,
                'dogovorDates' => $dogovorDates,
                'proverkaFkuzDates' => $proverkaFkuzDates,
                'proverkaNakazaniyaFkuz' => $proverkaNakazaniyaFkuz,
            ));

        }else {

            return $this->render('fkuz/showFilial.html.twig', array(
                'fkuz' => $fkuz,
                'rukovoditel' => $rukovoditel,
                'rukZams' => $rukZams,
                'proverkaNakazaniyaFkuz' => $proverkaNakazaniyaFkuz,
            ));

        }
    }

    /**
     * @Route("/allNameFilial", name="all_name_filial")
     */    
    public function allNameFilialAction()
    {
        $filialNames = $this->getDoctrine()->getManager()->getRepository('AppBundle:Fkuz')->findAll();

        return $this->render('fkuz/allFilialNames.html.twig', array(
            'filialNames' => $filialNames
        ));

    }

    
    
    /**
     * @Route("/createLicense/{id}", name="create_license")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")     
     */    
    public function createLicense(Fkuz $fkuz, Request $request)
    {
        $license = new License();    
        $license->setFkuz($fkuz);
        $form = $this->createForm(new LicenseType(), $license);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($license);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('fkuz/createLicense.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/editLicense/{id}", name="edit_license")
     * @ParamConverter("license", class="AppBundle:License")
     */
    public function editLicense(License $license, Request $request)
    {
        $form = $this->createForm(new LicenseType(), $license);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $license->setDate(date_create_from_format('j-M-Y', date_format($license->getDate(), 'j-M-Y')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($license);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editLicense.html.twig', array(
            'form' => $form->createView(),
            'license' => $license
        ));
    }

    /**
     * @Route("/deleteLicense/{id}", name="delete_license")
     * @ParamConverter("license", class="AppBundle:License")
     */
    public function deleteLicense(License $license, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($license);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/sortLicenseFkuz/{date}", name="sort_license_fkuz")
     */
    public function sortLicenseFkuz($date, Request $request)
    {
        $licenseOnDate = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->licenseOnDate($date);

        return $this->render('fkuz/licenseOnDate.html.twig', array(
            'licenseOnDate' => $licenseOnDate,
        ));

    }



    /**
     * @Route("/createSanZakl/{id}", name="create_san_zakl")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")     
     */    
    public function createSanZakl(Fkuz $fkuz, Request $request)
    {
        $sanZakl = new SanZakl();    
        $sanZakl->setFkuz($fkuz);
        $form = $this->createForm(new SanZaklType(), $sanZakl);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($sanZakl);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('fkuz/createSanZakl.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/editSanZakl/{id}", name="edit_san_zakl")
     * @ParamConverter("sanZakl", class="AppBundle:SanZakl")
     */
    public function editSanZakl(SanZakl $sanZakl, Request $request)
    {
        $form = $this->createForm(new SanZaklType(), $sanZakl);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $sanZakl->setDate(date_create_from_format('j-M-Y', date_format($sanZakl->getDate(), 'j-M-Y')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($sanZakl);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editSanZakl.html.twig', array(
            'form' => $form->createView(),
            'sanZakl' => $sanZakl
        ));
    }

    /**
     * @Route("/deleteSanZakl/{id}", name="delete_san_zakl")
     * @ParamConverter("sanZakl", class="AppBundle:SanZakl")
     */
    public function deleteSanZakl(SanZakl $sanZakl, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($sanZakl);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/sortSanZaklFkuz/{date}", name="sort_san_zakl_fkuz")
     */
    public function sortSanZaklFkuz($date, Request $request)
    {
        $sanZaklOnDate = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->sanZaklOnDate($date);

        return $this->render('fkuz/sanZaklOnDate.html.twig', array(
            'sanZaklOnDate' => $sanZaklOnDate,
        ));

    }



    /**
     * @Route("/createDogovorFkuz/{id}", name="create_dogovor_fkuz")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")     
     */    
    public function createDogovorFkuz(Fkuz $fkuz, Request $request)
    {
        $dogovorFkuz = new DogovorFkuz();    
        $dogovorFkuz->setFkuz($fkuz);
        $form = $this->createForm(new DogovorFkuzType(), $dogovorFkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($dogovorFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }
        
        return $this->render('fkuz/createDogovor.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/editDogovorFkuz/{id}", name="edit_dogovor_fkuz")
     * @ParamConverter("dogovorFkuz", class="AppBundle:DogovorFkuz")
     */
    public function editDogovorFkuz(DogovorFkuz $dogovorFkuz, Request $request)
    {
        $form = $this->createForm(new DogovorFkuzType(), $dogovorFkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $dogovorFkuz->setDate(date_create_from_format('j-M-Y', date_format($dogovorFkuz->getDate(), 'j-M-Y')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($dogovorFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editDogovorFkuz.html.twig', array(
            'form' => $form->createView(),
            'dogovorFkuz' => $dogovorFkuz
        ));
    }

    /**
     * @Route("/deleteDogovorFkuz/{id}", name="delete_dogovor_fkuz")
     * @ParamConverter("dogovorFkuz", class="AppBundle:DogovorFkuz")
     */
    public function deleteDogovorFkuz(DogovorFkuz $dogovorFkuz, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($dogovorFkuz);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/sortDogovorFkuz/{date}", name="sort_dogovor_fkuz")
     */
    public function sortDogovorFkuz($date, Request $request)
    {
        $dogovorOnDate = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->dogovorOnDate($date);

        return $this->render('fkuz/dogovorOnDate.html.twig', array(
            'dogovorOnDate' => $dogovorOnDate,
        ));

    }



    /**
     * @Route("/createIssledovanie/{id}", name="create_issledovanie_fkuz")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")
     */
    public function createIssledovanie(Fkuz $fkuz, Request $request)
    {
        $issledovanieFkuz = new IssledovanieFkuz();
        $fkuz_name = $fkuz->getNameShort();
        $issledovanieFkuz->setFkuz($fkuz);
        $form = $this->createForm(new IssledovanieFkuzType(), $issledovanieFkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            foreach($issledovanieFkuz->getPokazatelsIssledovaniyFkuz() as $val){
                $val->setIssledovanieFkuz($issledovanieFkuz);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($issledovanieFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/createIssledovanieFkuz.html.twig', array(
            'form' => $form->createView(),
            'fkuz_name' => $fkuz_name
        ));
    }

    /**
     * @Route("/editIssledovanie/{id}", name="edit_issledovanie_fkuz")
     * @ParamConverter("issledovanieFkuz", class="AppBundle:IssledovanieFkuz")
     */
    public function editIssledovanie(IssledovanieFkuz $issledovanieFkuz, Request $request)
    {
        $form = $this->createForm(new IssledovanieEditFkuzType(), $issledovanieFkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($issledovanieFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editIssledovanie.html.twig', array(
            'form' => $form->createView(),
            'issledovanieFkuz' => $issledovanieFkuz
        ));
    }

    /**
     * @Route("/deleteIssledovanie/{id}", name="delete_issledovanie_fkuz")
     * @ParamConverter("IssledovanieFkuz", class="AppBundle:IssledovanieFkuz")
     */
    public function deleteIssledovanie(IssledovanieFkuz $issledovanieFkuz, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($issledovanieFkuz);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/editPokazatel/{id}", name="edit_pokazatel_fkuz")
     * @ParamConverter("PokazatelsIssledovaniyaFkuz", class="AppBundle:PokazatelsIssledovaniyaFkuz")
     */
    public function editPokazatel(PokazatelsIssledovaniyaFkuz $pokazateslIssledovaniyaFkuz, Request $request)
    {
        $form = $this->createForm(new PokazatelsIssledovaniyaFkuzType(), $pokazateslIssledovaniyaFkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pokazateslIssledovaniyaFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editPokazatel.html.twig', array(
            'form' => $form->createView(),
            'pokazateslIssledovaniyaFkuz' => $pokazateslIssledovaniyaFkuz
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
     * @Route("/showNamesIssledovanie/{id}", name="show_names_issl_fkuz")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")
     */
    public function showNamesIssl(Fkuz $fkuz, Request $request)
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

        $issledovanieFkuz = $this->getDoctrine()->getRepository('AppBundle:IssledovanieFkuz')->issledovaniyaAll($fkuz->getId(), $dateOt, $dateDo);

        return $this->render('fkuz/showNamesIssledovanieFkuz.html.twig', array(
            'issledovanieFkuz' => $issledovanieFkuz,
            'fkuz' => $fkuz->getId(),
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate
        ));

    }

    /**
     * @Route("/showPokazatels/{id}", name="show_pokazatels_fkuz")
     * @ParamConverter("IssledovanieFkuz", class="AppBundle:IssledovanieFkuz")
     */
    public function showPokazatels(IssledovanieFkuz $issledovanieFkuz, Request $request)
    {
        $issledovanieFkuz = $this->getDoctrine()->getRepository('AppBundle:IssledovanieFkuz')->isslShowPokazatels($issledovanieFkuz->getId());

        return $this->render('fkuz/showPokazatelsIssledovaniya.html.twig', array(
            'pokazatelsIssledovaniya' => $issledovanieFkuz
        ));
    }



    /**
     * @Route("/createProverkaFkuz/{id}/", name="create_proverka_fkuz")
     * @ParamConverter("fkuz", class="AppBundle:Fkuz")
     */
    public function createProverkaFkuz(Fkuz $fkuz, Request $request)
    {
        //форма добавления договора
        $proverkaFkuz = new ProverkaFkuz();
        $proverkaFkuz->setFkuz($fkuz);

        $form = $this->createForm(new ProverkaFkuzType(), $proverkaFkuz);
        $form->handleRequest($request);
        $fkuz_name = $fkuz->getNameShort();

        if ($form->isSubmitted()) {
            foreach($proverkaFkuz->getProverkaNakazanieFkuz() as $val){
                $val->setProverkaFkuz($proverkaFkuz);
                $val->setDate(date_create_from_format('j-M-Y', date_format($val->getDate(), 'j-M-Y')));
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($proverkaFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/createProverkaFkuz.html.twig', array(
            'form' => $form->createView(),
            'fkuz_name' => $fkuz_name,
            'proverkaFkuz' => $proverkaFkuz
        ));
    }

    /**
     * @Route("/editProverkaFkuz/{id}", name="edit_proverka_fkuz")
     * @ParamConverter("proverkaFkuz", class="AppBundle:ProverkaFkuz")
     */
    public function editProverkaFkuz(ProverkaFkuz $proverkaFkuz, Request $request)
    {
        $form = $this->createForm(new ProverkaFkuzType(), $proverkaFkuz);
        $form = $this->createForm(new ProverkaFkuzType(), $proverkaFkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $proverkaFkuz->setDate(date_create_from_format('j-M-Y', date_format($proverkaFkuz->getDate(), 'j-M-Y')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($proverkaFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editProverkaFkuz.html.twig', array(
            'form' => $form->createView(),
            'proverkaFkuz' => $proverkaFkuz
        ));
    }

    /**
     * @Route("/sortProverkaFkuz/{date}", name="sort_proverka_fkuz")     
     */    
    public function sortProverkaFkuz($date, Request $request)
    {        
        $proverkarOnDate = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->proverkaFkuzOnDate($date);

        return $this->render('fkuz/proverkarOnDate.html.twig', array(
            'proverkarOnDate' => $proverkarOnDate,
        ));

    }

    /**
     * @Route("/showNakazaniyaFkuz/{id}/", name="show_nakazaniya_fkuz")
     * @ParamConverter("proverkaFkuz", class="AppBundle:ProverkaFkuz")
     */
    public function showNakazaniyaFkuz(ProverkaFkuz $proverkaFkuz, Request $request)
    {
        $nakazaniyaFkuz = $this->getDoctrine()->getRepository('AppBundle:ProverkaNakazanieFkuz')->findBy(array('proverkaFkuz' => $proverkaFkuz->getId()));

        return $this->render('fkuz/showNakazaniyaFkuz.html.twig', array(
            'nakazaniyaFkuz' => $nakazaniyaFkuz
        ));

    }
    
    /**
     * @Route("/editNakazanieFkuz/{id}/", name="edit_nakazanie_fkuz")
     * @ParamConverter("proverkaNakazanieFkuz", class="AppBundle:ProverkaNakazanieFkuz")
     */
    public function editNakazanieFkuz(ProverkaNakazanieFkuz $proverkaNakazanieFkuz, Request $request)
    {
        $form = $this->createForm(new ProverkaNakazanieFkuzType(), $proverkaNakazanieFkuz);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $proverkaNakazanieFkuz->setDate(date_create_from_format('j-M-Y', date_format($proverkaNakazanieFkuz->getDate(), 'j-M-Y')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($proverkaNakazanieFkuz);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('fkuz/editNakazanieFkuz.html.twig', array(
            'form' => $form->createView(),
            'proverkaNakazanieFkuz' => $proverkaNakazanieFkuz
        ));
    }

    /**
     * @Route("/deleteNakazanieFkuz/{id}", name="delete_nakazanie_fkuz")
     * @ParamConverter("proverkaNakazanieFkuz", class="AppBundle:ProverkaNakazanieFkuz")
     */
    public function deleteNakazanieFkuz(ProverkaNakazanieFkuz $proverkaNakazanieFkuz, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($proverkaNakazanieFkuz);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }
    
    /**
     * @Route("/deleteProverkaFkuz/{id}", name="delete_proverka_fkuz")
     * @ParamConverter("proverkaFkuz", class="AppBundle:ProverkaFkuz")
     */
    public function deleteProverkaFkuz(ProverkaFkuz $proverkaFkuz, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($proverkaFkuz);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/proverkaNakazaniyaFkuz/{id}", name="proverka_nakazaniya_fkuz")
     */
    public function proverkaNakazaniyaFkuz($id, Request $request)
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

        $proverkaNakazaniyaFkuz = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->proverkaNakazaniyaFkuzAll($id, $dateOt, $dateDo);
        $fkuz = $this->getDoctrine()->getRepository('AppBundle:Fkuz')->findOneBy(array('id' => $id));

        return $this->render('fkuz/proverkaNakazaniyaFkuzAll.html.twig', array(
            'proverkaNakazaniyaFkuz' => $proverkaNakazaniyaFkuz,
            'fkuz' => $fkuz,
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate,
        ));

    }
}
