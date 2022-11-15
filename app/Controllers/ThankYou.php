<?php

namespace App\Controllers;

class ThankYou extends Admin
{
    // Start Contact
    public function contact()
    {
        $db = \Config\Database::connect();
        $contact = $db->query("SELECT * FROM contact ORDER BY id DESC");
        $data = [
            'title' => 'Contact',
            'contact' => $contact
        ];
        return view('admin/contact', $data);
    }
    public function save_Contact(){
        $data = [
            'title' => 'Contact'
        ];
        $this->contactModel->save([
            'name' => $this->request->getVar('name'),
            'subject' => $this->request->getVar('subject'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
        ]);
        return view('pages/thankyou', $data);
    }
    // End Contact
}
