<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Laporan');
        return view('laporan.index', $data);
    }
    public function create()
    {
        $data = array('title' => 'Laporan');
        return view('laporan.create', $data);
    }
}
