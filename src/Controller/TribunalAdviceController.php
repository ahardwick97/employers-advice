<?php

namespace App\Controller;

use App\Entity\BasePages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class TribunalAdviceController extends AbstractController
{

    /**
     * @Route("/pages/tribunal-advice",name="tribunal-advice")
     */

    public function index()
    {
        {
            $em = $this->getDoctrine()->getManager();
            $page = $em->getRepository(BasePages::class)->findOneBy(['id' => 3]);

            return $this->render("pages/tribunal-advice.html.twig", array(
                'page' => $page,
            ));
        }
    }
}