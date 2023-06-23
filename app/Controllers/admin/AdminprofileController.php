<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\DatauserModel;

class AdminprofileController extends BaseController
{
    
        public function index()
    {
        $data['user'] = session()->get('admin');
        $foto = new DatauserModel();
		$data['foto'] = $foto->findAll();

        echo view('tmplt/admin/profile', $data); 
    }
    
    public function update()
    {
        $user = session()->get('admin');
    
  
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[data_user.username]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah digunakan.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'min_length' => '{field} minimal terdiri dari {param} karakter.'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ]
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        if (!$isDataValid) {
           
            session()->setFlashdata('error', $validation->getErrors());
            return redirect()->to('admin/profile');
        }
        
       
        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $alamat = $this->request->getPost('alamat');
    

        $userModel = new DatauserModel();
        $userModel->update($user['id'], [
            'nama' => $nama,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT), 
            'alamat' => $alamat
        ]);
    
       
        $user = $userModel->find($user['id']);
        session()->set('admin', $user);
    
     
        session()->setFlashdata('success', 'Profil berhasil diperbarui.');
        return redirect()->to('admin/profile');
    }

    public function upload()
    {
        $user = session()->get('admin');
        $userModel = new DatauserModel();

        $validation =  \Config\Services::validation();
        $validation->setRules([
			'foto' => [
				'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,2048]',
				'errors' => [
					
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
                ]);
         
            $isDataValid = $validation->withRequest($this->request)->run();
        
            if (!$isDataValid) {
               
                session()->setFlashdata('error', $validation->getErrors());
                return redirect()->to('admin/profile');
            }
		

		$dataBerkas = $this->request->getFile('foto');
		$fileName = $dataBerkas->getRandomName();
        $userModel->update($user['id'],[
			'foto' => $fileName,
		]);
		$dataBerkas->move('uploads/admin/', $fileName);
		session()->setFlashdata('success', ' Foto Berhasil diupload');

        $user = $userModel->find($user['id']);
        session()->set('admin', $user);
    
        
		return redirect()->to(base_url('admin/profile'));
	}


}
