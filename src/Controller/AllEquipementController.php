<?php 

namespace App\Controller;

use App\Entity\Equipement;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class AllEquipementController extends AbstractController{
	public function allequipement (Environment $twig ){
		$allequipement = $this->getDoctrine()->getRepository(Equipement::class)->findAll();

		// dd($equipement);

		return new Response($twig->render('equipement/allequipement.html.twig', [
			'all_equipement' => $allequipement,

		]));
	}
}
