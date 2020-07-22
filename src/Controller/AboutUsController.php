<?php

namespace App\Controller;

use App\Entity\BasePages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AboutUsController extends AbstractController
{

    /**
     * @Route("/about-us",name="about-us")
     */

    public function index()
    {
        {
            $em = $this->getDoctrine()->getManager();
            $page = $em->getRepository(BasePages::class)->findOneBy(['id' => 4]);

            return $this->render("pages/about-us.html.twig", array(
                'page' => $page,
            ));
        }
    }
}