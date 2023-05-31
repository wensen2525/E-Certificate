<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public Participant $participant;
    
    /**
     * Create a new message instance.
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    public function build()
    {   
        $participant = $this->participant;

        if($participant->position === 'Liaison Officer'){
            return $this->markdown('emails.certificate_neo.mail')
                    ->subject('NEO 2022 - Liaison Officer Certificate')
                    ->attach(storage_path().'/app/public/LO/'.$participant->competition.'/'. $participant->name . '.pdf');
        }else{
            return $this->markdown('emails.certificate_neo.mail')
                    ->subject('NEO 2022 - Participant Certificate')
                    ->attach(storage_path().'/app/public/custom/'.$participant->competition.'/'. $participant->name . '.pdf');
        }
        
    }
}
