<?php
namespace App\Controllers;
use App\Models\ProdukModel;
use CodeIgniter\Controller;
 
class Produk extends Controller{

    //menampilkan produk
    public function index(){
        $produkModel =new ProdukModel();
        $data['produk'] = $produkModel->orderBy('id','Desc')->findAll();

        echo view('template/header', $data);
        echo view('produk/list_view', $data);
        echo view('template/footer', $data);

    }

    //form menambah product
    public function addform(){
        echo view('template/header');
        echo view('produk/add_produk');
        echo view('template/footer');
    }
    
    //insert data pada form
    public function store(){
        $produkModel= new ProdukModel();
        $created_at = date('d-m-Y');
        $data=[
            'name'=>$this->request->getVar('name'),
            'sell'=>$this->request->getVar('sell'),
            'created_at'=>$created_at    
        ];
        $produkModel->insert($data);
        return $this->response->redirect(site_url('/produk-list'));

    }

    //menampilkan data ke edit product
    public function singgleProduk($id=null){
        $produkModel = new ProdukModel();
        $data['produk_obj'] = $produkModel->where('id', $id)->first();
        
        echo view('template/header', $data);
        echo view('produk/edit_produk', $data);
        echo view('template/footer', $data);
    }

    //membuat aksi update dari tombol save edit
    public function update(){
        $produkModel =new ProdukModel();
        $id= $this->request->getVar('id');
        $created_at = date('d-m-Y');
        $data=[
            'name'=>$this->request->getVar('name'),
            'sell'=>$this->request->getVar('sell'),
            'created_at'=> $created_at    
        ];
        $produkModel->update($id, $data);
        return $this->response->redirect(site_url('/produk-list'));
    }

    //membuat aksi delete datad
    public function delete($id=null){
        $produkModel=new ProdukModel();
        $data['produk'] = $produkModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/produk-list'));
    }

    public function grafikmorris(){
        $db = \Config\Database::connect();
        $builder = $db->table('product');

        $query = $builder->select("COUNT(id) as count, sell as s, DAYNAME(created_at) as day");
        $query = $builder->where("DAY(created_at) GROUP BY DAYNAME(created_at), s");
        $query = $builder->orderBy("s ASC, day ASC")->get();
        $data['products'] = $query->getResult();

        echo view('template/header', $data);
        echo view('produk/grafik', $data);
        echo view('template/footer', $data);
    }
}
?>