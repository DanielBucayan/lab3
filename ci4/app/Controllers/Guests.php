<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'name' => 'Guest Archive',
        ];

        return view('templates/header', $data)
            . view('guests/index')
            . view('templates/footer');


    }

    public function show($name = null)
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getGuest($name);

        if (empty($data['guest'])) {
            throw new PageNotFoundException('Cannot find the guest item: ' . $name);
        }

        $data['name'] = $data['guest']['name'];

        return view('templates/header', $data)
            . view('guests/view')
            . view('templates/footer');		

    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['name' => 'Guest Form'])
            . view('guests/create')
            . view('templates/footer');
    }	

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'website', 'suggestion', 'comment', 'gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GuestModel::class);

        $model->save([
            'name'  => url_title($data['name'], '-', true),
            'email'  => $data['email'],
            'website'  => $data['website'],
			'suggestion'  => $data['suggestion'],
            'comment'  => $data['comment'],
            'gender'  => $data['gender'],

        ]);

        return view('templates/header', ['name' => 'Create a guest item'])
            . view('guests/success')
            . view('templates/footer');
    }


}