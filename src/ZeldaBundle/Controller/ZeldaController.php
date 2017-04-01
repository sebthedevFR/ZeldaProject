<?php

namespace ZeldaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;

class ZeldaController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZeldaBundle:Zelda:index.html.twig');
    }
    public function afficherCategAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $armeRepository = $em->getRepository('ZeldaBundle:Arme');
        $lesArmes = $armeRepository->findBy(
            array('laCategorie' => $id)
        );

        $em=$this->getDoctrine()->getManager();
        $categRepository = $em->getRepository('ZeldaBundle:Categorie');
        $laCateg = $categRepository->find($id);


        return $this->render('ZeldaBundle:Zelda:categorie.html.twig', array('lesArmes'=>$lesArmes, 'laCateg'=>$laCateg));
    }
    public function afficherItemAction($id)
    {

        $em=$this->getDoctrine()->getManager();
        $armeRepository = $em->getRepository('ZeldaBundle:Arme');
        $uneArme = $armeRepository->find($id);

        return $this->render('ZeldaBundle:Zelda:item.html.twig', array('uneArme'=>$uneArme));
    }
}
