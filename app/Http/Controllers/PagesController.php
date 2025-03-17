<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{


    public function home()
    {

        return view('index');
    }


    public function contact()
    {
        return view('layouts.Pages.contact');
    }

    public function postContact(Request $request)
    {
        // Validation des champs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ], [
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
        ]);

        try {
            // Envoi de l'email
            Mail::to('sossouespoir91@gmail.com')->send(new ContactMail(
                $request->name,
                $request->email,
                $request->subject,
                $request->message
            ));

            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['email' => 'Une erreur est survenue lors de l\'envoi du mail. Veuillez réessayer plus tard.']);
        }
    }


}
