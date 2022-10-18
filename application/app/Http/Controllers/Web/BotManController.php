<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
  /**
   * Place your BotMan logic here.
   */
  public function handle()
  {


    $botman = app('botman');
    $data = array(
      "hello", "hi", "Hi", "Hello", "Xin chào"
    );
    $botman->hears('{message}', function ($botman, $message, $data) {
      if ($message == $data) {
        // $this->askName($botman);
        $botman->reply("Hi, I'm BotMan Auto! What can we help you about activities of Kola Learning?");
      } else {
        $botman->reply("write 'hi' for testing...");
      }
    });

    $botman->listen();
  }

  /**
   * Place your BotMan logic here.
   */

  public function askName($botman)
  {

    $botman->ask('Hello! What is your Name?', function (Answer $answer) {
      $name = $answer->getText();

      $this->say('Nice to meet you ' . $name);
    });
  }
}
