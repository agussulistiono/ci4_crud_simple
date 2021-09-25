<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller{
    //menampilkan daftar Users
    public function index(){
        $userModel =new UserModel();
        $data['users']=$userModel->orderBy('id','Desc')->findAll();
        return view('user_view', $data);
    }

    //form Menambah user
    public function create(){
        return view('add_user');
    }
    //insert user
    public function insert(){
        $userModel=new UserModel();
        $data=[
            'name'=>$this->request->getvar('name'),
            'email'=>$this->request->getvar('email')
        ];
        $userModel->insert($data);
        return $this->response(redirect(site_url('/users-list')));
    }

    //menampilkan user tunggal
    public function singgleUser($id=null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }

    //update user data
    public function update(){
        $userModel =new UserModel();
        $id= $this->request->getVar('id');
        $data=[
            'name' =>$this->request->getVar('name'),
            'email' =>$this->request->getVar('email')            
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }

    //delete user
    public function delete($id=null){
        $userModel =new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }
    
}
?>