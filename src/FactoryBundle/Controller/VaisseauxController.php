<?php

namespace FactoryBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class VaisseauxController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ves = $em->getRepository('FactoryBundle:Spaceship')
            ->findAll();
        return $this->render(
            'page/index.html.twig', [
            'ves' => $ves
        ]);
    }
}
