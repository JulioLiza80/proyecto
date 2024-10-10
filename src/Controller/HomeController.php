<?php

namespace App\Controller;

use App\Entity\Campanias;
use App\Entity\Gafas;
use App\Entity\Lentillas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/')] //establecemos la pagina de inicio
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityPublicidad,EntityManagerInterface $entityGafas,EntityManagerInterface $entityLentillas): Response
    {
        $publicidad= $entityPublicidad->getRepository(Campanias::class)->findAll();
        $gafas= $entityGafas->getRepository(Gafas::class)->findAll();
        $lentillas= $entityLentillas->getRepository(Lentillas::class)->findAll();
        
        //dd($publicidad,$gafas,$lentillas);
        return $this->render('index.html.twig', [
            'controller_name' => 'Incio',
            'publicidad' => $publicidad,
            'gafas' => $gafas,
            'lentillas' => $lentillas
        ]);
    }
}
