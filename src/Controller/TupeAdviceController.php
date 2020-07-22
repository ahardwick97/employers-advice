<?php

namespace App\Controller;

use App\Entity\BasePages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class TupeAdviceController extends AbstractController
{

    /**
     * @Route("/tupe-advice",name="tupe-advice")
     */

    public function index()
    {
        {
            $em = $this->getDoctrine()->getManager();
            $page = $em->getRepository(BasePages::class)->findOneBy(['id' => 2]);

            return $this->render("pages/tupe-advice.html.twig", array(
                'page' => $page,
            ));
        }
    }
}