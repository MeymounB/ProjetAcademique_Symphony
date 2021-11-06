<?php

namespace App\Controller;

use App\Entity\Equipement;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class DescriptionController extends AbstractController{
	public function allequipement (Environment $twig ){
		
		return new Response($twig->render('equipement/description.html.twig'));

	}
}