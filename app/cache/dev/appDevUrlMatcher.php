<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // pt__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/blog/admin/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pt__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_profile_show',);
        }
        not_pt__RG__fos_user_profile_show:

        // en__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/en/blog/admin/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_show',);
        }
        not_en__RG__fos_user_profile_show:

        // pt__RG__fos_user_profile_edit
        if ($pathinfo === '/blog/admin/profile/edit') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_profile_edit',);
        }

        // en__RG__fos_user_profile_edit
        if ($pathinfo === '/en/blog/admin/profile/edit') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_edit',);
        }

        // pt__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/blog/admin/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pt__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_registration_register',);
        }

        // en__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/en/blog/admin/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
        }

        // pt__RG__fos_user_registration_check_email
        if ($pathinfo === '/blog/admin/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_registration_check_email',);
        }
        not_pt__RG__fos_user_registration_check_email:

        // en__RG__fos_user_registration_check_email
        if ($pathinfo === '/en/blog/admin/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
        }
        not_en__RG__fos_user_registration_check_email:

        // pt__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/blog/admin/register/confirm') && preg_match('#^/blog/admin/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'pt',));
        }
        not_pt__RG__fos_user_registration_confirm:

        // en__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/en/blog/admin/register/confirm') && preg_match('#^/en/blog/admin/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_registration_confirm:

        // pt__RG__fos_user_registration_confirmed
        if ($pathinfo === '/blog/admin/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_registration_confirmed',);
        }
        not_pt__RG__fos_user_registration_confirmed:

        // en__RG__fos_user_registration_confirmed
        if ($pathinfo === '/en/blog/admin/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
        }
        not_en__RG__fos_user_registration_confirmed:

        // pt__RG__fos_user_resetting_request
        if ($pathinfo === '/blog/admin/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_resetting_request',);
        }
        not_pt__RG__fos_user_resetting_request:

        // en__RG__fos_user_resetting_request
        if ($pathinfo === '/en/blog/admin/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
        }
        not_en__RG__fos_user_resetting_request:

        // pt__RG__fos_user_resetting_send_email
        if ($pathinfo === '/blog/admin/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_resetting_send_email',);
        }
        not_pt__RG__fos_user_resetting_send_email:

        // en__RG__fos_user_resetting_send_email
        if ($pathinfo === '/en/blog/admin/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
        }
        not_en__RG__fos_user_resetting_send_email:

        // pt__RG__fos_user_resetting_check_email
        if ($pathinfo === '/blog/admin/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_resetting_check_email',);
        }
        not_pt__RG__fos_user_resetting_check_email:

        // en__RG__fos_user_resetting_check_email
        if ($pathinfo === '/en/blog/admin/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
        }
        not_en__RG__fos_user_resetting_check_email:

        // pt__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/blog/admin/resetting/reset') && preg_match('#^/blog/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'pt',));
        }
        not_pt__RG__fos_user_resetting_reset:

        // en__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/en/blog/admin/resetting/reset') && preg_match('#^/en/blog/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_resetting_reset:

        // pt__RG__fos_user_change_password
        if ($pathinfo === '/blog/admin/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_change_password',);
        }
        not_pt__RG__fos_user_change_password:

        // en__RG__fos_user_change_password
        if ($pathinfo === '/en/blog/admin/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
        }
        not_en__RG__fos_user_change_password:

        // pt__RG__fos_user_security_login
        if ($pathinfo === '/blog/admin/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_security_login',);
        }

        // en__RG__fos_user_security_login
        if ($pathinfo === '/en/blog/admin/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
        }

        // pt__RG__fos_user_security_check
        if ($pathinfo === '/blog/admin/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_security_check',);
        }

        // en__RG__fos_user_security_check
        if ($pathinfo === '/en/blog/admin/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
        }

        // pt__RG__fos_user_security_logout
        if ($pathinfo === '/blog/admin/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'pt',  '_route' => 'pt__RG__fos_user_security_logout',);
        }

        // en__RG__fos_user_security_logout
        if ($pathinfo === '/en/blog/admin/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
        }

        // pt__RG__vostre_blog_homepage
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::indexAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_blog_homepage',);
        }

        // en__RG__vostre_blog_homepage
        if ($pathinfo === '/en/blog') {
            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_blog_homepage',);
        }

        // pt__RG__vostre_blog_admin
        if ($pathinfo === '/blog/admin') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_blog_admin;
            }

            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::adminAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_blog_admin',);
        }
        not_pt__RG__vostre_blog_admin:

        // en__RG__vostre_blog_admin
        if ($pathinfo === '/en/blog/admin') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_blog_admin;
            }

            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::adminAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_blog_admin',);
        }
        not_en__RG__vostre_blog_admin:

        // pt__RG__vostre_blog_post
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_blog_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_blog_post')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::postAction',  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_blog_post:

        // en__RG__vostre_blog_post
        if (0 === strpos($pathinfo, '/en/blog') && preg_match('#^/en/blog/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_blog_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_blog_post')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::postAction',  '_locale' => 'en',));
        }
        not_en__RG__vostre_blog_post:

        // pt__RG__vostre_blog_tag_busca
        if (0 === strpos($pathinfo, '/blog/busca/tag') && preg_match('#^/blog/busca/tag/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_blog_tag_busca')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::buscaAction',  '_locale' => 'pt',));
        }

        // en__RG__vostre_blog_tag_busca
        if (0 === strpos($pathinfo, '/en/blog/busca/tag') && preg_match('#^/en/blog/busca/tag/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_blog_tag_busca')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PageController::buscaAction',  '_locale' => 'en',));
        }

        // pt__RG__vostre_blog_comentario_form
        if ($pathinfo === '/blog/comentario/form') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_blog_comentario_form;
            }

            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\ComentarioController::formAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_blog_comentario_form',);
        }
        not_pt__RG__vostre_blog_comentario_form:

        // en__RG__vostre_blog_comentario_form
        if ($pathinfo === '/en/blog/comentario/form') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_blog_comentario_form;
            }

            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\ComentarioController::formAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_blog_comentario_form',);
        }
        not_en__RG__vostre_blog_comentario_form:

        // pt__RG__vostre_blog_comentario_cadastrar
        if (0 === strpos($pathinfo, '/blog/comentario/cadastrar') && preg_match('#^/blog/comentario/cadastrar/(?P<id_post>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt__RG__vostre_blog_comentario_cadastrar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_blog_comentario_cadastrar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\ComentarioController::cadastrarAction',  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_blog_comentario_cadastrar:

        // en__RG__vostre_blog_comentario_cadastrar
        if (0 === strpos($pathinfo, '/en/blog/comentario/cadastrar') && preg_match('#^/en/blog/comentario/cadastrar/(?P<id_post>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_blog_comentario_cadastrar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_blog_comentario_cadastrar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\ComentarioController::cadastrarAction',  '_locale' => 'en',));
        }
        not_en__RG__vostre_blog_comentario_cadastrar:

        // pt__RG__vostre_blog_admin_post_index
        if ($pathinfo === '/blog/admin/post') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_blog_admin_post_index;
            }

            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::indexAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_blog_admin_post_index',);
        }
        not_pt__RG__vostre_blog_admin_post_index:

        // en__RG__vostre_blog_admin_post_index
        if ($pathinfo === '/en/blog/admin/post') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_blog_admin_post_index;
            }

            return array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_blog_admin_post_index',);
        }
        not_en__RG__vostre_blog_admin_post_index:

        // pt__RG__vostre_blog_admin_post_form
        if (0 === strpos($pathinfo, '/blog/admin/post/form') && preg_match('#^/blog/admin/post/form(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_blog_admin_post_form;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_blog_admin_post_form')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::formAction',  'id_post' => -1,  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_blog_admin_post_form:

        // en__RG__vostre_blog_admin_post_form
        if (0 === strpos($pathinfo, '/en/blog/admin/post/form') && preg_match('#^/en/blog/admin/post/form(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_blog_admin_post_form;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_blog_admin_post_form')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::formAction',  'id_post' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_blog_admin_post_form:

        // pt__RG__vostre_blog_admin_post_cadastrar
        if (0 === strpos($pathinfo, '/blog/admin/post/cadastrar') && preg_match('#^/blog/admin/post/cadastrar(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pt__RG__vostre_blog_admin_post_cadastrar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_blog_admin_post_cadastrar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::cadastrarAction',  'id_post' => -1,  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_blog_admin_post_cadastrar:

        // en__RG__vostre_blog_admin_post_cadastrar
        if (0 === strpos($pathinfo, '/en/blog/admin/post/cadastrar') && preg_match('#^/en/blog/admin/post/cadastrar(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__vostre_blog_admin_post_cadastrar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_blog_admin_post_cadastrar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::cadastrarAction',  'id_post' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_blog_admin_post_cadastrar:

        // pt__RG__vostre_blog_admin_post_inativar
        if (0 === strpos($pathinfo, '/blog/admin/post/inativar') && preg_match('#^/blog/admin/post/inativar(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_blog_admin_post_inativar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_blog_admin_post_inativar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::inativarAction',  'id_post' => -1,  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_blog_admin_post_inativar:

        // en__RG__vostre_blog_admin_post_inativar
        if (0 === strpos($pathinfo, '/en/blog/admin/post/inativar') && preg_match('#^/en/blog/admin/post/inativar(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_blog_admin_post_inativar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_blog_admin_post_inativar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::inativarAction',  'id_post' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_blog_admin_post_inativar:

        // pt__RG__vostre_blog_admin_post_reativar
        if (0 === strpos($pathinfo, '/blog/admin/post/reativar') && preg_match('#^/blog/admin/post/reativar(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_blog_admin_post_reativar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_blog_admin_post_reativar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::reativarAction',  'id_post' => -1,  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_blog_admin_post_reativar:

        // en__RG__vostre_blog_admin_post_reativar
        if (0 === strpos($pathinfo, '/en/blog/admin/post/reativar') && preg_match('#^/en/blog/admin/post/reativar(?:/(?P<id_post>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_blog_admin_post_reativar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_blog_admin_post_reativar')), array (  '_controller' => 'Vostre\\BlogBundle\\Controller\\PostController::reativarAction',  'id_post' => -1,  '_locale' => 'en',));
        }
        not_en__RG__vostre_blog_admin_post_reativar:

        // pt__RG__vostre_site_servicos
        if ($pathinfo === '/servicos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_servicos;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_servicos',);
        }
        not_pt__RG__vostre_site_servicos:

        // en__RG__vostre_site_servicos
        if ($pathinfo === '/en/servicos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_servicos;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::servicosAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_servicos',);
        }
        not_en__RG__vostre_site_servicos:

        // pt__RG__vostre_site_portfolio
        if ($pathinfo === '/portfolio') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_portfolio;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_portfolio',);
        }
        not_pt__RG__vostre_site_portfolio:

        // en__RG__vostre_site_portfolio
        if ($pathinfo === '/en/portfolio') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_portfolio;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::portfolioAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_portfolio',);
        }
        not_en__RG__vostre_site_portfolio:

        // pt__RG__vostre_site_portfolio_detalhe
        if (0 === strpos($pathinfo, '/portfolio') && preg_match('#^/portfolio(?:/(?P<projeto>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_portfolio_detalhe;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_site_portfolio_detalhe')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PortfolioController::detalheAction',  'projeto' => '',  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_site_portfolio_detalhe:

        // en__RG__vostre_site_portfolio_detalhe
        if (0 === strpos($pathinfo, '/en/portfolio') && preg_match('#^/en/portfolio(?:/(?P<projeto>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_portfolio_detalhe;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_portfolio_detalhe')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PortfolioController::detalheAction',  'projeto' => '',  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_portfolio_detalhe:

        // pt__RG__vostre_site_contato
        if ($pathinfo === '/contato') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pt__RG__vostre_site_contato;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_contato',);
        }
        not_pt__RG__vostre_site_contato:

        // en__RG__vostre_site_contato
        if ($pathinfo === '/en/contato') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__vostre_site_contato;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::contatoAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_contato',);
        }
        not_en__RG__vostre_site_contato:

        // pt__RG__vostre_site_sobre
        if ($pathinfo === '/sobre') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_sobre;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',  '_locale' => 'pt',  '_route' => 'pt__RG__vostre_site_sobre',);
        }
        not_pt__RG__vostre_site_sobre:

        // en__RG__vostre_site_sobre
        if ($pathinfo === '/en/sobre') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_sobre;
            }

            return array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::sobreAction',  '_locale' => 'en',  '_route' => 'en__RG__vostre_site_sobre',);
        }
        not_en__RG__vostre_site_sobre:

        // pt__RG__vostre_site_index
        if (preg_match('#^/(?P<_locale>[^/]++)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pt__RG__vostre_site_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pt__RG__vostre_site_index')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',  '_locale' => 'pt',));
        }
        not_pt__RG__vostre_site_index:

        // en__RG__vostre_site_index
        if (0 === strpos($pathinfo, '/en') && preg_match('#^/en(?:/(?P<_locale>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__vostre_site_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__vostre_site_index')), array (  '_controller' => 'Vostre\\SiteBundle\\Controller\\PageController::indexAction',  '_locale' => 'en',));
        }
        not_en__RG__vostre_site_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
