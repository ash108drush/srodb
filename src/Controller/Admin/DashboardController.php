<?php

namespace App\Controller\Admin;


use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\SrodbaseCrudController;
use App\Controller\Admin\InvcatCrudController;
use App\Entity\Srodbase;
use App\Entity\Invcat;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
	    //$routeBuilder = $this->get(AdminUrlGenerator::class);

        //return $this->redirect($routeBuilder->setController(OneOfYourCrudController::class)->generateUrl());

        // you can also redirect to different pages depending on the current user
        //if ('jane' === $this->getUser()->getUsername()) {
        //    return $this->redirect('...');
       // }

        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
       // return $this->render('some/path/my-dashboard.html.twig');
   // }
		
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Srodbase');
    }

    public function configureMenuItems(): iterable
    {
        return [
		MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
		MenuItem::linkToCrud('Srodbase', 'fas fa-list', Srodbase::class),
		//yield MenuItem::linkToCrud('SrodbController', 'fas fa-list', SrodbController::class);
		MenuItem::linkToCrud('Invcat', 'fas fa-list', Invcat::class),
        //yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
		//MenuItem::linkToLogout('Logout', 'fa fa-exit'),
		];
    }
}
