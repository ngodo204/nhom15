<?php

namespace Php2\Exam\Controllers;

use Php2\Exam\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'ĐIỀN TÊN VÀ MÃ SINH VIÊN TẠI ĐÂY';

        $this->renderView('home', [
            'name' => $name
        ]);
    }
}