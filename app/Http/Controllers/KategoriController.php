<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class KategoriController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Kategori Produk');
        return view('kategori.index', $data);
    }
    public function create()
    {
        $data = array('title' => 'Form Kategori');
        return view('kategori.create', $data);
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $data = array('title' => 'Form Edit Kategori');
        return view('kategori.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
