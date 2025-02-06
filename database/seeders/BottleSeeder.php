<?php

namespace Database\Seeders;

use App\Models\Bottle;
use Illuminate\Database\Seeder;

class BottleSeeder extends Seeder
{
    public function run(): void
    {
        $bottles = [
            [
                'name' => 'Komagatake',
                'year_established' => 1985,
                'location' => 'Japan',
                'website' => 'https://www.marswhisky.com/en/',
                'description' => 'A Japanese whisky distillery located in Nagano Prefecture.',
            ],
            [
                'name' => 'Bunnahabhain',
                'year_established' => 1881,
                'location' => 'Islay, Scotland',
                'website' => 'https://bunnahabhain.com/',
                'description' => 'An Islay single malt Scotch whisky distillery.',
            ],
            [
                'name' => 'Caol Ila',
                'year_established' => 1846,
                'location' => 'Islay, Scotland',
                'website' => 'https://www.malts.com/en-row/distilleries/caol-ila/',
                'description' => 'The largest of eight distilleries on the island of Islay.',
            ],
            [
                'name' => 'Hotaling & Co.',
                'year_established' => 1993,
                'location' => 'San Francisco, USA',
                'website' => 'https://www.hotalingandco.com/',
                'description' => 'A San Francisco-based distillery and importer.',
            ],
            [
                'name' => 'Bushmills',
                'year_established' => 1608,
                'location' => 'Northern Ireland',
                'website' => 'https://www.bushmills.com/',
                'description' => 'The oldest licensed whiskey distillery in the world.',
            ],
            [
                'name' => 'New Riff',
                'year_established' => 2014,
                'location' => 'Newport, Kentucky, USA',
                'website' => 'https://www.newriffdistilling.com/',
                'description' => 'A Kentucky-based distillery known for its bourbon and rye whiskeys.',
            ],
            [
                'name' => 'Oban',
                'year_established' => 1794,
                'location' => 'Oban, Scotland',
                'website' => 'https://www.malts.com/en-row/distilleries/oban/',
                'description' => 'A Highland single malt Scotch whisky distillery.',
            ],
            // Adding more distilleries
            [
                'name' => 'Buffalo Trace',
                'year_established' => 1787,
                'location' => 'Frankfort, Kentucky, USA',
                'website' => 'https://www.buffalotracedistillery.com/',
                'description' => 'One of the oldest continuously operating distilleries in the United States.',
            ],
            [
                'name' => 'Maker\'s Mark',
                'year_established' => 1953,
                'location' => 'Loretto, Kentucky, USA',
                'website' => 'https://www.makersmark.com/',
                'description' => 'Known for their distinctive square bottles sealed with red wax.',
            ],
            [
                'name' => 'Yamazaki',
                'year_established' => 1923,
                'location' => 'Shimamoto, Japan',
                'website' => 'https://www.suntory.com/brands/yamazaki/',
                'description' => 'Japan\'s first commercial whisky distillery.',
            ],
            [
                'name' => 'Glenfiddich',
                'year_established' => 1887,
                'location' => 'Dufftown, Scotland',
                'website' => 'https://www.glenfiddich.com/',
                'description' => 'The world\'s best-selling single-malt whisky.',
            ],
            [
                'name' => 'Talisker',
                'year_established' => 1830,
                'location' => 'Isle of Skye, Scotland',
                'website' => 'https://www.malts.com/en-row/distilleries/talisker/',
                'description' => 'The only single malt whisky distillery on the Isle of Skye.',
            ],
            [
                'name' => 'High West',
                'year_established' => 2006,
                'location' => 'Park City, Utah, USA',
                'website' => 'https://www.highwest.com/',
                'description' => 'Utah\'s first legal distillery since 1870.',
            ],
            [
                'name' => 'WhistlePig',
                'year_established' => 2007,
                'location' => 'Shoreham, Vermont, USA',
                'website' => 'https://whistlepigwhiskey.com/',
                'description' => 'Known for their premium rye whiskey production.',
            ],
            [
                'name' => 'Kavalan',
                'year_established' => 2005,
                'location' => 'Yilan County, Taiwan',
                'website' => 'https://www.kavalanwhisky.com/',
                'description' => 'Taiwan\'s first whisky distillery, known for their tropical-aged spirits.',
            ],
            [
                'name' => 'Balvenie',
                'year_established' => 1892,
                'location' => 'Dufftown, Scotland',
                'website' => 'https://www.thebalvenie.com/',
                'description' => 'One of the few distilleries with its own malting floor.',
            ],
            [
                'name' => 'Midleton',
                'year_established' => 1825,
                'location' => 'County Cork, Ireland',
                'website' => 'https://www.midletondistillery.com/',
                'description' => 'Home to some of Ireland\'s most famous whiskeys including Jameson.',
            ],
            [
                'name' => 'Nikka Yoichi',
                'year_established' => 1934,
                'location' => 'Yoichi, Japan',
                'website' => 'https://www.nikka.com/',
                'description' => 'Masataka Taketsuru\'s first distillery in Japan.',
            ],
            [
                'name' => 'Springbank',
                'year_established' => 1828,
                'location' => 'Campbeltown, Scotland',
                'website' => 'https://springbank.scot/',
                'description' => 'One of the last surviving distilleries in Campbeltown.',
            ],
        ];

        foreach ($bottles as $bottle) {
            Bottle::create($bottle);
        }
    }
}
