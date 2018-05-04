<?php

use App\Student;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Output\ConsoleOutput as Output;

class StudentSeeder extends Seeder
{
    /**
     * @var Output
     */
    private $output;

    public function __construct(Output $output)
    {
        $this->output = $output;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->output->writeln('<info>--- Student seeder started ---</info>');
        $students = array(
            0 => ['name' => 'Andi Suryandika', 'address' => 'Jl. Politeknik ITS Sukolilo', 'phone' => '085736676648', 'gender' => 1, 'program_study_id' => 1],
            1 => ['name' => 'Joshua Milea', 'address' => 'Jl. Surabaya Timur', 'phone' => '0248613595', 'gender' => 1, 'program_study_id' => 1],
            2 => ['name' => 'Dewi Kunti', 'address' => 'Jl. Diponegoro', 'phone' => '08578614382', 'gender' => 0, 'program_study_id' => 2],
        );

        for($i=0; $i < count($students); $i++) {
            $student = Student::insert($students[$i]);
        }
        $this->output->writeln('<info>--- Student seeder finished ---</info>');

    }
}
