<?php

namespace App\Http\Controllers;

use App\Models\Pertandingan;
use Illuminate\Http\Request;

class PertandinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // SOAL 3: Filter berdasarkan liga (disesuaikan dari "penulis" ke "liga")
        $selectedLiga = $request->get('liga', 'all');
        
        // SOAL 5: Pencarian tim/kode pertandingan (disesuaikan dari "judul buku" ke "tim/kode")
        $q = $request->get('q', '');
        
        // Query builder untuk filter dan pencarian
        $query = Pertandingan::query();
        
        // Filter liga (SOAL 3)
        if ($selectedLiga !== 'all') {
            $query->where('liga', $selectedLiga);
        }
        
        // Pencarian tim atau kode pertandingan (SOAL 5)
        if (!empty($q)) {
            $query->where(function($subQuery) use ($q) {
                $subQuery->where('home_team', 'LIKE', '%' . $q . '%')
                        ->orWhere('away_team', 'LIKE', '%' . $q . '%')
                        ->orWhere('kode_pertandingan', 'LIKE', '%' . $q . '%');
            });
        }
        
        // Ambil data yang sudah difilter
        $data = $query->get();
        
        // SOAL 4: Statistik pertandingan (disesuaikan dari "buku" ke "pertandingan")
        $totalPertandingan = $data->count();
        $totalHargaSemua = $data->sum('harga_tiket');
        $hargaTertinggi = $data->max('harga_tiket');
        $hargaTerendah = $data->min('harga_tiket');
        
        // Daftar liga untuk dropdown (SOAL 3)
        $daftarLiga = Pertandingan::distinct()->pluck('liga')->toArray();
        
        return view('pertandingan', compact(
            'data',
            'selectedLiga',
            'q',
            'daftarLiga',
            'totalPertandingan',
            'totalHargaSemua',
            'hargaTertinggi',
            'hargaTerendah'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
