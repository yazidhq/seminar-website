<?php

namespace App\Controllers;

class ShowDoc extends Admin
{
    // Start Show Doc
    public function doc()
    {
        $db = \Config\Database::connect();
        $doc = $db->query("SELECT * FROM doc ORDER BY id DESC");
        $data = [
            'title' => 'Documentations',
            'doc' => $doc
        ];
        return view('card/doc', $data);
    }
    // End Show Doc

    // Start Detail of Doc
    public function detailDoc($id){
        $doc = $this->docModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Documentations',
            'doc' => $doc
        ];
        return view('card/detailDoc', $data);
    }
    // End Detail of Doc
}