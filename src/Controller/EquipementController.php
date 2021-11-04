<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotations\Route;
use App\Entity\Equipement;
use App\Form\EquipementFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

	/**
	 * @Route ("/accueil")
	 */

class EquipementController extends AbstractController
{

	public function accueil(Environment $twig){
		$equipement = new Equipement();

		$form = $this->createForm(EquipementFormType::class, $equipement);

		return new Response($twig->render('equipement/accueil.html.twig', [
			'equipement_form' => $form->createView()
		]));
	}
}