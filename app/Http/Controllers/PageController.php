<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['services' => config('jantechsi.services')]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services', ['services' => config('jantechsi.services')]);
    }

    public function service(string $slug)
    {
        $service = collect(config('jantechsi.services'))->firstWhere('slug', $slug);
        abort_unless($service, 404);

        return view('pages.service', ['service' => $service]);
    }

    public function contact()
    {
        return view('pages.contact', ['services' => config('jantechsi.services')]);
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'nullable|string|max:20',
            'service' => 'required|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        $body = "Name: {$data['name']}\nEmail: {$data['email']}\nPhone: {$data['phone']}\nService: {$data['service']}\n\n{$data['message']}";

        Mail::raw($body, function ($mail) use ($data) {
            $mail->to(config('jantechsi.contact.email'))
                 ->replyTo($data['email'], $data['name'])
                 ->subject('New enquiry: ' . $data['service']);
        });

        return back()->with('sent', 'Thank you! We have received your enquiry and will reply soon.');
    }
}
