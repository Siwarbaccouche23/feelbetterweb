<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{

	/**
	 * @Route("/", name="app_front")
	 */
	public function indexFront(): Response
	{
		return $this->render('front/index.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/DoctorFront", name="DoctorFront")
	 */
	public function DoctorFront(): Response
	{
		return $this->render('front/doctor-layout-1.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/Doctor2Front", name="Doctor2Front")
	 */
	public function Doctor2Front(): Response
	{
		return $this->render('front/doctor-layout-2.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/MapFront", name="MapFront")
	 */
	public function MapFront(): Response
	{
		return $this->render('front/map-grid-layout.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/Map2Front", name="Map2Front")
	 */
	public function Map2Front(): Response
	{
		return $this->render('front/map-list-layout.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/LoginFront", name="LoginFront")
	 */
	public function LoginFront(): Response
	{
		return $this->render('front/page-login.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/SignupFront", name="SignupFront")
	 */
	public function SignupFront(): Response
	{
		return $this->render('front/page-sign-up.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/singlelistingsFront", name="singlelistingsFront")
	 */
	public function singlelistingsFront(): Response
	{
		return $this->render('front/single.listings.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/contactusFront", name="contactusFront")
	 */
	public function contactusFront(): Response
	{
		return $this->render('front/contactus.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/bloggridFront", name="bloggridFront")
	 */
	public function bloggridFront(): Response
	{
		return $this->render('front/blog-grid.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/bloglistFront", name="bloglistFront")
	 */
	public function bloglistFront(): Response
	{
		return $this->render('front/blog-list.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/blogclassicFront", name="blogclassicFront")
	 */
	public function blogclassicFront(): Response
	{
		return $this->render('front/blog-classic.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/blogsingleFront", name="blogsingleFront")
	 */
	public function blogsingleFront(): Response
	{
		return $this->render('front/blog-single.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/aboutusFront", name="aboutusFront")
	 */
	public function aboutusFront(): Response
	{
		return $this->render('front/page-about.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

	/**
	 * @Route("/erreurFront", name="erreurFront")
	 */
	public function erreurFront(): Response
	{
		return $this->render('front/page-404.html.twig', [
			'controller_name' => 'FrontController',
		]);
	}

}
