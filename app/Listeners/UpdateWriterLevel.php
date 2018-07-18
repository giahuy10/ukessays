<?php

namespace App\Listeners;

use App\Events\SendReview;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Review;
use App\WriterLevel;
use App\User;
class UpdateWriterLevel
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendReview  $event
     * @return void
     */
    public function handle(SendReview $event)
    {
        $writer_review = Review::where('to',$event->writer_id)->avg('rating');
        $levels = WriterLevel::all();
        $writer_level = 1;
        foreach ($levels as $level){
            if ($writer_review > $level->rated) {
                $writer_level = $level->id;
            }
        }
        $writer = User::findOrFail($event->writer_id);
        $writer->status = $writer_level;
        $writer->rating = $writer_review;
        $writer->save();

    }
}
