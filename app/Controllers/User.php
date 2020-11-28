<?php namespace App\Controllers;

class User extends BaseController
{
	public function login()
	{
		$title = [
			'title' => 'Login | Panganku'
		];
		echo view('header_v',$title);
		echo view('user/login_v');
		echo view('footer_v');
	}
	public function auth(){

	}
	public function register()
	{
		$title = [
			'title' => 'Register | Panganku'
		];
		$data = [
			'validation' =>  \Config\Services::validation()
		];
		echo view('header_v',$title);
		echo view('user/register_v',$data);
		echo view('footer_v');
	}
	public function addUser()
	{
		if(!$this->validate([
			//'username','nama_lengkap','email','password','jenis_kelamin','alamat','gambar_profile','bio','is_admin'
			'username' => ['rules'=>'required|is_unique[username]',
						'errors'=>[ 'required'=>  'Harus diisi',
									'is_unique'=> 'username telah digunakan']
					   ],
			'email' => ['rules'=>'required|is_unique[username]',
						'errors'=>[ 'required'=> 'Porsi Harus diisi',
									'is_unique'=>'Email Pernah digunakan']
						   ],
			'jenis_kelamin' => ['rules'=> 'required|in_list[L,P]'],
			'gambar_profile' =>['rules'=>'uploaded[gambar_profile]|is_image[gambar_profile]|mime_in[gambar_profile,image/jpg,image/jpeg,image/png]',
							   'errors'=>[ 'uploaded'	=> 'Gambar Profile harus diisi',
											'is_image'	=> 'File harus berupa gambar',
											'mime_in'	=> 'File berformat jpg/jpeg/png']
							 ],


		])) {
			// $validation = \Config\Services::validation();
			// return redirect()->to(base_url('/recipe/create'))->withInput()->with('validation',$validation);
			return redirect()->to(base_url('/register/'))->withInput();
		}
	}


	//--------------------------------------------------------------------

}