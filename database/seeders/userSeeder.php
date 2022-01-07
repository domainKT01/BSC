<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($data = ["", "", ""])
    {
        
        $user = new User();

        $user-> name = $data[0];

        $user-> email = $data[1];

        $user-> password = $data[2];

        $user->save();
    }
}
