<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) {
        $request->validate([
            'email' => 'email'
        ]);

        $report = Report::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
            'korban' => $request->korban,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect(route('home'));
    }
    
}
