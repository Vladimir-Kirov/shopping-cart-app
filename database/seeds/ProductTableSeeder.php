<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'https://images.gr-assets.com/books/1449868701l/11127.jpg',
        	'title' => 'The Chronicles of Narnia',
        	'description' => 'Journeys to the end of the world, fantastic creatures, and epic battles between good and evil—what more could any reader ask for in one book?',
        	'price' => 40,
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'http://awoiaf.westeros.org/images/2/24/AStormOfSwords.jpg',
        	'title' => 'The Eye of the World',
        	'description' => 'The Wheel of Time turns and Ages come and go, leaving memories that become legend. ',
        	'price' => 30,
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://images.gr-assets.com/books/1507307887l/7235533.jpg',
        	'title' => 'The Way of Kings',
        	'description' => 'The Knights Radiant must stand again...',
        	'price' => 20,
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'http://ecx.images-amazon.com/images/I/517gH%2BcV32L._SX292_BO1,204,203,200_.jpg',
        	'title' => 'A Song of Ice and Fire - Game Of Thrones',
        	'description' => 'Where the Dog Star Rages',
        	'price' => 30,
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71nJQs9rawL.jpg',
            'title' => 'A Song of Ice and Fire - A Feast for Crows',
        	'description' => 'No one going to survive!',
        	'price' => 20,
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51oe-hbvKTL._SX301_BO1,204,203,200_.jpg',
        	'title' => 'A Song of Ice and Fire - A Dance with Dragons',
        	'description' => 'Still ... No one going to survive!',
        	'price' => 40,
        ]);
        $product->save();
    }
}
