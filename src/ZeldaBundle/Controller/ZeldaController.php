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
        $lesAutresArmes = $this->getDoctrine()->getRepository('ZeldaBundle:Arme')->lesAutresArmes($id);

        return $this->render('ZeldaBundle:Zelda:item.html.twig', array('uneArme'=>$uneArme, 'lesArmes'=>$listArmes, 'lesAutresArmes' => $lesAutresArmes));
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
        $lesAutresMonstres = $this->getDoctrine()->getRepository('ZeldaBundle:Monstre')->lesAutresMonstres($id);

        return $this->render('ZeldaBundle:Zelda:monstre.html.twig', array('unMonstre'=>$unMonstre, 'lesMonstres'=>$listMonstres, 'lesAutresMonstres' => $lesAutresMonstres));
    }

    public function afficherMatCategAction()
    {
        $em=$this->getDoctrine()->getManager();
        $materiauRepository = $em->getRepository('ZeldaBundle:Materiau');
        $lesMateriaux= $materiauRepository->findAll();


        $em=$this->getDoctrine()->getManager();
        $categRepository = $em->getRepository('ZeldaBundle:CategorieMateriau');
        $lesCateg = $categRepository->findAll();


        return $this->render('ZeldaBundle:Zelda:categorieMateriau.html.twig', array('lesMateriaux'=>$lesMateriaux, 'lesCateg'=>$lesCateg));
    }

    public function afficherMatAction($id)
    {

        $em=$this->getDoctrine()->getManager();
        $materiauRepository = $em->getRepository('ZeldaBundle:Materiau');
        $leMateriau= $materiauRepository->find($id);

        $em=$this->getDoctrine()->getManager();
        $categRepository = $em->getRepository('ZeldaBundle:Materiau');
        $lesCateg = $categRepository->findAll();
        $lesAutresMateriaux = $this->getDoctrine()->getRepository('ZeldaBundle:Materiau')->lesAutresMateriaux($id);

        return $this->render('ZeldaBundle:Zelda:materiau.html.twig', array('leMateriau'=>$leMateriau, 'lesCateg'=>$lesCateg, 'lesAutresMateriaux'=>$lesAutresMateriaux));
    }

    public  function afficherAnimalCategAction()
    {
        $em = $this->getDoctrine()->getManager();
        $animauxRepository = $em->getRepository('ZeldaBundle:Animaux');
        $lesAnimaux = $animauxRepository->findAll();

        $em = $this->getDoctrine()->getManager();
        $categRepository = $em->getRepository('ZeldaBundle:CategorieAnimaux');
        $lesCategAnimaux = $categRepository->findAll();
        return $this->render('ZeldaBundle:Zelda:categorieAnimaux.html.twig', array('lesAnimaux'=>$lesAnimaux, 'lesCategAnimaux'=>$lesCategAnimaux));
    }

    public  function  afficherAnimalAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $animauxRepository = $em->getRepository('ZeldaBundle:Animaux');
        $leAnimal = $animauxRepository->find($id);

        $em = $this->getDoctrine()->getManager();
        $lesAnimauxRepository = $em->getRepository('ZeldaBundle:Animaux');
        $lesAnimaux = $lesAnimauxRepository->findAll();
        $lesAutresAnimaux = $this->getDoctrine()->getRepository('ZeldaBundle:Animaux')->lesAutresAnimaux($id);

        return $this->render('ZeldaBundle:Zelda:animaux.html.twig', array('leAnimal'=>$leAnimal,'lesAnimaux'=>$lesAnimaux, 'lesAutresAnimaux' => $lesAutresAnimaux));
    }
}
