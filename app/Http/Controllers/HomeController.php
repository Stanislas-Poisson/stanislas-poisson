<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Validator;

class HomeController extends Controller
{
    /**
     * Show the home static page.
     * If user has no type redirect to a specific page.
     * If user is typped redirect to a specific page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Handle the form and send email.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Mail\Mailer  $mailer
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mailer $mailer)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string',
            'email' => 'required|email',
            'msg'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('home.index', ['#contact']))
                ->withErrors($validator)
                ->withInput()
                ->with('flashError', 'Le formulaire contient des erreurs.');
        }

        $data = $request->all();
        $data['dateTime'] = Carbon::now()->toDateTimeString();
        $data['ip'] = $request->ip();

        $mailer->send(
            'mails.contact',
            $data,
            function ($message) {
                $message->to('contact@stanislas-poisson.fr')
                    ->subject('Contact - stanislas-poisson.fr')
                ;
            }
        );

        return redirect(route('home.index'))
            ->with('flashSuccess', 'Votre demande de contact à été envoyer.');
    }
}
