<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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

        $kontak = Contact::create([
            'nama' => $request->name,
            'email' => $request->email,
            'telpon' => $request->telpon,
            'judul' => $request->judul,
            'pesan' => $request->pesan,
        ]);

        return redirect(route('home'));
    }
}
