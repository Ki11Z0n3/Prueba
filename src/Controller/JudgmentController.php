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
        if ($request->request->get('plaintiff') !== null && $request->request->get('defendant') !== null) {
            return $this->showResult($request);
        }
        return $this->render('formJudgment.html.twig');
    }

    private function showResult(Request $request): Response
    {
        $plaintiff = array_change_key_case(str_split($request->request->get('plaintiff')), CASE_UPPER);
        $defendant = array_change_key_case(str_split($request->request->get('defendant')), CASE_UPPER);
        if (!$this->checkCharacter($plaintiff, $defendant)) {
            return $this->render('formJudgment.html.twig', ['message' => 'Solo puede contener las letras K, N, V, #.']);
        }
    }

    private function checkCharacter($plaintiff, $defendant): bool
    {
        $array = array_merge($plaintiff, $defendant);
        foreach ($array as $value) {
            if ($value != 'K' && $value != 'N' && $value != 'V' && $value != '#') {
                return false;
            }
        }
        return true;
    }
}
