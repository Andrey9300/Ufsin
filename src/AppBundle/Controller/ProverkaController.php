<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ProverkaType;
use AppBundle\Form\ProverkaNarushenieType;
use AppBundle\Form\ProverkaNakazanieType;
use AppBundle\Entity\Proverka;
use AppBundle\Entity\Organization;

/**
 * @Route("/proverka")
 * @Security("has_role('ROLE_ADMIN')")
 */
class ProverkaController extends Controller{

    /**
     * @Route("/createProverka/{id}", name="create_proverka")
     * @ParamConverter("organization", class="AppBundle:Organization")
     */
    public function createProverka(Organization $organization, Request $request)
    {
        //форма добавления договора
        $proverka = new Proverka();
        $proverka->setOrganization($organization);
        $_COOKIE["org_id"] = $organization->getId();

        $form = $this->createForm(new ProverkaType(), $proverka);
        $form->handleRequest($request);
        $organization_name = $organization->getNameShort();

        if ($form->isSubmitted()) {

            foreach($proverka->getProverkaNarushenie() as $val){
                $val->setProverka($proverka);
                $val->setDateUstraneniya(date_create_from_format('j-M-Y', date_format($val->getDateUstraneniya(), 'j-M-Y')));
            }
            foreach($proverka->getProverkaNakazanie() as $val){
                $val->setProverka($proverka);
                $val->setDate(date_create_from_format('j-M-Y', date_format($val->getDate(), 'j-M-Y')));
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($proverka);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('proverka/createProverka.html.twig', array(
            'form' => $form->createView(),
            'organization_name' => $organization_name,
            'proverka' => $proverka
        ));
    }

    /**
     * @Route("/showNamesProverka/{id}", name="show_names_proverka")
     * @ParamConverter("organization", class="AppBundle:Organization")
     */
    public function showNamesProverka(Organization $organization, Request $request)
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

        $proverka = $this->getDoctrine()->getRepository('AppBundle:Proverka')->proverkiAll($organization->getId(), $dateOt, $dateDo);

        return $this->render('proverka/showNamesProverka.html.twig', array(
            'proverka' => $proverka,
            'organization' => $organization->getId(),
            'dateOt' => $dateOtTemplate,
            'dateDo' => $dateDoTemplate
        ));

    }

    /**
     * @Route("/showNarusheniya/{id}", name="show_narusheniya")
     * @ParamConverter("proverka", class="AppBundle:Proverka")
     */
    public function showNarusheniya(Proverka $proverka, Request $request)
    {
        $narusheniya = $this->getDoctrine()->getRepository('AppBundle:Proverka')->proverkaEditNarusheniya($proverka->getId());

        return $this->render('proverka/showNarusheniya.html.twig', array(
            'narusheniya' => $narusheniya
        ));

    }

    /**
     * @Route("/showNakazaniya/{id}", name="show_nakazaniya")
     * @ParamConverter("proverka", class="AppBundle:Proverka")
     */
    public function showNakazaniya(Proverka $proverka, Request $request)
    {
        $nakazaniya = $this->getDoctrine()->getRepository('AppBundle:ProverkaNakazanie')->findBy(array('proverka' => $proverka->getId()));

        return $this->render('proverka/showNakazaniya.html.twig', array(
            'nakazaniya' => $nakazaniya
        ));

    }

    /**
     * @Route("/sortProverki/{org_id}/{date}", name="sort_proverki")
     */
    public function sortProverki($org_id, $date, Request $request)
    {
        $proverkaAll = $this->getDoctrine()->getRepository('AppBundle:Proverka')->proverkaAll($org_id, $date);
        $proverkaIds = $this->getDoctrine()->getRepository('AppBundle:Proverka')->proverkaIds($org_id, $date);

        return $this->render('proverka/proverkiOnDate.html.twig', array(
            'proverkaAll' => $proverkaAll,
            'proverkaIds' => $proverkaIds,
        ));
    }

    /**
     * @Route("/deleteProverka/{id}", name="delete_proverka")
     * @ParamConverter("proverka", class="AppBundle:Proverka")
     */
    public function deleteProverka(Proverka $proverka, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($proverka);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/changeOtmetka/{id}", name="change_otmetka")
     * @ParamConverter("proverkaNarushenie", class="AppBundle:ProverkaNarushenie")
     */
    public function changeOtmetka(ProverkaNarushenie $proverkaNarushenie, Request $request)
    {
        $proverkaNarushenie->setOtmetkaUstraneniya($_POST["otmetka"]);
        $em = $this->getDoctrine()->getManager();
        $em->persist($proverkaNarushenie);
        $em->flush();
        return new Response('1');
    }

    /**
     * @Route("/deleteNarushenie/{id}", name="delete_narushenie")
     * @ParamConverter("proverkaNarushenie", class="AppBundle:ProverkaNarushenie")
     */
    public function deleteNarushenie(ProverkaNarushenie $proverkaNarushenie, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($proverkaNarushenie);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/editNarushenie/{id}", name="edit_narushenie")
     * @ParamConverter("proverkaNarushenie", class="AppBundle:ProverkaNarushenie")
     */
    public function editNarushenie(ProverkaNarushenie $proverkaNarushenie, Request $request)
    {
        $_COOKIE["org_id"] = $proverkaNarushenie->getProverka()->getOrganization();
        $form = $this->createForm(new ProverkaNarushenieType(), $proverkaNarushenie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $proverkaNarushenie->setDateUstraneniya(date_create_from_format('j-M-Y', date_format($proverkaNarushenie->getDateUstraneniya(), 'j-M-Y')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($proverkaNarushenie);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('proverka/editNarushenie.html.twig', array(
            'form' => $form->createView(),
            'proverkaNarushenie' => $proverkaNarushenie
        ));
    }

    /**
     * @Route("/editNakazanie/{id}", name="edit_nakazanie")
     * @ParamConverter("proverkaNakazanie", class="AppBundle:ProverkaNakazanie")
     */
    public function editNakazanie(ProverkaNakazanie $proverkaNakazanie, Request $request)
    {
        $_COOKIE["org_id"] = $proverkaNakazanie->getProverka()->getOrganization();
        $form = $this->createForm(new ProverkaNakazanieType(), $proverkaNakazanie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $proverkaNakazanie->setDate(date_create_from_format('j-M-Y', date_format($proverkaNakazanie->getDate(), 'j-M-Y')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($proverkaNakazanie);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('proverka/editNakazanie.html.twig', array(
            'form' => $form->createView(),
            'proverkaNakazanie' => $proverkaNakazanie
        ));
    }

    /**
     * @Route("/deleteNakazanie/{id}", name="delete_nakazanie")
     * @ParamConverter("proverkaNakazanie", class="AppBundle:ProverkaNakazanie")
     */
    public function deleteNakazanie(ProverkaNakazanie $proverkaNakazanie, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($proverkaNakazanie);
        $em->flush();
        return $this->redirectToRoute('main_add_success');
    }

    /**
     * @Route("/{id}/editProverka", name="edit_proverka")
     * @ParamConverter("proverka", class="AppBundle:Proverka")
     */
    public function editProverka(Proverka $proverka, Request $request)
    {
        $_COOKIE["org_id"] = $proverka->getOrganization()->getId();

        $editProverka = new Proverka();

        $editProverka->setNomer($proverka->getNomer());
        $editProverka->setDate($proverka->getDate());
        $editProverka->setDateRasporyageniya($proverka->getDateRasporyageniya());
        $editProverka->setDateAkt($proverka->getDateAkt());
        $editProverka->setDatePredpisaniya($proverka->getDatePredpisaniya());
        $editProverka->setKemVydano($proverka->getKemVydano());
        $proverkaType = $proverka->getProverkaType();

        $form = $this->createForm(new ProverkaType(), $editProverka);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            foreach($editProverka->getProverkaNarushenie() as $val){
                $val->setProverka($proverka);
            }

            foreach($editProverka->getProverkaNakazanie() as $val){
                $val->setProverka($proverka);
            }

            foreach($editProverka->getProverkaNarushenie() as $val){
                $proverka->addProverkaNarushenie($val);
            }

            foreach($editProverka->getProverkaNakazanie() as $val){
                $proverka->addProverkaNakazanie($val);
            }

            if(!is_null($editProverka->getDate())){
                $proverka->setDate(date_create_from_format('j-M-Y', date_format($editProverka->getDate(), 'j-M-Y')));
            }
            if(!is_null($editProverka->getDateRasporyageniya())){
                $proverka->setDateRasporyageniya(date_create_from_format('j-M-Y', date_format($editProverka->getDateRasporyageniya(), 'j-M-Y')));
            }
            if(!is_null($editProverka->getDateAkt())){
                $proverka->setDateAkt(date_create_from_format('j-M-Y', date_format($editProverka->getDateAkt(), 'j-M-Y')));
            }
            if(!is_null($editProverka->getDatePredpisaniya())){
                $proverka->setDatePredpisaniya(date_create_from_format('j-M-Y', date_format($editProverka->getDatePredpisaniya(), 'j-M-Y')));
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($proverka);
            $em->flush();
            return $this->redirectToRoute('main_add_success');
        }

        return $this->render('proverka/editProverka.html.twig', array(
            'form' => $form->createView(),
            'proverka' => $proverka,
            'proverkaType' => $proverkaType
        ));
    }

}