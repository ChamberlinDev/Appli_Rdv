<?php

namespace App\Mail;

use App\Models\Rendez_vous;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AcceptRdvMail extends Mailable
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
        ->view('emails.acceptation')
                ->with([
                        'nom_patient' => $this->rdv->nom_patient,
                        'date' => $this->rdv->date,
                        'heure' => $this->rdv->heure,
                        'specialite' => $this->rdv->specialite,
                        'nom_medecin'=>$this->rdv->nom_medecin,
                        'nom_etablissement'=>$this->rdv->nom_etablissement,
            ]);
    }
}
