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
   * Projects page
   * @return void
   */
  public function projects()
  {
    return view('projects',
    [
      'active_page' => 'projects'
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
      $emailContent = new stdClass();
      $emailContent->name = $request->name;
      $emailContent->subject = $request->subject;
      $emailContent->emailAddress = $request->emailAddress;
      $emailContent->message = $request->message;
//       $emailContent->attachments = $request->attachments;
      
      Mail::to('Stvnliao@yahoo.com')
          ->queue(new Email($emailContent));
    }
  }
}
