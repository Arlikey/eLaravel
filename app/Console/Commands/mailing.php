<?php

namespace App\Console\Commands;

use App\Mail\SendMail;
use App\Mail\SendMovies;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Console\Command;
use Log;
use Mail;

class mailing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mailing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('Emails sent');
        $users = User::all();
        $movies = Movie::orderBy('created_at', 'desc')->take(5)->get();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new SendMovies($movies));
        }
    }
}
