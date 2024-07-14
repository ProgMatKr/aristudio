<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageModel;

class MessageController extends Controller
{
    public function submitContactForm(Request $request)
    {
        // Walidacja danych wejściowych
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Zapisanie danych do bazy
        $message = MessageModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Debugowanie

        // Opcjonalnie: przekierowanie lub wyświetlenie komunikatu
        return redirect()->back()->with('success', 'Wiadomość została wysłana pomyślnie!');
    }
}
