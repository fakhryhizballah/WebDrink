<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use App\Libraries\loginAuth;

class AdminFilter implements FilterInterface
{
    public function __construct()
    {
        $this->loginAuth = new loginAuth();
    }
    public function before(RequestInterface $request, $arguments = null)
    {
        $admin = $this->loginAuth->ceklogin();
        if ($admin == false) {
            return redirect()->to('/');
        }
        // Do something here
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
