<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Homepage';
        $this->view('home/index', $data);
    }
}
