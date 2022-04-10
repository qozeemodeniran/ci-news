<?php

namespace App\Controllers;

class Pages extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function view($page='home') {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title']=ucfirst($page);
        echo View('templates/header', $data);
        echo View('pages/' . $page, $data);
        echo View('templates/footer', $data);
    }
}