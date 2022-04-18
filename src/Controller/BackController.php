<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    /**
     * @Route("/dashbord", name="dashbord")
     */
    public function index(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }

	/**
	 * @Route("/dashbordmylistings", name="dashbordmylistings")
	 */
	public function dashbordmylistings(): Response
	{
		return $this->render('back/dashboard-my-listings.html.twig', [
			'controller_name' => 'BackController',
		]);
	}

	/**
	 * @Route("/dashbordmyfavorites", name="dashbordmyfavorites")
	 */
	public function dashbordmyfavorites(): Response
	{
		return $this->render('back/dashboard-my-favorites.html.twig', [
			'controller_name' => 'BackController',
		]);
	}

	/**
	 * @Route("/dashbordmyreviews", name="dashbordmyreviews")
	 */
	public function dashbordmyreviews(): Response
	{
		return $this->render('back/dashboard-reviews.html.twig', [
			'controller_name' => 'BackController',
		]);
	}

	/**
	 * @Route("/dashbordmybookings", name="dashbordmybookings")
	 */
	public function dashbordmybookings(): Response
	{
		return $this->render('back/dashboard-bookings.html.twig', [
			'controller_name' => 'BackController',
		]);
	}

	/**
	 * @Route("/dashbordpackage", name="dashbordpackage")
	 */
	public function dashbordpackage(): Response
	{
		return $this->render('back/dashboard-packages.html.twig', [
			'controller_name' => 'BackController',
		]);
	}

	/**
	 * @Route("/dashbordaddlisting", name="dashbordaddlisting")
	 */
	public function dashbordaddlisting(): Response
	{
		return $this->render('back/dashboard-add-listing.html.twig', [
			'controller_name' => 'BackController',
		]);
	}

	/**
	 * @Route("/dashbordprofil", name="dashbordprofil")
	 */
	public function dashbordprofil(): Response
	{
		return $this->render('back/dashboard-my-profil.html.twig', [
			'controller_name' => 'BackController',
		]);
	}

}
