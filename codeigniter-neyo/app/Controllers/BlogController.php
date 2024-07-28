<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BlogController extends BaseController
{
    public function index()
    {
        $data['title'] = "Blogs";
        return view('Blog',$data);
    }
}
