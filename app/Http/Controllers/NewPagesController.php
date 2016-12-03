<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewPagesController extends Controller
{
  
  /**
   * Main page
   * @return void
   */
  public function index()
  {
    return view('index',
    [
      'active_page' => 'home'
    ]);
  }
  
  /**
   * Resume page
   * @return void
   */
  public function resume()
  {
    return view('resume',
    [
      'active_page' => 'resume'
    ]);
  }
  
  /**
   * Projects page
   * @return void
   */
  public function projects()
  {
    return view('projects',
    [
      'active_page' => 'projects',
      'extscripts' => ['js/projects.js']
    ]);
  }
  
  /**
   * Contact page
   * @return void
   */
  public function contact()
  {
    return view('contact',
    [
      'active_page' => 'contact'
    ]);
  }
  
  /**
   * Send email from contact page with post method.
   * @param request
   * @return void
   */
  public function sendEmail(Request $request)
  {
    if ($request->isMethod('post'))
    {
      $emailContent = new \stdClass();
      $emailContent->name = $request->name;
      $emailContent->emailAddress = $request->emailAddress;
      $emailContent->subject = $request->subject;
      $emailContent->files = $request->files;
      $emailContent->message = $request->message;
      
      if ($request->emailAddress && $request->name)
      {
        Mail::to('Stvnliao@yahoo.com')
            ->send(new Email($emailContent));
      }
      return view('email_sent',
      [
        'active_page' => 'email_sent',
        'emailContent' => $emailContent
      ]);
    }
  }
}
