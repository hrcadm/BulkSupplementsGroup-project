<?php

use App\Models\Membership\Membership;
use Illuminate\Database\Seeder;

class MembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberships = [
            ['name' => 'Personal'],
            ['name' => 'Company']
        ];

        foreach($memberships as $m){
            Membership::create($m);
        }
    }
}
