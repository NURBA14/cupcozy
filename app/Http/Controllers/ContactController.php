<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact");
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "phone" => "required|string|max:20",
            "message" => "required|string|max:1000",
        ]);
        Contact::create([
            "name" => $validated["name"],
            "phone" => $validated["phone"],
            "message" => $validated["message"],
        ]);
        return redirect()->back()->with("success", "Сообщение успешно отправлено");
    }
}
