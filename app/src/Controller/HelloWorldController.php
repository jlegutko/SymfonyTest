<?php // App\Controller\HelloController.php
//...
/**
 * Index action.
 *
 * @param string $name User input
 *
 * @return \Symfony\Component\HttpFoundation\Response HTTP response
 *
 * @Route(
 *     "/hello/{name}",
 *     defaults={"name":"World"},
 *     requirements={"name": "[a-zA-Z]+"},
 * )
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HelloWorldController.
 */
class HelloWorldController extends AbstractController
{
    /**
     * Index action.
     *
     * @param string $name User input
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/{name}",
     *     defaults={"name":"World"},
     *     requirements={"name": "[a-zA-Z]+"},
     * )
     */
    public function index(string $name): Response
    {
        return $this->render(
            'hello-world/index.html.twig',
            ['name' => $name]
        );
    }
}