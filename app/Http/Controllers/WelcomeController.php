<?php

namespace App\Http\Controllers;

use Google\Cloud\Logging\LoggingClient;
use Illuminate\Http\Request;
use Monolog\Logger;

class WelcomeController extends Controller
{
    public function index()
    {
        try {
            $logging = new LoggingClient([
                'projectId' => 'log-octane-swoole',
                'keyFile' => json_decode(file_get_contents(base_path('google/log-octane-swoole.json')), true)
            ]);


            // Get a logger instance.
            $logger = $logging->logger('app');

            $logger->write('first logger');

            // Write a log entry.
//            $entry = $logger->entry('first logging');

//            $logger;

            // List log entries from a specific log.
//        $entries = $logging->entries([
//            'filter' => 'logName = projects/my_project/logs/my_log'
//        ]);
//
//        foreach ($entries as $entry) {
//            echo $entry->info()['textPayload'] . "\n";
//        }
        } catch (\Exception $e) {
           dd($e);
        }



        return view('welcome');
    }
}
