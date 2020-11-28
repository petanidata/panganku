<?php namespace App\Controllers;
use App\Models\ResepModel;
use App\Models\KomentarModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Recipe extends BaseController
{
	protected $artikelModel;
	public function __construct()
	{
		$this->resepModel = new ResepModel();
		$this->komentarModel = new KomentarModel();
	}
	public function index()
	{
		$title = [
			'title' => 'Resep | Panganku'
		];
		//$resep = $this->resepModel->findAll();
		$data = [
			'resep' => $this->resepModel->getResep()
		];
		//dd($data);
		echo view('header_v',$title);
		echo view('recipe/recipe_v',$data);
		echo view('footer_v');
	}
	public function detail($id_resep)
	{
		$title =  ['title' => 'Detail Resep | Panganku'];
		$data = [
			'resep' => $this->resepModel->getResep($id_resep)
		];
		$komentar = [
			'komentar' => $this->komentarModel->getKomentar($id_resep)
		];
		//dd($data);
		//dd($komentar);
		if (empty($data['resep'])){
			throw new PageNotFoundException('Resep tidak ditemukan');
		}
		echo view('header_v',$title);
		echo view('recipe/detail_v',$data);
		echo view('recipe/komentar_v',$komentar);
		echo view('footer_v');
	}
	public function create()
	{
		
		$title =  ['title' => 'Buat Resep | Panganku'];
		$data = [
			'validation' =>  \Config\Services::validation()
		];
		
		echo view('header_v',$title);
		echo view('recipe/create_v', $data);
		echo view('footer_v');
	}
	public function save()
	{
		//dd($this->request->getVar());
		if(!$this->validate([
			'judul' => ['rules'=>'required',
						'errors'=>[ 'required'=> ' Harus diisi']
					   ],
			'porsi' => ['rules'=>'required',
						'errors'=>[ 'required'=> 'Porsi Harus diisi']
		   				],
			'lama_memasak' => ['rules'=>'required|integer',
							   'errors'=>[ 'required'=> 'Lama Memasak Harus diisi',
										   'integer'=> 'Lama Memasak dalam bilangan angka dalam satuan menit'
					  					 ]
			   				  ],
			'bahan' => ['rules'=>'required',
						'errors'=>[ 'required'=> 'Bahan Harus diisi']
			   			],
			'tutorial' => ['rules'=>'required',
							'errors'=>[ 'required'=> 'Cara Memasak Harus diisi']
			   			  ],
			'gambar_banner' => ['rules'=>'required',
								'errors'=>[ 'required'=> 'Gambar Banner Harus diisi']
								],
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to(base_url('/recipe/create'))->withInput()->
			with('validation',$validation);
		}


		$this->resepModel->save([
			'id_user' => $this->request->getVar('id_user'),
			'judul' => $this->request->getVar('judul'),
			'porsi' => $this->request->getVar('porsi'),
			'lama_memasak' => $this->request->getVar('lama_memasak'),
			'bahan' => $this->request->getVar('bahan'),
			'tutorial' => $this->request->getVar('tutorial'),
			'gambar_banner' => $this->request->getVar('gambar_banner'),
			'gambar_tutorial' => $this->request->getVar('gambar_tutorial')
		]);
		session()->setFlashdata('pesan', 'Resep Berhasil Disimpan.');
		return redirect()->to(base_url('/recipe'));
	}
	public function delete($id_resep)
	{
		$this->resepModel->delete($id_resep);
		session()->setFlashdata('pesan', 'Resep Berhasil Dihapus.');
		return redirect()->to(base_url('/recipe'));
	}
	public function edit($id_resep)
	{
				
		$title =  ['title' => 'Buat Resep | Panganku'];
		$data = [
			'validation' =>  \Config\Services::validation(),
			'resep' => $this->resepModel->getResep($id_resep),
		];
		
		echo view('header_v',$title);
		echo view('recipe/edit_v', $data);
		echo view('footer_v');
	}

	//--------------------------------------------------------------------

}
