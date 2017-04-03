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
    public function afficherCategAction()
    {
        $em=$this->getDoctrine()->getManager();
        $armeRepository = $em->getRepository('ZeldaBundle:Arme');
        $lesArmes = $armeRepository->findAll();


        $em=$this->getDoctrine()->getManager();
        $categRepository = $em->getRepository('ZeldaBundle:Categorie');
        $lesCateg = $categRepository->findAll();


        return $this->render('ZeldaBundle:Zelda:categorie.html.twig', array('lesArmes'=>$lesArmes, 'lesCateg'=>$lesCateg));
    }
    public function afficherItemAction($id)
    {

        $em=$this->getDoctrine()->getManager();
        $armeRepository = $em->getRepository('ZeldaBundle:Arme');
        $uneArme = $armeRepository->find($id);

        $em=$this->getDoctrine()->getManager();
        $lesArmesRepository = $em->getRepository('ZeldaBundle:Arme');
        $listArmes=$lesArmesRepository->findAll();

        return $this->render('ZeldaBundle:Zelda:item.html.twig', array('uneArme'=>$uneArme, 'lesArmes'=>$listArmes));
    }

    public function afficherMonstreCategAction()
    {
        $em = $this->getDoctrine()->getManager();
        $monstreRepository = $em->getRepository('ZeldaBundle:Monstre');
        $lesMonstres = $monstreRepository->findAll();
        $em=$this->getDoctrine()->getManager();
        $categMonstreRepository = $em->getRepository('ZeldaBundle:CategorieMonstre');
        $laCategMonstre = $categMonstreRepository->findAll();

        return $this->render('ZeldaBundle:Zelda:categorieMonstre.html.twig',array('lesMonstres'=>$lesMonstres,'lesCategMonstre'=>$laCategMonstre));
    }

    public function afficherMonstreAction($id)
    {

        $em=$this->getDoctrine()->getManager();
        $monstreRepository = $em->getRepository('ZeldaBundle:Monstre');
        $unMonstre = $monstreRepository->find($id);

        $em=$this->getDoctrine()->getManager();
        $lesMonstresRepository = $em->getRepository('ZeldaBundle:Monstre');
        $listMonstres=$lesMonstresRepository->findAll();

        return $this->render('ZeldaBundle:Zelda:monstre.html.twig', array('unMonstre'=>$unMonstre, 'lesMonstres'=>$listMonstres));
    }
}
