<?php

namespace App\Tests;

use Symfony\Component\HttpFoundation\Request;
use PHPUnit\Framework\TestCase;
use App\Controller\JudgmentController;

class JudgmentTest extends TestCase
{
    public function testValues(): void
    {
        try {
            $request = new Request;
            $request->request->set('plaintiff', 'A');
            $request->request->set('defendant', 'B');
            $judgmentClass = new JudgmentController;
            $response = $judgmentClass->showResultTest($request);
            if($response && $response != ''){
                echo $response;
                $this->assertTrue(true);
            }else{
                $this->assertTrue(false);
            }
        }catch (\Exception $e){
            $this->assertTrue(false);
        }
    }

    public function testWinPlaintiff(): void
    {
        try {
            $request = new Request;
            $request->request->set('plaintiff', 'KN');
            $request->request->set('defendant', 'NNV');
            $judgmentClass = new JudgmentController;
            $response = $judgmentClass->showResultTest($request);
            if($response && $response != ''){
                echo $response;
                $this->assertTrue(true);
            }else{
                $this->assertTrue(false);
            }
        }catch (\Exception $e){
            $this->assertTrue(false);
        }
    }

    public function testWinDefendant(): void
    {
        try {
            $request = new Request;
            $request->request->set('plaintiff', 'NNV');
            $request->request->set('defendant', 'KN');
            $judgmentClass = new JudgmentController;
            $response = $judgmentClass->showResultTest($request);
            if($response && $response != ''){
                echo $response;
                $this->assertTrue(true);
            }else{
                $this->assertTrue(false);
            }
        }catch (\Exception $e){
            $this->assertTrue(false);
        }
    }

    public function testWinCaracter(): void
    {
        try {
            $request = new Request;
            $request->request->set('plaintiff', 'N#V');
            $request->request->set('defendant', 'NVV');
            $judgmentClass = new JudgmentController;
            $response = $judgmentClass->showResultTest($request);
            if($response && $response != ''){
                echo $response;
                $this->assertTrue(true);
            }else{
                $this->assertTrue(false);
            }
        }catch (\Exception $e){
            $this->assertTrue(false);
        }
    }
}
