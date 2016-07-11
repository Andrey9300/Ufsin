<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/dogovor')) {
            // create_dogovor_type
            if ($pathinfo === '/dogovor/createType') {
                return array (  '_controller' => 'AppBundle\\Controller\\DogovorController::createType',  '_route' => 'create_dogovor_type',);
            }

            // show_names_dogovor
            if (preg_match('#^/dogovor/(?P<id>[^/]++)/showNamesDogovor$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_names_dogovor')), array (  '_controller' => 'AppBundle\\Controller\\DogovorController::showNamesDogovor',));
            }

            // edit_dogovor
            if (0 === strpos($pathinfo, '/dogovor/editDogovor') && preg_match('#^/dogovor/editDogovor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_dogovor')), array (  '_controller' => 'AppBundle\\Controller\\DogovorController::editDogovor',));
            }

            if (0 === strpos($pathinfo, '/dogovor/delete')) {
                // delete_dogovor
                if (0 === strpos($pathinfo, '/dogovor/deleteDogovor') && preg_match('#^/dogovor/deleteDogovor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_dogovor')), array (  '_controller' => 'AppBundle\\Controller\\DogovorController::deleteDogovor',));
                }

                // delete_dogovor_type
                if (0 === strpos($pathinfo, '/dogovor/deleteType') && preg_match('#^/dogovor/deleteType/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_dogovor_type')), array (  '_controller' => 'AppBundle\\Controller\\DogovorController::deleteType',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/fkuz')) {
            // all_name_filial
            if ($pathinfo === '/fkuz/allNameFilial') {
                return array (  '_controller' => 'AppBundle\\Controller\\FkuzController::allNameFilialAction',  '_route' => 'all_name_filial',);
            }

            // create_fkuz
            if ($pathinfo === '/fkuz/createFkuz') {
                return array (  '_controller' => 'AppBundle\\Controller\\FkuzController::createFkuz',  '_route' => 'create_fkuz',);
            }

            // edit_fkuz
            if (0 === strpos($pathinfo, '/fkuz/editFkuz') && preg_match('#^/fkuz/editFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editFkuz',));
            }

            // fkuz
            if (preg_match('#^/fkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::showCurrentFilial',));
            }

            if (0 === strpos($pathinfo, '/fkuz/create')) {
                // create_license
                if (0 === strpos($pathinfo, '/fkuz/createLicense') && preg_match('#^/fkuz/createLicense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_license')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::createLicense',));
                }

                // create_san_zakl
                if (0 === strpos($pathinfo, '/fkuz/createSanZakl') && preg_match('#^/fkuz/createSanZakl/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_san_zakl')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::createSanZakl',));
                }

                // create_dogovor_fkuz
                if (0 === strpos($pathinfo, '/fkuz/createDogovorFkuz') && preg_match('#^/fkuz/createDogovorFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_dogovor_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::createDogovorFkuz',));
                }

                // create_issledovanie_fkuz
                if (0 === strpos($pathinfo, '/fkuz/createIssledovanie') && preg_match('#^/fkuz/createIssledovanie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_issledovanie_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::createIssledovanie',));
                }

            }

            if (0 === strpos($pathinfo, '/fkuz/show')) {
                // show_names_issl_fkuz
                if (0 === strpos($pathinfo, '/fkuz/showNamesIssledovanie') && preg_match('#^/fkuz/showNamesIssledovanie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_names_issl_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::showNamesIssl',));
                }

                // show_pokazatels_fkuz
                if (0 === strpos($pathinfo, '/fkuz/showPokazatels') && preg_match('#^/fkuz/showPokazatels/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_pokazatels_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::showPokazatels',));
                }

            }

            // edit_issledovanie_fkuz
            if (0 === strpos($pathinfo, '/fkuz/editIssledovanie') && preg_match('#^/fkuz/editIssledovanie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_issledovanie_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editIssledovanie',));
            }

            // delete_issledovanie_fkuz
            if (0 === strpos($pathinfo, '/fkuz/deleteIssledovanie') && preg_match('#^/fkuz/deleteIssledovanie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_issledovanie_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteIssledovanie',));
            }

            if (0 === strpos($pathinfo, '/fkuz/edit')) {
                // edit_pokazatel_fkuz
                if (0 === strpos($pathinfo, '/fkuz/editPokazatel') && preg_match('#^/fkuz/editPokazatel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_pokazatel_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editPokazatel',));
                }

                // edit_license
                if (0 === strpos($pathinfo, '/fkuz/editLicense') && preg_match('#^/fkuz/editLicense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_license')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editLicense',));
                }

                // edit_san_zakl
                if (0 === strpos($pathinfo, '/fkuz/editSanZakl') && preg_match('#^/fkuz/editSanZakl/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_san_zakl')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editSanZakl',));
                }

                // edit_dogovor_fkuz
                if (0 === strpos($pathinfo, '/fkuz/editDogovorFkuz') && preg_match('#^/fkuz/editDogovorFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_dogovor_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editDogovorFkuz',));
                }

                // edit_lab_con
                if (0 === strpos($pathinfo, '/fkuz/editLabCon') && preg_match('#^/fkuz/editLabCon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_lab_con')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editLabCon',));
                }

                // edit_issledovanie_object_fkuz
                if (0 === strpos($pathinfo, '/fkuz/editIssledovanieObject') && preg_match('#^/fkuz/editIssledovanieObject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_issledovanie_object_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editIssledovanieObject',));
                }

            }

            if (0 === strpos($pathinfo, '/fkuz/delete')) {
                // delete_license
                if (0 === strpos($pathinfo, '/fkuz/deleteLicense') && preg_match('#^/fkuz/deleteLicense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_license')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteLicense',));
                }

                // delete_san_zakl
                if (0 === strpos($pathinfo, '/fkuz/deleteSanZakl') && preg_match('#^/fkuz/deleteSanZakl/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_san_zakl')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteSanZakl',));
                }

                // delete_dogovor_fkuz
                if (0 === strpos($pathinfo, '/fkuz/deleteDogovorFkuz') && preg_match('#^/fkuz/deleteDogovorFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_dogovor_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteDogovorFkuz',));
                }

                // delete_lab_con_fkuz
                if (0 === strpos($pathinfo, '/fkuz/deleteLabCon') && preg_match('#^/fkuz/deleteLabCon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_lab_con_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteLabCon',));
                }

                // delete_fkuz
                if (0 === strpos($pathinfo, '/fkuz/deleteFkuz') && preg_match('#^/fkuz/deleteFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteFkuz',));
                }

            }

            if (0 === strpos($pathinfo, '/fkuz/s')) {
                if (0 === strpos($pathinfo, '/fkuz/show')) {
                    // show_names_lab_con_fkuz
                    if (0 === strpos($pathinfo, '/fkuz/showNamesLabConFkuz') && preg_match('#^/fkuz/showNamesLabConFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_names_lab_con_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::showNamesLabConFkuz',));
                    }

                    // show_issl_lab_fkuz
                    if (0 === strpos($pathinfo, '/fkuz/showLabIssl') && preg_match('#^/fkuz/showLabIssl/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_issl_lab_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::showLabIssl',));
                    }

                    // show_issledovanie_fkuz
                    if (0 === strpos($pathinfo, '/fkuz/showIssledovanie') && preg_match('#^/fkuz/showIssledovanie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_issledovanie_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::showIssledovanie',));
                    }

                }

                if (0 === strpos($pathinfo, '/fkuz/sort')) {
                    // sort_license_fkuz
                    if (0 === strpos($pathinfo, '/fkuz/sortLicenseFkuz') && preg_match('#^/fkuz/sortLicenseFkuz/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sort_license_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::sortLicenseFkuz',));
                    }

                    // sort_san_zakl_fkuz
                    if (0 === strpos($pathinfo, '/fkuz/sortSanZaklFkuz') && preg_match('#^/fkuz/sortSanZaklFkuz/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sort_san_zakl_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::sortSanZaklFkuz',));
                    }

                    // sort_proverka_fkuz
                    if (0 === strpos($pathinfo, '/fkuz/sortProverkaFkuz') && preg_match('#^/fkuz/sortProverkaFkuz/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sort_proverka_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::sortProverkaFkuz',));
                    }

                    // sort_dogovor_fkuz
                    if (0 === strpos($pathinfo, '/fkuz/sortDogovorFkuz') && preg_match('#^/fkuz/sortDogovorFkuz/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sort_dogovor_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::sortDogovorFkuz',));
                    }

                }

            }

            // create_proverka_fkuz
            if (0 === strpos($pathinfo, '/fkuz/createProverkaFkuz') && preg_match('#^/fkuz/createProverkaFkuz/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'create_proverka_fkuz');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_proverka_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::createProverkaFkuz',));
            }

            // edit_proverka_fkuz
            if (0 === strpos($pathinfo, '/fkuz/editProverkaFkuz') && preg_match('#^/fkuz/editProverkaFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_proverka_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editProverkaFkuz',));
            }

            // show_nakazaniya_fkuz
            if (0 === strpos($pathinfo, '/fkuz/showNakazaniyaFkuz') && preg_match('#^/fkuz/showNakazaniyaFkuz/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'show_nakazaniya_fkuz');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_nakazaniya_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::showNakazaniyaFkuz',));
            }

            // edit_nakazanie_fkuz
            if (0 === strpos($pathinfo, '/fkuz/editNakazanieFkuz') && preg_match('#^/fkuz/editNakazanieFkuz/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'edit_nakazanie_fkuz');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_nakazanie_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::editNakazanieFkuz',));
            }

            if (0 === strpos($pathinfo, '/fkuz/delete')) {
                // delete_nakazanie_fkuz
                if (0 === strpos($pathinfo, '/fkuz/deleteNakazanieFkuz') && preg_match('#^/fkuz/deleteNakazanieFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_nakazanie_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteNakazanieFkuz',));
                }

                // delete_proverka_fkuz
                if (0 === strpos($pathinfo, '/fkuz/deleteProverkaFkuz') && preg_match('#^/fkuz/deleteProverkaFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_proverka_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::deleteProverkaFkuz',));
                }

            }

            // proverka_nakazaniya_fkuz
            if (0 === strpos($pathinfo, '/fkuz/proverkaNakazaniyaFkuz') && preg_match('#^/fkuz/proverkaNakazaniyaFkuz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proverka_nakazaniya_fkuz')), array (  '_controller' => 'AppBundle\\Controller\\FkuzController::proverkaNakazaniyaFkuz',));
            }

        }

        if (0 === strpos($pathinfo, '/issledovanie')) {
            // create_type
            if ($pathinfo === '/issledovanie/createType') {
                return array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::createType',  '_route' => 'create_type',);
            }

            // show_podkat
            if ($pathinfo === '/issledovanie/showPodkat') {
                return array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::showPodkat',  '_route' => 'show_podkat',);
            }

            // show_names_issl
            if (preg_match('#^/issledovanie/(?P<id>[^/]++)/showNamesIssl$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_names_issl')), array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::showNamesIssl',));
            }

            // show_pokazatels
            if (preg_match('#^/issledovanie/(?P<id>[^/]++)/showPokazatels$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_pokazatels')), array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::showPokazatels',));
            }

            // edit_issledovanie
            if (preg_match('#^/issledovanie/(?P<id>[^/]++)/editIssledovanie$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_issledovanie')), array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::editIssledovanie',));
            }

            // edit_pokazatel
            if (0 === strpos($pathinfo, '/issledovanie/editPokazatel') && preg_match('#^/issledovanie/editPokazatel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_pokazatel')), array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::editPokazatel',));
            }

            if (0 === strpos($pathinfo, '/issledovanie/delete')) {
                // delete_pokazatel
                if (0 === strpos($pathinfo, '/issledovanie/deletePokazatel') && preg_match('#^/issledovanie/deletePokazatel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_pokazatel')), array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::deletePokazatel',));
                }

                // delete_issl_type
                if (0 === strpos($pathinfo, '/issledovanie/deleteType') && preg_match('#^/issledovanie/deleteType/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_issl_type')), array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::deleteType',));
                }

                // delete_issledovanie
                if (0 === strpos($pathinfo, '/issledovanie/deleteIssledovanie') && preg_match('#^/issledovanie/deleteIssledovanie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_issledovanie')), array (  '_controller' => 'AppBundle\\Controller\\IssledovanieController::deleteIssledovanie',));
                }

            }

        }

        // main_index
        if ($pathinfo === '/main') {
            return array (  '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  '_route' => 'main_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  '_route' => 'homepage',);
        }

        // main_add_success
        if ($pathinfo === '/addSuccess') {
            return array (  '_controller' => 'AppBundle\\Controller\\MainController::addSuccessAction',  '_route' => 'main_add_success',);
        }

        if (0 === strpos($pathinfo, '/o')) {
            if (0 === strpos($pathinfo, '/organization')) {
                // organization_new
                if ($pathinfo === '/organization/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::newAction',  '_route' => 'organization_new',);
                }

                // create_object
                if ($pathinfo === '/organization/createObject') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::createObject',  '_route' => 'create_object',);
                }

                // all_name_organization
                if ($pathinfo === '/organization/allNameOrganization') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::allOrganizationsAction',  '_route' => 'all_name_organization',);
                }

                // current_organization
                if (preg_match('#^/organization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'current_organization')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::showCurrentOrganization',));
                }

                // edit_organization
                if (0 === strpos($pathinfo, '/organization/editOrganization') && preg_match('#^/organization/editOrganization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_organization')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::editOrganization',));
                }

                if (0 === strpos($pathinfo, '/organization/delete')) {
                    if (0 === strpos($pathinfo, '/organization/deleteO')) {
                        // delete_object_organization
                        if (0 === strpos($pathinfo, '/organization/deleteObjectOrganization') && preg_match('#^/organization/deleteObjectOrganization/(?P<org_id>[^/]++)/(?P<obj_id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_object_organization')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::deleteObjectOrganization',));
                        }

                        // delete_organization
                        if (0 === strpos($pathinfo, '/organization/deleteOrganization') && preg_match('#^/organization/deleteOrganization/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_organization')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::deleteOrganization',));
                        }

                    }

                    // delete_ruk_zam
                    if (0 === strpos($pathinfo, '/organization/deleteRukZam') && preg_match('#^/organization/deleteRukZam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_ruk_zam')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::deleteRukZam',));
                    }

                }

                // create_dogovor
                if (preg_match('#^/organization/(?P<id>[^/]++)/createDogovor$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_dogovor')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::createDogovor',));
                }

                // create_proverka
                if (preg_match('#^/organization/(?P<id>[^/]++)/createProverka$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_proverka')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::createProverka',));
                }

                // edit_proverka
                if (preg_match('#^/organization/(?P<id>[^/]++)/editProverka$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_proverka')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::editProverka',));
                }

                // delete_proverka
                if (0 === strpos($pathinfo, '/organization/deleteProverka') && preg_match('#^/organization/deleteProverka/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_proverka')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::deleteProverka',));
                }

                // change_otmetka
                if (0 === strpos($pathinfo, '/organization/changeOtmetka') && preg_match('#^/organization/changeOtmetka/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_otmetka')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::changeOtmetka',));
                }

                // delete_narushenie
                if (0 === strpos($pathinfo, '/organization/deleteNarushenie') && preg_match('#^/organization/deleteNarushenie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_narushenie')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::deleteNarushenie',));
                }

                // edit_narushenie
                if (preg_match('#^/organization/(?P<id>[^/]++)/editNarushenie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_narushenie')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::editNarushenie',));
                }

                // edit_nakazanie
                if (preg_match('#^/organization/(?P<id>[^/]++)/editNakazanie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_nakazanie')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::editNakazanie',));
                }

                if (0 === strpos($pathinfo, '/organization/delete')) {
                    // delete_nakazanie
                    if (0 === strpos($pathinfo, '/organization/deleteNakazanie') && preg_match('#^/organization/deleteNakazanie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_nakazanie')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::deleteNakazanie',));
                    }

                    // delete_object
                    if (0 === strpos($pathinfo, '/organization/deleteObject') && preg_match('#^/organization/deleteObject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_object')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::deleteObject',));
                    }

                }

                // show_names_proverka
                if (preg_match('#^/organization/(?P<id>[^/]++)/showNamesProverka$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_names_proverka')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::showNamesProverka',));
                }

                // show_narusheniya
                if (preg_match('#^/organization/(?P<id>[^/]++)/showNarusheniya$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_narusheniya')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::showNarusheniya',));
                }

                // show_nakazaniya
                if (preg_match('#^/organization/(?P<id>[^/]++)/showNakazaniya$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_nakazaniya')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::showNakazaniya',));
                }

                // create_issledovanie
                if (preg_match('#^/organization/(?P<id>[^/]++)/createIssledovanie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_issledovanie')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::createIssledovanie',));
                }

                if (0 === strpos($pathinfo, '/organization/sort')) {
                    // sort_dogovor
                    if (0 === strpos($pathinfo, '/organization/sortDogovor') && preg_match('#^/organization/sortDogovor/(?P<org_id>[^/]++)/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sort_dogovor')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::sortDogovor',));
                    }

                    // sort_proverki
                    if (0 === strpos($pathinfo, '/organization/sortProverki') && preg_match('#^/organization/sortProverki/(?P<org_id>[^/]++)/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sort_proverki')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::sortProverki',));
                    }

                    // sort_zabolevaniya
                    if (0 === strpos($pathinfo, '/organization/sortZabolveniya') && preg_match('#^/organization/sortZabolveniya/(?P<org_id>[^/]++)/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sort_zabolevaniya')), array (  '_controller' => 'AppBundle\\Controller\\OrganizationController::sortZabolveniya',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/otchet')) {
                // common_dogovor
                if ($pathinfo === '/otchetDogovor/common') {
                    return array (  '_controller' => 'AppBundle\\Controller\\OtchetDogovorController::common',  '_route' => 'common_dogovor',);
                }

                if (0 === strpos($pathinfo, '/otchetFkuz')) {
                    // otchetFkuz
                    if (rtrim($pathinfo, '/') === '/otchetFkuz') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'otchetFkuz');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetFkuzController::dogovor',  '_route' => 'otchetFkuz',);
                    }

                    // nakazaniya_fkuz
                    if ($pathinfo === '/otchetFkuz/nakazaniya') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetFkuzController::nakazaniyaFkuz',  '_route' => 'nakazaniya_fkuz',);
                    }

                    // type_issledovanie_fkuz
                    if ($pathinfo === '/otchetFkuz/type') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetFkuzController::type',  '_route' => 'type_issledovanie_fkuz',);
                    }

                }

                if (0 === strpos($pathinfo, '/otchetIssledovaniya')) {
                    // issledovanie
                    if (rtrim($pathinfo, '/') === '/otchetIssledovaniya') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'issledovanie');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetIssledovaniyaController::issledovanie',  '_route' => 'issledovanie',);
                    }

                    // type_issledovanie
                    if ($pathinfo === '/otchetIssledovaniya/type') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetIssledovaniyaController::type',  '_route' => 'type_issledovanie',);
                    }

                }

                if (0 === strpos($pathinfo, '/otchetProverka')) {
                    // otchet_proverka
                    if (rtrim($pathinfo, '/') === '/otchetProverka') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'otchet_proverka');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::proverka',  '_route' => 'otchet_proverka',);
                    }

                    // common_proverka
                    if ($pathinfo === '/otchetProverka/common') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::common',  '_route' => 'common_proverka',);
                    }

                    if (0 === strpos($pathinfo, '/otchetProverka/na')) {
                        if (0 === strpos($pathinfo, '/otchetProverka/narusheniya')) {
                            // narusheniya
                            if ($pathinfo === '/otchetProverka/narusheniya') {
                                return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::narusheniya',  '_route' => 'narusheniya',);
                            }

                            // narusheniya_obj
                            if ($pathinfo === '/otchetProverka/narusheniyaObj') {
                                return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::narusheniyaObj',  '_route' => 'narusheniya_obj',);
                            }

                        }

                        // nakazaniya
                        if ($pathinfo === '/otchetProverka/nakazaniya') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::nakazanie',  '_route' => 'nakazaniya',);
                        }

                        // narusheniya_all
                        if ($pathinfo === '/otchetProverka/narusheniyaAll') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::narusheniyaAll',  '_route' => 'narusheniya_all',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/otchetProverka/proverkaN')) {
                        // proverka_nakazaniya
                        if ($pathinfo === '/otchetProverka/proverkaNakazaniya') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::proverkaNakazaniya',  '_route' => 'proverka_nakazaniya',);
                        }

                        // proverka_nevyp
                        if ($pathinfo === '/otchetProverka/proverkaNevyp') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::proverkaNevyp',  '_route' => 'proverka_nevyp',);
                        }

                        // proverka_narusheniya_vnimanie
                        if ($pathinfo === '/otchetProverka/proverkaNarusheniyaVnimanie') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetProverkaController::proverkaNarusheniyaVnimanie',  '_route' => 'proverka_narusheniya_vnimanie',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/otchetZabolevaniya')) {
                    // zabolevaniya
                    if (rtrim($pathinfo, '/') === '/otchetZabolevaniya') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'zabolevaniya');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::zabolevaniya',  '_route' => 'zabolevaniya',);
                    }

                    // kontaktnye
                    if ($pathinfo === '/otchetZabolevaniya/kontaktnye') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::kontaktnye',  '_route' => 'kontaktnye',);
                    }

                    if (0 === strpos($pathinfo, '/otchetZabolevaniya/otryad')) {
                        // otryad
                        if ($pathinfo === '/otchetZabolevaniya/otryad') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::otryad',  '_route' => 'otryad',);
                        }

                        // otryad_kontakt
                        if ($pathinfo === '/otchetZabolevaniya/otryadKontakt') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::otryadKontakt',  '_route' => 'otryad_kontakt',);
                        }

                    }

                    // mbt
                    if ($pathinfo === '/otchetZabolevaniya/mbt') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::mbt',  '_route' => 'mbt',);
                    }

                    // viyavlenie
                    if ($pathinfo === '/otchetZabolevaniya/viyavlenie') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::viyavlenie',  '_route' => 'viyavlenie',);
                    }

                    // recidiv
                    if ($pathinfo === '/otchetZabolevaniya/recidiv') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::recidiv',  '_route' => 'recidiv',);
                    }

                    // postupil_is
                    if ($pathinfo === '/otchetZabolevaniya/postupilIs') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::postupilIs',  '_route' => 'postupil_is',);
                    }

                    // address_common
                    if ($pathinfo === '/otchetZabolevaniya/addressCommon') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::addressCommon',  '_route' => 'address_common',);
                    }

                    // ochag
                    if ($pathinfo === '/otchetZabolevaniya/ochag') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::ochag',  '_route' => 'ochag',);
                    }

                    if (0 === strpos($pathinfo, '/otchetZabolevaniya/p')) {
                        // patologiya
                        if ($pathinfo === '/otchetZabolevaniya/patologiya') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::patologiya',  '_route' => 'patologiya',);
                        }

                        // povtorno
                        if ($pathinfo === '/otchetZabolevaniya/povtorno') {
                            return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::povtorno',  '_route' => 'povtorno',);
                        }

                    }

                    // iz_kontaktnyh
                    if ($pathinfo === '/otchetZabolevaniya/izKontaktnyh') {
                        return array (  '_controller' => 'AppBundle\\Controller\\OtchetZabolevaniyaController::izKontaktnyh',  '_route' => 'iz_kontaktnyh',);
                    }

                }

                // otchet_organization
                if ($pathinfo === '/otchet/organization') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Otchet\\Organization::indexAction',  '_route' => 'otchet_organization',);
                }

                // otchet_index
                if ($pathinfo === '/otchet') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Otchet\\Otchet::indexAction',  '_route' => 'otchet_index',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // security_login_form
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login_form',);
                }

                // security_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'security_login_check',);
                }

            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/zabolevaniya')) {
            if (0 === strpos($pathinfo, '/zabolevaniya/createZabolevanie')) {
                // create_zabolevanie_lichnyi
                if ($pathinfo === '/zabolevaniya/createZabolevanieLichnyi') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::createZabolevanieLichnyi',  '_route' => 'create_zabolevanie_lichnyi',);
                }

                if (0 === strpos($pathinfo, '/zabolevaniya/createZabolevanieO')) {
                    // create_zabolevanie_osugdenyi
                    if ($pathinfo === '/zabolevaniya/createZabolevanieOsugdenyi') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::createZabolevanieOsugdenyi',  '_route' => 'create_zabolevanie_osugdenyi',);
                    }

                    // create_zabolevanie_ochag
                    if ($pathinfo === '/zabolevaniya/createZabolevanieOchag') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::createZabolevanieOchag',  '_route' => 'create_zabolevanie_ochag',);
                    }

                }

            }

            // show_lichnyi_sostavs
            if ($pathinfo === '/zabolevaniya/showLichnyiSostavs') {
                return array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::showLichnyiSostavs',  '_route' => 'show_lichnyi_sostavs',);
            }

            // show_card_lichnyi
            if (0 === strpos($pathinfo, '/zabolevaniya/lichnyi') && preg_match('#^/zabolevaniya/lichnyi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_card_lichnyi')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::showCardLichnyiSostav',));
            }

            // edit_lichnyi_sostav
            if (0 === strpos($pathinfo, '/zabolevaniya/editLichnyiSostav') && preg_match('#^/zabolevaniya/editLichnyiSostav/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_lichnyi_sostav')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::editLichnyiSostav',));
            }

            // delete_lichnyi_sostav
            if (0 === strpos($pathinfo, '/zabolevaniya/deleteLichnyiSostav') && preg_match('#^/zabolevaniya/deleteLichnyiSostav/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_lichnyi_sostav')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::deleteLichnyiSostav',));
            }

            // show_osugdenyis
            if ($pathinfo === '/zabolevaniya/showOsugdenyis') {
                return array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::showOsugdenyis',  '_route' => 'show_osugdenyis',);
            }

            // show_card_osugdenyi
            if (0 === strpos($pathinfo, '/zabolevaniya/osugdenyi') && preg_match('#^/zabolevaniya/osugdenyi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_card_osugdenyi')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::showCardOsugdenyi',));
            }

            // edit_osugdenyi
            if (0 === strpos($pathinfo, '/zabolevaniya/editOsugdenyi') && preg_match('#^/zabolevaniya/editOsugdenyi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_osugdenyi')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::editOsugdenyi',));
            }

            if (0 === strpos($pathinfo, '/zabolevaniya/deleteOsugdenyi')) {
                // delete_osugdenyi
                if (preg_match('#^/zabolevaniya/deleteOsugdenyi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_osugdenyi')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::deleteOsugdenyi',));
                }

                // delete_osugdenyi_flg
                if (0 === strpos($pathinfo, '/zabolevaniya/deleteOsugdenyiFlg') && preg_match('#^/zabolevaniya/deleteOsugdenyiFlg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_osugdenyi_flg')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::deleteOsugdenyiFlg',));
                }

                // delete_osugdenyi_soput_patol
                if (0 === strpos($pathinfo, '/zabolevaniya/deleteOsugdenyiSoputPatol') && preg_match('#^/zabolevaniya/deleteOsugdenyiSoputPatol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_osugdenyi_soput_patol')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::deleteOsugdenyiSoputPatol',));
                }

                // delete_osugdenyi_kontaktnyi
                if (0 === strpos($pathinfo, '/zabolevaniya/deleteOsugdenyiKontaktnyi') && preg_match('#^/zabolevaniya/deleteOsugdenyiKontaktnyi/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_osugdenyi_kontaktnyi')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::deleteOsugdenyiKontaktnyi',));
                }

            }

            // show_ochags
            if ($pathinfo === '/zabolevaniya/showOchags') {
                return array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::showOchags',  '_route' => 'show_ochags',);
            }

            // show_card_ochag
            if (0 === strpos($pathinfo, '/zabolevaniya/ochag') && preg_match('#^/zabolevaniya/ochag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_card_ochag')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::showCardOchag',));
            }

            // edit_ochag
            if (0 === strpos($pathinfo, '/zabolevaniya/editOchag') && preg_match('#^/zabolevaniya/editOchag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_ochag')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::editOchag',));
            }

            // delete_ochag
            if (0 === strpos($pathinfo, '/zabolevaniya/deleteOchag') && preg_match('#^/zabolevaniya/deleteOchag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_ochag')), array (  '_controller' => 'AppBundle\\Controller\\ZabolevaniyaController::deleteOchag',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
