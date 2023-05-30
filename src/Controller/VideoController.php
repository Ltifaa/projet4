<?php

namespace App\Controller;

use index;
use App\Repository\VideoRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VideoController extends AbstractController
{
    #[Route('/video', name: 'app_video')]
    public function index(VideoRepository $videoRepository): Response
    {
        $videos = $videoRepository->findAll();
        return $this->render('video/index.html.twig', [
            // 'controller_name' => 'VideoController',
            'videos' => $videos,
        ]);
    }
    
    #[Route('/video/{slug}', name: 'app_video_show')]
    public function showVideo($slug, VideoRepository $videoRepository): Response
    {
        // On récupère le livre correspondant au slug
        $video = $videoRepository->findOneBy(['slug'=>$slug]);
        // On rend la page en lui passant le livre
        return $this->render('video/show.html.twig', [
            'video' => $video,
        ]);
    }
}
