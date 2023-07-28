<?php

namespace App\Controllers;

use App\Models\ModelDatabase;

class Home extends BaseController
{
    public function index()
    {
        return view('layout/index');
    }
    public function createIndex()
    {
        return view('layout/create');
    }

    public function createAccount()
    {
        $insertData = new ModelDatabase();

        $data = [
            'name' => $this->request->getPost('userName'),
            'course' => $this->request->getPost('userCourse'),
            'batch' => $this->request->getPost('userBatch'),
            'email' => $this->request->getPost('userEmail'),

        ];
        $insertData->insert($data);
        return redirect()->to('/');
    }

    public function listView()
    {
        $fetchData = new ModelDatabase();
        $data['getData'] =  $fetchData->findAll();
        return view('layout/index', $data);
    }

    public function deleteAccount($id)
    {
        $fetchId = new ModelDatabase();

        $fetchId->delete($id);
        return redirect()->to('index');
    }

    public function editIndex($id)

    {
        $fetchId = new ModelDatabase();
        $data['findId'] = $fetchId->find($id);
        return view('layout/edit', $data);
    }

    public function updateUser($id)
    {
        $fetchUser = new ModelDatabase();

        $data = [

            'name' => $this->request->getPost('userName'),
            'course' => $this->request->getPost('userCourse'),
            'batch' => $this->request->getPost('userBatch'),
            'email' => $this->request->getPost('userEmail')
        ];
        $fetchUser->update($id, $data);
        return redirect()->to('index');
    }
}
