<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = model(MonsterSizesModel::class);
        $data = [
            'sizes'  => $model->findAll(),
        ];
        return view('home',$data);
    }

    public function login()
    {
        return view('login');
    }

    public function create()
    {
        $model = model(MonsterSizesModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'size_title' => 'required|min_length[5]|max_length[255]',
        ])) {
            $model->save([
                'size_title' => $this->request->getPost('size_title'),
            ]);

            return view('home');
        }

        return view('form');
    }

    public function update()
    {
        $model = model(MonsterSizesModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'size_title' => 'required|min_length[5]|max_length[255]',
        ])) {
            $model->update($this->request->getPost('id'),['size_title' => $this->request->getPost('size_title'),]);

            return view('home');
        }

        return view('form');
    }
}
