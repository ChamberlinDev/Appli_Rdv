<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use SerializesModels;

    // Propriétés pour recevoir les données du rendez-vous
    public $rdv;

    /**
     * Create a new message instance.
     *
     * @param  array  $rdv
     * @return void
     */
    public function __construct($rdv)
    {
        $this->rdv = $rdv;  // Stocke les informations du rendez-vous
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nouvelle demande de Rendez-vous')
                    ->view('emails.rdv')  // Vue d'email pour afficher les informations
                    ->with([
                        'nom_patient' => $this->rdv['nom_patient'],
                        'telephone' => $this->rdv['telephone'],
                        'date' => $this->rdv['date'],
                        'heure' => $this->rdv['heure'],
                        'nom_medecin' => $this->rdv['nom_medecin'],
                        'specialite' => $this->rdv['specialite'],
                    ]);
    }
}
