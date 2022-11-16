<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function pelanggan($page = "pelanggan")
    {
        if (! is_file(APPPATH .'Views/pages/' .$page .'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('template/header', $data)
                .view('pages/' .$page)
                .view('template/foooter');
    }
    public function provinsi($page = "provinsi")
    {
        if (! is_file(APPPATH .'Views/pages/' .$page .'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('template/header', $data)
                .view('pages/' .$page)
                .view('template/foooter');
    }
    public function alamatpelanggan($page = "alamatpelanggan")
    {
        if (! is_file(APPPATH .'Views/pages/' .$page .'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('template/header', $data)
                .view('pages/' .$page)
                .view('template/foooter');
    }
}
