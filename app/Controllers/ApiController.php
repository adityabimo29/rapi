<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

use App\Models\MonsterSizesModel;

class ApiController extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        //
    }

    public function create()
    {
        $model = new MonsterSizesModel();

        // $model->save([
        //     'id'            => $this->request->getPost('id'),
        //     'nm_product'    => url_title($this->request->getPost('nm_product'), '-', true),
        //     'price'         => $this->request->getPost('price'),
        //     'stock'         => $this->request->getPost('stock'),
        // ]);

        $model->insert([
            'id_product'    => $this->request->getPost('id_product'),
            'nm_product'    => $this->request->getPost('nm_product'),
            'price'         => $this->request->getPost('price'),
            'stock'         => $this->request->getPost('stock'),
        ]);

        $response = [
            'status'   => 201,
            'error'    => "Data can't be inserted",
            'messages' => [
                'success' => 'Data produk berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);

        
    }

    public function monsterSize()
    {
        $model = new MonsterSizesModel();
        $data['sizes'] = $model->findAll();
        return $this->respond($data);
    }

    // single user
    public function show($id = null)
    {
        $model = new MonsterSizesModel();
        $data = $model->where('id_product', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // update
    public function update($id = null)
    {
        $model = new MonsterSizesModel();
        $input = $this->request->getRawInput();
        $data = [
            'nm_product'    => $input['nm_product'],
            'price'         => $input['price'],
            'stock'         => $input['stock'],
        ];

        $model->update($id,$data);

        $response = [
            'status'   => 200,
            'error'    => $input['nm_product'],
            'messages' => [
                'success' => 'Data produk berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }

    // delete
    public function delete($id = null)
    {
        $model = new MonsterSizesModel();
        $data = $model->where('id_product', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data produk berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
