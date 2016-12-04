<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * Stores the email address, subject, message, and attachments.
     *
     */
    public $emailContent;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailContent)
    {
        $this->emailContent = $emailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this
                  ->from($this->emailContent->emailAddress, $this->emailContent->name)
                  ->subject($this->emailContent->subject);
      
        // Attach file uploads
        if (isset($this->emailContent->files))
        {
          foreach ($this->emailContent->files as $file)
          {
//               $name = explode('.', $file->getClientOriginalName())[0];
              $name = $file->getClientOriginalName();
              $mimeType = $file->getClientMimeType();
//               $file = $file->move('./', $name);
              $filePath = $file->getPathName();
              $email->attach($filePath, 
              [
                'as' => $name,
                'mime' => $mimeType
              ]);
          }
        }
        
        // Give blade template to email
        $email->view('email.template');
        
        return $email;
    }
}
