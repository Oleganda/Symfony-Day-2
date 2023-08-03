<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tours;
use App\Repository\ToursRepository;

class TourDialsController extends AbstractController
{
    #[Route('/dials', name: 'app_dials')]
    public function createAction(ToursRepository $toursDials): Response
    {
        $dials = $toursDials->findAll();
        return $this->render(
            "travel_agency/dials.html.twig",
            [
                "dials" => $dials
            ]
        );
    }

    #[Route('/details/{id}', name: 'app_details')]
    public function tourDetails(ToursRepository $toursDials, $id): Response
    {
        $dials = $toursDials->find($id);
        return $this->render(
            "travel_agency/details.html.twig",
            [
                "dials" => $dials
            ]
        );
    }
}
