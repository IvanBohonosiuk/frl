<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Menu;

class MainController extends Controller
{
    public function __construct (Menu $menuModel)
    {
    	$this->data['menu']['left'] = $menuModel->getLeftMenu();
    }
}
