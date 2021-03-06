<?php
/**
 * Hdip\controller\main
 */
namespace Hdip\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Hdip\Model\DvdRepository;
use Hdip\Model\User;

/**
 * Class MainController
 * @package Hdip\Controller
 */
class MainController
{

    /**
     * action for route:    /
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function indexAction(Request $request, Application $app)
    {
        // test if 'username' stored in session ...
        $username = getAuthenticatedUserName($app);
        $role = getAuthenticatedUserName($app);
        $argsArray = array(
            'username' => $username,
            'role' => $role
        );

        // get reference to our repository
        //$dvdRepository = new DvdRepository();

        // add to args array
        // ------------
        //$argsArray['dvds'] = $dvdRepository->getAllDvds();

        // render (draw) template
        // ------------
        $templateName = 'index';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * action for route:    /about
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function aboutAction(Request $request, Application $app)
    {
        // test if 'username' stored in session ...
        $username = getAuthenticatedUserName($app);
        $role = getAuthenticatedrole($app);

        $argsArray = array(
            'username' => $username,
            'role'=>$role
        );

        // render (draw) template
        // ------------
        $templateName = 'about';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }
}
