<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AppraisalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appraisals')->insert([
            'ticket_number' => '7777',
            'status' => '新規査定依頼',
            'area' => '西春日井郡',
            'family_name' => '山田',
            'tel1' => '080',
            'tel2' => '1234',
            'tel3' => '5678',
            'memo' => 'いくらか知りたい',
            'deadline' => Carbon::today()->addDays(7)->format('Y-m-d'),
            'staff' => '---',
        ]);
    }
}
