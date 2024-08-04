<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $sendmail;
    protected $details;

    /**
     * Create a new job instance.
     *
     * @param string $sendmail
     * @param array $details
     * @return void
     */
    public function __construct($sendmail, $details)
    {
        $this->sendmail = $sendmail;
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new MailNotify($this->details);
        Mail::to($this->sendmail)->send($email);
    }
}
