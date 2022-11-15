<?php

namespace App\Controllers;

class ShowCard extends Admin
{
    // Start Detail of Cards
    public function detail($id){
        $card = $this->cardsModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Detail Seminar',
            'card' => $card
        ];
        return view('card/detail', $data);
    }
    // End Detail of Cards

    // Start Download Page
    public function download()
    {
        $db = \Config\Database::connect();
        $card = $db->query("SELECT * FROM card ORDER BY id DESC");
        $data = [
            'title' => 'Download',
            'card' => $card
        ];
        return view('card/download', $data);
    }
    // End Download Page

    // Start Materi Page
    public function materi($id){
        $card = $this->cardsModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Materi',
            'card' => $card
        ];
        return view('card/materi', $data);
    }
    // End Materi Page
}