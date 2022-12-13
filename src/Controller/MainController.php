<?php

namespace App\Controller;

use App\Entity\Video;
use App\Repository\ClientRepository;
use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(VideoRepository $videoRepository, ClientRepository $clientRepository): Response
    {

        $videos = $videoRepository->findBy(array(),array('id'=>'DESC'),6,0);
        $clients = $clientRepository->findBy(array(),array('id'=>'DESC'),4,0);
        return $this->render('main/index.html.twig', [
            'videos' => $videos,
            'clients' => $clients,

        ]);
    }

}

/* #[Route('/main')] */