<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Debugeur;
use App\Entity\Developpeur;
use App\Entity\Client;
use App\Entity\Projet;
use App\Entity\Ticket;
use App\Entity\Rapport;
use App\Entity\Bug;
use App\Entity\NiveauBug;
use App\Entity\Statut;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Innobug');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('debugeur', 'fas fa-list', Debugeur::class);
        yield MenuItem::linkToCrud('developpeur', 'fas fa-list', Developpeur::class);
        yield MenuItem::linkToCrud('client', 'fas fa-list', Client::class);
        yield MenuItem::linkToCrud('projet', 'fas fa-list', Projet::class);
        yield MenuItem::linkToCrud('ticket', 'fas fa-list', Ticket::class);
        yield MenuItem::linkToCrud('rapport', 'fas fa-list', Rapport::class);
        yield MenuItem::linkToCrud('bug', 'fas fa-list', Bug::class);
        yield MenuItem::linkToCrud('Niveau', 'fas fa-list', NiveauBug::class);
        yield MenuItem::linkToCrud('Statut', 'fas fa-list', Statut::class);
    }
}
