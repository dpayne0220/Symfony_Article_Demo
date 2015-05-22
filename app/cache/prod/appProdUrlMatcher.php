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

        // app_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_default_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_default_index',);
        }

        // app_default_createarticle
        if ($pathinfo === '/createArticle') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createArticle',  '_route' => 'app_default_createarticle',);
        }

        // app_default_postarticle
        if ($pathinfo === '/postArticle') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::postArticle',  '_route' => 'app_default_postarticle',);
        }

        // viewArticle
        if (0 === strpos($pathinfo, '/view') && preg_match('#^/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewArticle')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewArticle',));
        }

        if (0 === strpos($pathinfo, '/comment')) {
            // app_default_postcomment
            if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_postcomment')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::postComment',));
            }

            // _comment
            if ($pathinfo === '/comment') {
                return array (  '_controller' => 'AppBundle:Controller:comment',  '_route' => '_comment',);
            }

        }

        // _article
        if ($pathinfo === '/article') {
            return array (  '_article' => 'AppBundle:Controller:article',  '_route' => '_article',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
