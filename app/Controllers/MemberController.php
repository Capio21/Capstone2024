<?php

namespace App\Controllers;
use App\Models\MemberModel;
use App\Controllers\BaseController;

class MemberController extends BaseController
{
    public function index()
    {
        $model = new MemberModel();
        $data['members'] = $model->findAll();

        return view('members/index', $data);
    }

    public function create()
    {
        return view('members/create');
    }

    public function store()
    {
        $model = new MemberModel();

        $data = [
            'first_name'    => $this->request->getPost('first_name'),
            'last_name'     => $this->request->getPost('last_name'),
            'middle_name'   => $this->request->getPost('middle_name'),
            'contact_number' => $this->request->getPost('contact_number'),
            'sex'           => $this->request->getPost('sex'),
            'location'      => $this->request->getPost('location'),
            // Add other fields as needed
        ];

        $model->insert($data);

        return redirect()->to('/members');
    }

    public function edit($id = null)
    {
        $model = new MemberModel();
        $data['member'] = $model->find($id);

        return view('members/edit', $data);
    }

    public function update()
    {
        $model = new MemberModel();

        $data = [
            'first_name'    => $this->request->getPost('first_name'),
            'last_name'     => $this->request->getPost('last_name'),
            'middle_name'   => $this->request->getPost('middle_name'),
            'contact_number' => $this->request->getPost('contact_number'),
            'sex'           => $this->request->getPost('sex'),
            'location'      => $this->request->getPost('location'),
            // Add other fields as needed
        ];

        $id = $this->request->getPost('id');
        $model->update($id, $data);

        return redirect()->to('/members');
    }

    public function delete($id = null)
    {
        $model = new MemberModel();
        $model->delete($id);

        return redirect()->to('/members');
    }
}

