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
            'product'=>$this->request->getVar('name_product'),
            'sell'=>$this->request->getVar('sell'),
            'creted_at'=>$this->created_at    
        ];
        $produkModel->insert($data);
        return $this->response->redirect(site_url('/product-list'));

    }

    //menampilkan data ke edit product
    public function singgleProduct($id=null){
        $produkModel = new ProdukModel();
        $data['produk_obj'] = $produkModel->where($id,'id')->first();
        echo view('template/header');
        echo view('produk/edit_produk');
        echo view('template/footer');
    }

    //membuat aksi update dari tombol save edit
    public function update(){
        $produkModel =new ProductModel();
        $id= $this->request->getVar('id');
        $created_at = date('d-m-Y');
        $data=[
            'product'=>$this->request->getVar('name_product'),
            'sell'=>$this->request->getVar('sell'),
            'creted_at'=> $created_at    
        ];
        $produkModel->update($id, $data);
        return $this->response->redirect(site_url('/product-list'));
    }

    //membuat aksi delete datad
    public function delete($id=null){
        $productModel=new ProdukModel();
        $data['produk'] = $produkModel->where('$id', $id)->delete($id);
        return $this->response->redirect(site_url('/product-list'));
    }
}
?>