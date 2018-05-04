<?php

use App\ProgramStudy;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Output\ConsoleOutput as Output;

class ProgramStudySeeder extends Seeder
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
        $this->output->writeln('<info>--- Program study seeder started ---</info>');
        $programs = array('Teknik Informatika', 'Teknologi Game', 'Elektonika Industri');
        for($i=0; $i<count($programs); $i++) {
            $program = new ProgramStudy;
            $program->name = $programs[$i];
            $program->save();
        }
        $this->output->writeln('<info>--- Program study seeder finished ---</info>');
    }
}
