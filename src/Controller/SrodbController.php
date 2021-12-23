<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Routing\Annotation\Route;

class SrodbController extends AbstractController
{
    /**
     * @Route("/", name="mainpage")
     */
    public function index(Request $request): Response
    {
       	
		
		$command="view";	
		if ($name = $request->query->get('command')) {
			if($name=="edit"){
				$command = "editing";
			}else{
				$command="Unknown command";
			
			}				
			
		}

		
		return $this->render('srodb/index.html.twig', [
            'controller_name' => 'SrodbController',
			'command' => $command,
        ]);
    }
}
