<?php

namespace App\Mail;

use App\Models\Rendez_vous;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReportRdvMail extends Mailable
{
    use Queueable, SerializesModels;

    public $rdv;

    public function __construct( Rendez_vous $rdv)
    {
        $this->rdv = $rdv;
    }

    public function build()
    {
        return $this->from('rdvmedicalapp@gmail.com', 'Rencard_Med')  
                 ->view('emails.report')
                    ->subject('Rendez-vous reporté')
                    ->with([
                        'date'=>$this->rdv->date,
                        'nom_medecin'=>$this->rdv->nom_medecin,
                        'nom_patient' => $this->rdv->nom_patient,
                        'date_report' => $this->rdv->date_report,
                        'heure_report' => $this->rdv->heure_report,
                ]);
    }
}
