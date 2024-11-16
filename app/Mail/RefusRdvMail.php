<?php

namespace App\Mail;

use App\Models\Rendez_vous;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RefusRdvMail extends Mailable
{
    use Queueable, SerializesModels;

    public $rdv;

    public function __construct(Rendez_vous $rdv)
    {
        $this->rdv = $rdv;
    }

    public function build()
    {
        return $this->from('rdvmedicalapp@gmail.com', 'Rencard_Med')  
        ->subject('Reponse a la demande de Rendez-vous') 
        ->view('emails.refus')
            ->with([
                'nom_patient' => $this->rdv->nom_patient,
                'nom_medecin'=>$this->rdv->nom_medecin,
                'message' => "Nous sommes désolés, mais votre rendez-vous a été refusé par le médecin.",
            ]);
    }
}
