<?php

namespace App\Http\Controllers;

use App\Models\DaftarPeserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DaftarPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftars = DaftarPeserta::latest()->paginate(5);

        return view('daftar', compact('daftars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function pdfLihat()
    {

        return view('admins.print');
    }

    public function list_daftar()
    {
        $list_daftars = DaftarPeserta::latest()->paginate();

        return view('admins.list-daftar', compact('list_daftars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        DaftarPeserta::create($request->all());

        return redirect()->route('landingPage')
            ->with('success', 'Data Berhasil Di Buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function daftar_edit($id)
    {
        $siswa = DaftarPeserta::findOrFail($id);
        return view('daftar-edit', compact('siswa'));
    }

    public function daftar_hasil($id)
    {
        $siswa = DaftarPeserta::findOrFail($id);
        return view('daftar-hasil', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
        $siswa = DaftarPeserta::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('listDaftar')
            ->with('success', 'Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list_daftars = DaftarPeserta::findOrFail($id);
        $list_daftars->delete();

        return redirect()->route('listDaftar')
            ->with('success', 'Berhasil hapus data :)');
    }

    public function generatePDF(Request $request)
    {
        $data_peserta = DB::table('daftar_pesertas')
            ->where('id', $request->id)
            ->get();
        $nama = $data_peserta[0]->nama;
        $pdf = PDF::loadView('admins.print', [
            'data_peserta' => $data_peserta
        ])
            ->setPaper('a4', 'potrait');

        return $pdf->stream($nama . '.pdf');
    }
}
