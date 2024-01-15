<?php

namespace App\Http\Controllers;

use App\Models\KomisiTertransfer;
use Illuminate\Http\Request;

class KomisiTertransferController extends Controller
{
    public function show()
    {
        return view('pages.komisiTertransfer');
    }

    public function store()
    {
    $attributes = request()->validate([
        'nama_affiliate' => 'required',
        'tanggal_transfer' => 'required',
        'no_rekening' => 'required',
        'jumlah_komisi_tertransfer' => 'required|numeric|min:0', // Assuming this field should be a numeric value greater than or equal to 0
        'status' => 'required'
    ]);

    try {
        $result = KomisiTertransfer::create($attributes);

        if ($result) {
            return redirect()->route('komisi')->with('success', 'File Komisi berhasil diunggah.');
        } else {
            return redirect()->route('komisi')->with('error', 'Gagal menyimpan data Komisi.');
        }
    } catch (\Exception $e) {
        // Log the error or handle it as needed
        return redirect()->route('komisi')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
    }
}