<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
class BarangController extends Controller
{
    public function index()
    {
        return view('Admin.Barang.index');
    }

    public function create(){
        return view('Admin.Barang.create');
    }
    public function store(Request $request){

    }

    public function show(BarangModel $barangModel){

    }
    public function edit(BarangModel $barangModel){

    }

    public function update(Request $request, BarangModel $barangModel){

    }
    public function destroy(BarangModel $barangModel){

    }
    public function getBarang(request $request){

    }

}
