<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('acara');
        $query   = $builder->get()->getResult();

        // cara dengan query biasa
        // $query   = $this->db->query("SELECT * FROM acara")->getResult(); 

        $data['acara'] = $query;

        return view('acara/get', $data);
    }

    public function create()
    {
        return view('acara/add');
    }

    public function store()
    {
        // jika name nya sama
        $data = $this->request->getPost();

        // jika name nya berbeda
        // $data = [
        //     'name_acara' => $this->request->getVar('name_acara'),
        //     'date_acara' => $this->request->getVar('date_acara'),
        //     'info_acara' => $this->request->getVar('info_acara')
        // ];

        $this->db->table('acara')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('acara'))->with('success', 'berhasil disimpan');
        }
    }

    public function edit ($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('acara')->getWhere(['id_acara' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['acara'] = $query->getRow();
                return view('acara/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }
        else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        // name sama
        // $data = $this->request->getPost();
        // unset($data['_method']);

        // name berbeda
        $data = [
            'name_acara' => $this->request->getVar('name_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
        ];

        $this->db->table('acara')->where(['id_acara' => $id])->update($data);
        return redirect()->to(site_url('acara'))->with('warning', 'berhasil diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('acara')->where(['id_acara' => $id])->delete();
        return redirect()->to(site_url('acara'))->with('success', 'berhasil dihapus');
    }
}
