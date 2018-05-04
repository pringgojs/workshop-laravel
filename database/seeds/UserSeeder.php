<?php

use App\User;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Output\ConsoleOutput as Output;

class UserSeeder extends Seeder
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
        $this->output->writeln('<info>--- User seeder started ---</info>');
        $user = new User;
        $user->name = 'administartor';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $this->output->writeln('<info>--- User seeder started ---</info>');
        
    }
}
