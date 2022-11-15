<?php

namespace App\Controllers;

use App\Models\SeminarModel;
use App\Models\CardModel;
use App\Models\DocModel;

class Admin extends BaseController
{   
    protected $contactModel;
    protected $cardsModel;
    protected $docModel;

    public function __construct(){
        $this->contactModel = new SeminarModel();
        $this->cardsModel = new CardModel();
        $this->docModel = new DocModel();
    }

    // Start Card
    public function card(){
        $data = [
            'title' => 'Card'
        ];
        return view('admin/formCard', $data);
    }
    // for show card: at ShowCard controller with card_find method
    public function save_card(){
        $data = [
            'title' => 'Seminar'
        ];
        // File
        $filePdf = $this->request->getFile('file');
        // Move File to folder
        $filePdf->move('assets/img/scenery/file');
        // get file name
        $nameFile = $filePdf->getName();
        // Image
        $fileImage = $this->request->getFile('gambar');
        // Move image to folder
        $fileImage->move('assets/img/scenery/cover');
        // get file name
        $nameImage = $fileImage->getName();
        $this->cardsModel->save([   
            'nama' => $this->request->getVar('nama'),
            'periode' => $this->request->getVar('periode'),
            'narasumber' => $this->request->getVar('narasumber'),
            'mc' => $this->request->getVar('mc'),
            'kontak' => $this->request->getVar('kontak'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kuota' => $this->request->getVar('kuota'),
            'mulai' => $this->request->getVar('mulai'),
            'selesai' => $this->request->getVar('selesai'),
            'file' => $nameFile,
            'gambar' => $nameImage,
            'gform' => $this->request->getVar('gform')
        ]);
        return view('pages/thankyou', $data);
    }
    // End Card

    // Start Documentation
    public function doc(){
        $data = [
            'title' => 'Documentations'
        ];
        return view('admin/formDoc', $data);
    }
    public function save_doc(){
        $data = [
            'title' => 'Documentations'
        ];
        // Cover
        $fileImage = $this->request->getFile('image');
        $fileImage->move('assets/img/scenery/doc/image');
        $nameImage = $fileImage->getName();
        // Image 1
        $fileImage1 = $this->request->getFile('1st-img');
        $fileImage1->move('assets/img/scenery/doc/image');
        $nameImage1 = $fileImage1->getName();
        // Image 2
        $fileImage2 = $this->request->getFile('2nd-img');
        $fileImage2->move('assets/img/scenery/doc/image');
        $nameImage2 = $fileImage2->getName();
        // Image 3
        $fileImage3 = $this->request->getFile('3rd-img');
        $fileImage3->move('assets/img/scenery/doc/image');
        $nameImage3 = $fileImage3->getName();
        // Image 4
        $fileImage4 = $this->request->getFile('4th-img');
        $fileImage4->move('assets/img/scenery/doc/image');
        $nameImage4 = $fileImage4->getName();
        // Image 5
        $fileImage5 = $this->request->getFile('5th-img');
        $fileImage5->move('assets/img/scenery/doc/image');
        $nameImage5 = $fileImage5->getName();
        // Image 6
        $fileImage6 = $this->request->getFile('6th-img');
        $fileImage6->move('assets/img/scenery/doc/image');
        $nameImage6 = $fileImage6->getName();
        // File PPT
        $filePPT = $this->request->getFile('ppt');
        $filePPT->move('assets/img/scenery/doc/ppt');
        $namePPT = $filePPT->getName();
        $this->docModel->save([   
            'nama' => $this->request->getVar('nama'),
            'video' => $this->request->getVar('video'),
            'image' => $nameImage,
            '1st-img' => $nameImage1,
            '2nd-img' => $nameImage2,
            '3rd-img' => $nameImage3,
            '4th-img' => $nameImage4,
            '5th-img' => $nameImage5,
            '6th-img' => $nameImage6,
            'ppt' => $namePPT
        ]);
        return view('pages/thankyou', $data);
    }
    // End Documentation

    // Start Admin Home
    public function adminHome(){
        $data = [
            'title' => 'Admin'
        ];
        return view('admin/admin', $data);
    }
    // End Admin Home

    // Start Show Pendaftar
     public function showPendaftar(){
        $db = \Config\Database::connect();
        $daftar = $db->query("SELECT * FROM pendaftar ORDER BY id DESC");
        $data = [
            'title' => 'Pendaftar',
            'daftar' => $daftar
        ];
        return view('admin/showPendaftar', $data);
    }
    // End Show Pendaftar
}