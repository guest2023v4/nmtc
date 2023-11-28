<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\rooms;
use App\Models\reservation;
use App\Models\User;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Support\Facades\DB;


class clearRooms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clearRooms:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    // public function handle()
    // {
    //     $output = new ConsoleOutput();
    //     $rooms = rooms::all();
    //     $sum = 0;
    //     $output->writeln('<fg=white>----------------------------------------');
    //     foreach ($rooms as $room) {
    //         $output->writeln('<fg=white>----------');
    //         $output->writeln('Room <fg=green;options=bold>'.$room->id.'<fg=white> |');
    //         $output->writeln('<fg=white>----------');
    //         if ($room->type != 'random'){
    //             $reservations = reservation::where('roomID', $room->id)->get();
    //             $output->writeln('<fg=white>'.count($reservations).' reservations for room '.$room->id);
    //         if (count($reservations) == 0) {
    //             $query = DB::table('rooms')->where('id', $room->id)->update(['roomStatus' => 'empty','gender' => '-','RoomCaptain' => '']);
    //             if ($query){
    //                 $output->writeln('<fg=red>Room '.$room->id.' is emptied');
    //             }else{
    //                 $output->writeln('<fg=yellow>Room '.$room->id.' is already empty');
    //             }
    //         }
    //         else {
    //             foreach ($reservations as $reservation){
    //                 $user = User::where('id', $reservation->userID)->first();
    //                 $sum = $sum + intval($user->payment);
    //             }
    //             if ($sum == 0){
    //                 $resCount = reservation::where('roomID', $room->id)->count();
    //                 $delQuer= DB::table('reservations')->where('roomID', $room->id)->delete();
    //                 if ($delQuer){
    //                     $output->writeln('<fg=white>Deleted all reservations for room '.$room->id.' ('.$resCount.' reservations)');
    //                 }else{
    //                     $output->writeln('<fg=red>Failed to delete all reservations for room '.$room->id);
    //                 }
    //                 $query = DB::table('rooms')->where('id', $room->id)->update(['roomStatus' => 'empty','gender' => '-','RoomCaptain' => '']);
    //                 if ($query){
    //                     $output->writeln('<fg=white>Room '.$room->id.' is updated');
    //                 }else{
    //                     $output->writeln('<fg=red>Failed to update room '.$room->id.' to empty');
    //                 }
    //             }
    //             $sum = 0;
    //         }
    //         }
    //         $output->writeln('<fg=white>----------------------------------------');
    //     }
    // }

    public function handle()
    {
        $output = new ConsoleOutput();
        $rooms = rooms::all();
        $sum = 0;
        $stat = false;
        foreach ($rooms as $room) {
            // room that

            // yesterday date format
           

            if ($room->type != 'random'  && $room->updated_at->format('Y-m-d') < date('Y-m-d', strtotime('-1 days'))){
                $reservations = reservation::where('roomID', $room->id)->get();
              
            if (count($reservations) > 0) {
                foreach ($reservations as $reservation){
                    $user = User::where('id', $reservation->userID)->first();
                   
                        if($user->payment == '1'){
                            $stat = true;
                            break;
                        }
                        
                    }
                    if ($stat == false){
                        $sum = $sum + count($reservations);
                        $delQuer= DB::table('reservations')->where('roomID', $room->id)->delete();
                        $query = DB::table('rooms')->where('id', $room->id)->update(['roomStatus' => 'empty','gender' => '-','RoomCaptain' => '']);
                    }else{
                        $stat = false;
                    }
                   
                }
               
            }
           
            }
            $output->writeln($sum.' is the sum');
        }
      
    

}
