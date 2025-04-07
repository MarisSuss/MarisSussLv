<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title_en' => 'Your Crypto Bro',
            'description_en' => 'A cryptocurrency trading website with portfolio management and transaction history.',
            'content_en' => '
<div class="mx-auto">
    <!-- General Info and Technologies -->
    <div class="grid grid-cols-1 lg:grid-cols-4">
        <!-- General Info -->
        <div class="lg:col-span-3 p-4">
            <h2 class="text-2xl font-bold mb-4">General Info</h2>
            <p class="mb-4">This project is a cryptocurrency trading website for:</p>
            <ul class="list-disc list-inside">
                <li>Checking the current price of cryptocurrencies.</li>
                <li>Buying, selling, and shorting cryptocurrencies.</li>
                <li>Building your own portfolio.</li>
                <li>Viewing your transaction history for specific cryptocurrencies.</li>
                <li>Sending and receiving cryptocurrencies to/from other users.</li>
                <li>Everything mentioned is validated.</li>
            </ul>
        </div>

        <!-- Technologies -->
        <div class="lg:col-span-1 p-4 text-right">
            <h2 class="text-2xl font-bold mb-4">Technologies</h2>
            <ul class="list-disc list-inside">
                <strong>PHP 7.4</strong> <br>
                <strong>MySQL 8.0</strong> <br>
                <strong>Composer 2.4</strong>
            </ul>
        </div>
    </div>

    <!-- Setup -->
    <div class="p-4">
        <h2 class="text-2xl font-bold mb-4">Setup</h2>
        <ol class="list-decimal list-inside">
            <li class="mb-4">Clone this repository using the following command:
                <div class="bg-gray-100 p-2 rounded mt-2"><code>git clone https://github.com/MarisSuss/your-crypto-bro</code></div>
            </li>
            <li class="mb-4">Install all the dependencies using the following command:
                <div class="bg-gray-100 p-2 rounded mt-2"><code>composer install</code></div>
            </li>
            <li class="mb-4">Create a database and import the <code>your-crypto-bro.sql</code> file.</li>
            <li class="mb-4">Rename the <code>.env.example</code> file to <code>.env</code> and fill in the required fields.</li>
            <li class="mb-4">Run the following command:
                <div class="bg-gray-100 p-2 rounded mt-2"><code>php -S localhost:8000 -t public</code></div>
            </li>
        </ol>
    </div>
</div>
            ',
            'showcase_en' => '
<div class="p-4">
    <h2 class="text-2xl font-bold mb-4">Showcase</h2>
        <div class="flex flex-col gap-4">
        <div>
            <h4 class="font-semibold mb-2">Failed Login then Register and Login with the new user</h4>
            <img src="https://res.cloudinary.com/de7wfzvii/image/upload/v1743769635/crypto_01_fxlncl.gif" 
                 alt="Register and Login" 
                 class="rounded-lg shadow-md mx-auto w-full h-auto">
        </div>
        <div>
            <h4 class="font-semibold mb-2">Pick a coin from featured or find the one you want</h4>
            <img src="https://res.cloudinary.com/de7wfzvii/image/upload/v1743769634/crypto_02_jo6tfw.gif" 
                 alt="Find crypto" 
                 class="rounded-lg shadow-md mx-auto w-full h-auto">
        </div>
        <div>
            <h4 class="font-semibold mb-2">Buy a coin</h4>
            <img src="https://res.cloudinary.com/de7wfzvii/image/upload/v1743769634/crypto_03_aytmw7.gif" 
                 alt="Trade" 
                 class="rounded-lg shadow-md mx-auto w-full h-auto">
        </div>
        <div>
            <h4 class="font-semibold mb-2">Transfer crypto coins to other users</h4>
            <img src="https://res.cloudinary.com/de7wfzvii/image/upload/v1743769633/crypto_04_cnba7f.gif" 
                 alt="Transfer" 
                 class="rounded-lg shadow-md mx-auto w-full h-auto">
        </div>
        <div>
            <h4 class="font-semibold mb-2">Elon Poor</h4>
            <img src="https://res.cloudinary.com/de7wfzvii/image/upload/v1743769633/crypto__before_o0vvsr.png" 
                 alt="No Money" 
                 class="rounded-lg shadow-md mx-auto w-full h-auto">
        </div>
        <div>
            <h4 class="font-semibold mb-2">Elon Rich</h4>
            <img src="https://res.cloudinary.com/de7wfzvii/image/upload/v1743769634/crypto_after_i0c7nr.png" 
                 alt="Much Money" 
                 class="rounded-lg shadow-md mx-auto w-full h-auto">
        </div>
    </div>
</div>
            ',
            'title_lv' => 'Tavs Kripto Draugs',
            'description_lv' => 'Kriptovalūtu tirdzniecības vietne ar portfeļa pārvaldību un darījumu vēsturi.',
            'content_lv' => 'In Progress',
            'showcase_lv' => 'In Progress',
            'image_path' => 'https://res.cloudinary.com/de7wfzvii/image/upload/v1743769634/crypto_after_i0c7nr.png',
        ]);
    }
}