<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title'=>'Lost in the Magic of Paris',
                'description'=>'As I strolled along the charming streets of Paris, the Eiffel Tower stood tall against the azure sky. The aroma of freshly baked croissants filled the air, leading me to a cozy café where I enjoyed a delightful breakfast. Exploring the Louvre Museum and wandering through the enchanting gardens of Versailles left me spellbound. Paris truly cast its magical spell on me.',
                'location'=>'Paris, France',
                'userid'=>'2',
                'image'=>'storage/images/paris.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'A Journey Through Time in Rome',
                'description'=>"Walking through the ancient ruins of the Colosseum, I couldn't help but imagine the gladiator battles that once took place there. The Vatican City left me in awe with its stunning architecture and breathtaking art. I indulged in delectable Italian cuisine, sipped on rich espresso, and embraced the eternal charm of the Eternal City.",
                'location'=>'Rome, Italy',
                'userid'=>'1',
                'image'=>'storage/images/rome.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Escaping to the Serenity of Bali',
                'description'=>'The moment I set foot on the sandy beaches of Bali, I felt a wave of tranquility wash over me. From practicing yoga amidst lush rice terraces to witnessing mesmerizing sunsets over Uluwatu Temple, Bali offered a perfect blend of relaxation and adventure. Immersing myself in the Balinese culture and enjoying traditional spa treatments rejuvenated my mind, body, and soul.',
                'location'=>'Bali, Indonesia',
                'userid'=>'3',
                'image'=>'storage/images/bali.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Chasing Waterfalls in Costa Rica',
                'description'=>"Costa Rica's lush rainforests welcomed me with open arms as I embarked on a quest to discover its hidden waterfalls. Hiking through dense foliage, I stumbled upon cascading wonders like La Fortuna and Montezuma. Swimming in their crystal-clear pools and feeling the refreshing mist on my face was a truly invigorating experience.",
                'location'=>'Costa Rica',
                'userid'=>'4',
                'image'=>'storage/images/costarica.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Safari Tales from the Maasai Mara',
                'description'=>'The Maasai Mara National Reserve in Kenya was like stepping into a wildlife documentary. From witnessing the annual wildebeest migration to encountering majestic lions and graceful giraffes, every moment felt like a once-in-a-lifetime opportunity. The evenings around the campfire, listening to the stories of the Maasai people, added an extra layer of authenticity to my unforgettable safari adventure.',
                'location'=>'Maasai Mara, Kenya',
                'userid'=>'4',
                'image'=>'storage/images/kenya.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Adventures in the Land of the Rising Sun',
                'description'=>"Tokyo's vibrant energy overwhelmed my senses as I explored its bustling neighborhoods and sampled delicious street food. The tranquility of Kyoto's temples and traditional tea ceremonies provided a beautiful contrast. From soaking in hot springs in Hakone to marveling at the iconic Mount Fuji, Japan's rich culture and natural wonders left an indelible mark on my heart.",
                'location'=>'Japan',
                'userid'=>'1',
                'image'=>'storage/images/tokyo.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Journeying to the Edge of the World',
                'description'=>"Patagonia's untamed wilderness took my breath away as I hiked through Torres del Paine National Park. The towering granite peaks, turquoise glaciers, and pristine lakes were a feast for my eyes. Waking up to the sound of howling winds in my cozy cabin was a humbling reminder of nature's raw power and beauty.",
                'location'=>'Patagonia, Chile/Argentina',
                'userid'=>'3',
                'image'=>'storage/images/patagonia.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Exploring the Ancient Temples of Angkor Wat',
                'description'=>'As the sun rose over the majestic Angkor Wat temple complex, I felt transported back in time. Exploring the intricate carvings and hidden corridors, I marveled at the architectural brilliance of the Khmer Empire. Watching the sunset from the mystical Ta Prohm temple, engulfed by giant tree roots, was a surreal and unforgettable experience.',
                'location'=>'Siem Reap, Cambodia',
                'userid'=>'2',
                'image'=>'storage/images/angkorwat.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Cruising the Norwegian Fjords',
                'description'=>"Sailing through the dramatic fjords of Norway was like being in a fairy tale. Majestic waterfalls cascaded down steep cliffs, while snow-capped peaks reflected in the crystal-clear waters below. The quiet moments spent on the deck, surrounded by nature's grandeur, made me appreciate the serenity and vastness of this Scandinavian wonderland.",
                'location'=>'Norwegian Fjords, Norway',
                'userid'=>'3',
                'image'=>'storage/images/norway.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'The Enchanting Allure of Marrakech',
                'description'=>'The bustling souks of Marrakech immersed me in a whirlwind of colors, scents, and sounds. I wandered through the maze-like streets, sipping on mint tea and haggling for unique treasures. The enchanting Jardin Majorelle and the grandeur of the Bahia Palace transported me to a world of exotic beauty, leaving me with memories that will forever remain close to my heart.',
                'location'=>'Marrakech, Morocco',
                'userid'=>'2',
                'image'=>'storage/images/morocco.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'A Journey to the Land of Fire and Ice',
                'description'=>"Driving through Iceland's otherworldly landscapes, I marveled at the sheer diversity of this Nordic gem. From witnessing the breathtaking Northern Lights dancing across the night sky to bathing in geothermal hot springs, every moment was filled with awe and wonder. Exploring glaciers, waterfalls, and black sand beaches revealed the raw power and ethereal beauty of this land of fire and ice.",
                'location'=>'Iceland',
                'userid'=>'4',
                'image'=>'storage/images/iceland.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Uncovering the Secrets of Cairo',
                'description'=>"Cairo's rich history and ancient wonders captivated me from the moment I arrived. Standing before the towering pyramids of Giza, I couldn't help but marvel at the engineering marvels created thousands of years ago. Exploring the bustling Khan El Khalili market, tasting traditional Egyptian cuisine, and sailing down the Nile River provided glimpses into the vibrant culture and traditions of this timeless city.",
                'location'=>'Cairo, Egypt',
                'userid'=>'1',
                'image'=>'storage/images/cairo.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Admiring the Majestic Canadian Rockies',
                'description'=>"As I hiked through the Canadian Rockies, I found myself surrounded by towering peaks, emerald lakes, and pristine wilderness. Banff National Park and Jasper National Park offered breathtaking vistas at every turn. Spotting wildlife in their natural habitat and breathing in the crisp mountain air left me with a deep sense of appreciation for the raw beauty of Canada's natural landscapes.",
                'location'=>'Canadian Rockies, Canada',
                'userid'=>'2',
                'image'=>'storage/images/canada.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Embracing the Spirit of Rio de Janeiro',
                'description'=>"Rio de Janeiro's vibrant atmosphere and stunning landscapes stole my heart. From the iconic Christ the Redeemer statue overlooking the city to the sun-kissed shores of Copacabana Beach, Rio exuded an infectious energy. Exploring the lively neighborhoods, dancing to the rhythm of samba, and witnessing the colorful Carnival celebrations made me fall in love with the spirit of Brazil.",
                'location'=>'Rio de Janeiro, Brazil',
                'userid'=>'1',
                'image'=>'storage/images/brazil.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Discovering the Ancient Wonders of Athens',
                'description'=>'Athens, the birthplace of democracy and Western civilization, welcomed me with open arms. Standing atop the Acropolis, I marveled at the majestic Parthenon and the sprawling cityscape below. Exploring the historical sites, indulging in delectable Greek cuisine, and strolling through charming Plaka neighborhood allowed me to immerse myself in the rich heritage and charm of this ancient city.',
                'location'=>'Athens, Greece',
                'userid'=>'3',
                'image'=>'storage/images/athens.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Savoring the Delights of Cape Town',
                'description'=>"Cape Town's beauty and diversity left me awe-struck. The panoramic views from Table Mountain were breathtaking, and the vibrant waterfront buzzed with life and culture. From sipping on world-class wines in Stellenbosch to encountering penguins at Boulders Beach, every moment in Cape Town was filled with discovery and enchantment.",
                'location'=>'Cape Town, South Africa',
                'userid'=>'4',
                'image'=>'storage/images/capetown.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Experiencing Tranquility in the Himalayan Kingdom of Bhutan',
                'description'=>"Bhutan's serene landscapes and spiritual traditions created a sense of tranquility within me. Trekking through lush valleys and meditating in ancient monasteries allowed me to connect with nature and find inner peace. The warmth and hospitality of the Bhutanese people, combined with the breathtaking views of the Himalayas, made this journey an unforgettable one.",
                'location'=>'Bhutan',
                'userid'=>'4',
                'image'=>'storage/images/bhutan.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Unveiling the Charms of Lisbon',
                'description'=>"Lisbon's narrow cobblestone streets and colorful tiled facades drew me into its enchanting embrace. Exploring the historic districts of Alfama and Belém, indulging in pastéis de nata (custard tarts), and enjoying panoramic views from São Jorge Castle were highlights of my time in this coastal city. Lisbon's old-world charm and vibrant culture made it a destination I long to return to.",
                'location'=>'Lisbon, Portugal',
                'userid'=>'2',
                'image'=>'storage/images/lisbon.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Wandering through the Vibrant Streets of Bangkok',
                'description'=>"Bangkok's bustling streets and ornate temples created a tapestry of sights and sounds that mesmerized me. From cruising along the Chao Phraya River to exploring the Grand Palace, each moment was an immersion in Thai culture and history. Indulging in street food delicacies and experiencing the vibrant nightlife added an extra layer of excitement to my journey.",
                'location'=>'Bangkok, Thailand',
                'userid'=>'3',
                'image'=>'storage/images/bangkok.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'=>'Immersing in the Cultural Melting Pot of Istanbul',
                'description'=>'Istanbul, the meeting point of Europe and Asia, offered a captivating blend of history and modernity. Exploring the awe-inspiring Hagia Sophia, wandering through the vibrant Spice Bazaar, and cruising along the Bosphorus were experiences that introduced me to the rich tapestry of Turkish culture. The warm hospitality and delicious cuisine made Istanbul a city that forever holds a special place in my heart.',
                'location'=>'Istanbul, Turkey',
                'userid'=>'1',
                'image'=>'storage/images/turkey.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
