<?php

namespace App\Controllers;

class Pages extends ShowCard
{
    public function index()
    {
        // Start Card find
        // $db = \Config\Database::connect();
        // $card = $db->query("SELECT * FROM card ORDER BY id DESC");
        $card = $this->cardsModel->findAll(); //('SELECT' ANOTHER WAY)
        $pagination = $this->cardsModel->orderBy('id', 'DESC')->paginate(6, 'card');
        $data = [
            'title' => 'Seminar',
            'card' => $pagination,
            'pager' => $this->cardsModel->pager
        ];
        // end Card find
        return view('pages/home', $data);
    }

    public function thankyou()
    {
        $data = [
            'title' => 'Big Thanks'
        ];
        return view('pages/thankyou', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('pages/contact', $data);
    }
}