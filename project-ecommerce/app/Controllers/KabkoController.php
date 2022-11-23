<?php

namespace App\Controllers;

namespace App\Controllers;
use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;
use App\Models\KabkoModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class KabkoController extends BaseController
{
    public function view($page = "kabko")
    {
        if (! is_file(APPPATH .'Views/pages/' .$page .'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('template/header', $data)
                .view('pages/'.$page)
                .view('template/foooter');
    }
    // public function tables(){
    //     return view('pelanggan/table');
    // }
    public function all()
    {
        $pm = new KabkoModel();
        $pm->select('id ,kode,nama');
        return(new Datatable($pm))
            ->setFieldFilter(['kode','nama_belakang','email','gender'])
            ->draw();
    }

    public function show($id){
        $r= (new KabkoModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new KabkoModel();
        $sandi = $this->request->getvar('sandi');

        $id = $pm-> insert([
            'nama_depan' => $this->request->getVar('nama_depan'),
            'nama_belakang' => $this->request->getVar('nama_belakang'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
            'sandi'=>password_hash($sandi, PASSWORD_BCRYPT),
        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new KabkoModel();
        $id = (int)$this->request->getvar('id');

        if($pm->find($id) == null)
            throw PageNotFoundException::forPageNotFound();

        $hasil = $pm-> update($id,[
            'nama_depan' => $this->request->getVar('nama_depan'),
            'nama_belakang' => $this->request->getVar('nama_belakang'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
        ]);
            return $this->response->setJSON(['result'=>$hasil]);
    }

    public function delete(){
        $pm = new KabkoModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
