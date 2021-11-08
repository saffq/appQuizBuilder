<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function contactPost(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
        Contact::create($request->all());

        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'bodyMessage' => $request->get('message')
            ), function($message)
            {
                $message->from('test@test.com');
                $message->to('test@test.com', 'test')->subject('test');
            });
        return back()->with('success', 'Thank you for contacting us!');
    }
}
