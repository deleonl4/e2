<?php

namespace App\Commands;

class AppCommand extends Command
{

// $ php console App fresh - run our migrations and seeds, giving our database a "fresh slate"
    public function fresh() 
    {
        $this->migrate();
        $this->seed();
    }

    public function migrate() 
    {
        $this->app->db()->createTable('rounds', [
            'move' => 'varchar(8)',
            'win' => 'tinyint(1)', #1,0
            'time' => 'timestamp'
        ]);
    }

    public function seed() 
    {
        // Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();
            
        // Use a loop to create 10 past rounds
        for ($i = 0; $i < 10; $i++) {
            
             // Set up moves
            $moves = ['Rock','Paper','Scissors'];
            $comp = array_rand($moves);

            // Set up a round
            $round = [
                'move' => $moves[$comp],
                'win' => rand(0,2),
                'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ];
            
            // Insert the round
            $this->app->db()->insert('rounds', $round);
        }
    }    
}