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
        $response = $this->calculatePoints($plaintiff, $defendant);
        return $this->render('formJudgment.html.twig', ['message' => $response]);
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

    private function calculatePoints($plaintiff, $defendant): string
    {
        $error = 0;
        $message = '';
        $text = '';
        $crumb = '';

        $this->deleteInArray($plaintiff, 'K', 'V');
        $this->deleteInArray($defendant, 'K', 'V');

        $plaintiffPoints = $this->replaceLetterByPoint($plaintiff);
        $defendantPoints = $this->replaceLetterByPoint($defendant);

        if (isset(array_count_values($plaintiff)['#']) && array_count_values($plaintiff)['#'] > 1) {
            $message = 'Solo puede faltar una firma en una de las dos partes.';
            $error++;
        } elseif (isset(array_count_values($defendant)['#']) && array_count_values($defendant)['#'] > 1) {
            $message = 'Solo puede faltar una firma en una de las dos partes.';
            $error++;
        } elseif (isset(array_count_values($plaintiff)['#']) && isset(array_count_values($defendant)['#'])) {
            $message = 'Solo puede faltar una firma en una de las dos partes.';
            $error++;
        }

        if ($error == 0) {
            if (array_sum($plaintiffPoints) <= array_sum($defendantPoints) && isset(array_count_values($plaintiff)['#'])) {
                $signature = $this->replaceCharacterByPoint($plaintiffPoints, $defendantPoints);
                $crumb = 'plaintiff';
                if ($signature == 'K') {
                    $this->deleteInArray($plaintiffPoints, $this->points['V'], $this->points['V']);
                }
                $plaintiffPoints[array_search(0, $plaintiffPoints)] += $this->points[$signature];
            } elseif (array_sum($defendantPoints) <= array_sum($plaintiffPoints) && isset(array_count_values($defendant)['#'])) {
                $signature = $this->replaceCharacterByPoint($defendantPoints, $plaintiffPoints);
                $crumb = 'defendant';
                if ($signature == 'K') {
                    $this->deleteInArray($defendantPoints, $this->points['V'], $this->points['V']);
                }
                $defendantPoints[array_search(0, $defendantPoints)] += $this->points[$signature];
            }

            if (isset($signature)) {
                if ($crumb == 'plaintiff') {
                    $text = 'Se ha retornado la firma ' . $signature . ' para el demandante. ';
                } elseif ($crumb == 'defendant') {
                    $text = 'Se ha retornado la firma ' . $signature . ' para el demandado. ';
                }
            }

            if (array_sum($plaintiffPoints) > array_sum($defendantPoints)) {
                $message = $text . 'Gana el Demandante';
            } elseif (array_sum($defendantPoints) > array_sum($plaintiffPoints)) {
                $message = $text . 'Gana el Demandado';
            } elseif (array_sum($defendantPoints) == array_sum($plaintiffPoints)) {
                $message = $text . 'Empate';
            }
        }

        return $message;
    }

    private function deleteInArray(&$array, $search, $delete)
    {
        if (in_array($search, $array)) {
            $array = array_values(array_diff($array, [$delete]));
        }
    }

    private function replaceLetterByPoint($array): array
    {
        $points = $this->points;
        return array_map(function ($value) use ($points) {
            return $points[$value];
        }, $array);
    }

    private function replaceCharacterByPoint($less, $higher): string
    {
        $crumb = '';
        $lessPoints = array_sum($less);
        $higherPoints = array_sum($higher);
        while ($lessPoints <= $higherPoints) {
            if ($crumb == '') {
                $lessPoints += $this->points['V'];
                $crumb = 'V';
            } elseif ($crumb == 'V') {
                $lessPoints -= $this->points['V'];
                $lessPoints += $this->points['N'];
                $crumb = 'N';
            } elseif ($crumb == 'N') {
                $lessPoints -= $this->points['N'];
                $lessPoints += $this->points['K'];
                $crumb = 'K';
            } elseif ($crumb == 'K') {
                break;
            }
        }
        return $crumb;
    }
}
