<?php

namespace App\Http\Controllers;


use App\Services\MessageService;

class DemoController extends Controller
{
    public function showMessage(MessageService $messageService)
    {
        return $messageService->getMessage();
    }
}