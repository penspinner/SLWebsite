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
//     if ($request->isMethod('post'))
//     {
//       $emailContent = new stdClass();
//       $emailContent->name = $request->name;
//       $emailContent->emailAddress = $request->emailAddress;
//       $emailContent->subject = $request->subject;
//       $emailContent->files = $request->files;
//       $emailContent->message = $request->message;
      
//       Mail::to('Stvnliao@yahoo.com')
//           ->send(new Email($emailContent));
//     }
//     return $request->all();
    $field_name = $_POST['name'];
    $field_email = $_POST['email'];
    $field_subject = $_POST['subject'];
    $field_message = $_POST['message'];

    $mail_to = 'Stvnliao@yahoo.com';
    if (!$field_subject)
      $field_subject = 'Message from a site visitor '.$field_name;
    
    $body_message = 'From: '.$field_name."\n";
    $body_message .= 'Email: '.$field_email."\n";
    $body_message .= 'Subject: '.$field_subject."\n";
    $body_message .= 'Message: '.$field_message;

    $headers = 'From: '.$field_email."\r\n";
    $headers .= 'Reply-To: '.$field_email."\r\n";

    $mail_status = mail($mail_to, $field_subject, $body_message, $headers);
    
    if ($mail_status)
    {
      return redirect('/');
    }
  }
}
