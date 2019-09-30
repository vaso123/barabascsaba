<?php

namespace App\Controller;

use App\Library\HtmlDecorate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @var HtmlDecorate
     */
    private $htmlDecorate;


    public function __construct(
        HtmlDecorate $htmlDecorate
    )
    {
        $this->htmlDecorate = $htmlDecorate;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render("mainPage.html.twig");
    }
}
