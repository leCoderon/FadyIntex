<?php

namespace App\Console\Commands;

use App\Models\Image;
use App\Models\Option;
use App\Models\Property;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class ArchiveSoldProperty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'table:fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fills all tables';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        // $this->fillOptionsTable();
        // $properties = $this->fillPropertiesTable();
        // $this->fillImagesTable();
        $this->comment(Inspiring::quote());

       

        $this->info('All tables  have been filled');
    }

    private function fillOptionsTable()
    {
        for ($i = 0; $i < 5; $i++) {
            $option = new Option();
            $option->name = fake()->word();

            $option->save();
        }
    }


    private function fillPropertiesTable()
    {
        $properties = [];

        for ($i = 0; $i < 30; $i++) {
            $property = new Property();

            $property->title = fake()->sentence();
            $property->description = fake()->paragraphs(3, true);
            $property->surface = fake()->numberBetween(50, 300);
            $property->rooms = fake()->numberBetween(1, 10);
            $property->bedrooms = fake()->numberBetween(1, 10);
            $property->floor = fake()->numberBetween(1, 15);
            $property->price = fake()->numberBetween(100000, 1000000);
            $property->city = fake()->city();
            $property->address = fake()->address();
            $property->postal_code = fake()->postcode();
            $property->sold = false;

            $property->save();
            $properties[] = $property;
        }
        return $properties;
    }


    private function fillImagesTable()
    {
        for ($i = 0; $i < 5; $i++) {
            $image = new Image();
            $image->name = fake()->imageUrl(604, 480, 'houses', true);

            $image->save();
        }
    }
}
