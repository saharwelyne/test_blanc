<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\UserSubject;

class UserSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject = Subject::create([
            'name' => 'subject1',
        ]);
        $usersubject = UserSubject::create([
                'user_id' => 2,
                'subject_id' => $subject->id,
        ]);

        $subject = Subject::create([
            'name' => 'subject2',
        ]);
        $usersubject = UserSubject::create([
                'user_id' => 2,
                'subject_id' => $subject->id
        ]);

        $subject = Subject::create([
            'name' => 'subject3',
        ]);
        $usersubject = UserSubject::create([
                'user_id' => 2,
                'subject_id' => $subject->id
        ]);

        $subject = Subject::create([
            'name' => 'subject4',
        ]);
        $usersubject = UserSubject::create([
                'user_id' => 2,
                'subject_id' => $subject->id
        ]);
    }
}
