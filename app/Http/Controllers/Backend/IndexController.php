<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/25
 * Time: 10:54 PM
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('backend.index');
    }

}
