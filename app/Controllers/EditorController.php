<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EditorController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "editor") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("editor/dashboard");
    }
}