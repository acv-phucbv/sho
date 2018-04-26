<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as AppController;

class Controller extends AppController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('admin');
    }
}
