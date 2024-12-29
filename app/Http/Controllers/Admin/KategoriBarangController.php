<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $kategoriBarangs = KategoriBarang::paginate(10); // Paginasi 10 data per halaman
        return view('admin.kategori_barang.index', compact('kategoriBarangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategori_barang,nama',
        ]);

        KategoriBarang::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori-barang.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $kategoriBarang = KategoriBarang::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255|unique:kategori_barang,nama,' . $kategoriBarang->id,
        ]);

        $kategoriBarang->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori-barang.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kategoriBarang = KategoriBarang::findOrFail($id);
        $kategoriBarang->delete();

        return redirect()->route('kategori-barang.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
