<?php namespace App\Controllers;
use App\Models\ResepModel;
use App\Models\KomentarModel;
use App\Models\ArtikelModel;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Dashboard extends BaseController
{
    public function __construct()
	{
		
		$this->resepModel = new ResepModel();
        $this->komentarModel = new KomentarModel();
        $this->userModel = new UserModel();
        $this->artikelModel = new ArtikelModel();
	}
	// public function index()
	// {
    //     $title = [
	// 		'title' => 'Dashboard Admin | Panganku'
			
	// 	];
	// 	echo view('header_v',$title);
    //     echo view('/dashboard/index_v');
    //     //echo ("</div>");
	// 	echo view('footer_v');
	// }

    public function artikel()
	{
        // dd();
        $title = [
			'title' => 'Dashboard Artikel | Panganku'
			
        ];
        $data = [
            'artikel' => $this->artikelModel->getArtikelUser()
        ];
        //  dd($data);
        echo view('header_v',$title);
        echo view('sidebar_v');
        echo view('/dashboard/article_v',$data);
        // d($data);
        echo ("</div>");
		echo view('footer_v');
    }

    public function resep()
	{
        $title = [
			'title' => 'Dashboard Resep | Panganku'
			
        ];
        $data = [
            'resep' => $this->resepModel->getResep()
            
        ];
        // d($data);
        echo view('header_v',$title);
        echo view('sidebar_v');
        echo view('/dashboard/recipe_v',$data);
        // d($data);
        echo ("</div>");
		echo view('footer_v');
    }
    public function user()
	{
        $title = [
			'title' => 'Dashboard User | Panganku'
			
        ];
        $data = [
            'user' => $this->userModel->getUser()
            
        ];
        //  dd($data);
        echo view('header_v',$title);
        echo view('sidebar_v');
        echo view('/dashboard/user_v',$data);
        // d($data);
        echo ("</div>");
		echo view('footer_v');
    }

    public function komentar($id_komentar = false)
	{
        $title = [
            'title' => 'Dashboard Komentar | Panganku'
            
			
        ];
        $data = [
            'komentaruserresep' => $this->komentarModel->getKomentarUserResep($id_komentar)
        ];
        //  dd($this->komentarModel->getKomentar());
    //    dd($this->komentarModel->getKomentarUserResep());
        // dd($data);
        echo view('header_v',$title);
        echo view('sidebar_v');
        echo view('/dashboard/komentar_v',$data);
        echo ("</div>");
		echo view('footer_v');
	}

}