<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class JudgmentController extends AbstractController
{
    private $points = [
        'K' => 5,
        'N' => 2,
        'V' => 1,
        '#' => 0
    ];

    /**
     * @Route("/")
     */
    public function showForm(Request $request): Response
    {
        return $this->render('formJudgment.html.twig');
    }
}
