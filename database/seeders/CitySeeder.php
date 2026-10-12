<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Budapest', 'county' => 'Budapest', 'population' => 1752000],
            ['name' => 'Érd', 'county' => 'Pest', 'population' => 68400],
            ['name' => 'Gödöllő', 'county' => 'Pest', 'population' => 35600],
            ['name' => 'Dunakeszi', 'county' => 'Pest', 'population' => 44200],
            ['name' => 'Vác', 'county' => 'Pest', 'population' => 34500],
            ['name' => 'Szentendre', 'county' => 'Pest', 'population' => 26400],
            ['name' => 'Pomáz', 'county' => 'Pest', 'population' => 16800],
            ['name' => 'Budaörs', 'county' => 'Pest', 'population' => 31300],
            ['name' => 'Szigetszentmiklós', 'county' => 'Pest', 'population' => 40100],
            ['name' => 'Székesfehérvár', 'county' => 'Fejér', 'population' => 100300],
            ['name' => 'Dunaújváros', 'county' => 'Fejér', 'population' => 42800],
            ['name' => 'Bicske', 'county' => 'Fejér', 'population' => 13100],
            ['name' => 'Mór', 'county' => 'Fejér', 'population' => 14600],
            ['name' => 'Tatabánya', 'county' => 'Komárom-Esztergom', 'population' => 66500],
            ['name' => 'Esztergom', 'county' => 'Komárom-Esztergom', 'population' => 28600],
            ['name' => 'Komárom', 'county' => 'Komárom-Esztergom', 'population' => 19400],
            ['name' => 'Oroszlány', 'county' => 'Komárom-Esztergom', 'population' => 18700],
            ['name' => 'Veszprém', 'county' => 'Veszprém', 'population' => 57100],
            ['name' => 'Ajka', 'county' => 'Veszprém', 'population' => 27400],
            ['name' => 'Pápa', 'county' => 'Veszprém', 'population' => 30800],
            ['name' => 'Balatonfüred', 'county' => 'Veszprém', 'population' => 13500],
            ['name' => 'Győr', 'county' => 'Győr-Moson-Sopron', 'population' => 129800],
            ['name' => 'Sopron', 'county' => 'Győr-Moson-Sopron', 'population' => 64300],
            ['name' => 'Mosonmagyaróvár', 'county' => 'Győr-Moson-Sopron', 'population' => 33500],
            ['name' => 'Kapuvár', 'county' => 'Győr-Moson-Sopron', 'population' => 10400],
            ['name' => 'Szombathely', 'county' => 'Vas', 'population' => 78200],
            ['name' => 'Körmend', 'county' => 'Vas', 'population' => 11300],
            ['name' => 'Sárvár', 'county' => 'Vas', 'population' => 15500],
            ['name' => 'Celldömölk', 'county' => 'Vas', 'population' => 10700],
            ['name' => 'Zalaegerszeg', 'county' => 'Zala', 'population' => 57400],
            ['name' => 'Nagykanizsa', 'county' => 'Zala', 'population' => 44900],
            ['name' => 'Keszthely', 'county' => 'Zala', 'population' => 20700],
            ['name' => 'Lenti', 'county' => 'Zala', 'population' => 8600],
            ['name' => 'Pécs', 'county' => 'Baranya', 'population' => 143000],
            ['name' => 'Komló', 'county' => 'Baranya', 'population' => 22700],
            ['name' => 'Mohács', 'county' => 'Baranya', 'population' => 17700],
            ['name' => 'Szigetvár', 'county' => 'Baranya', 'population' => 10200],
            ['name' => 'Kaposvár', 'county' => 'Somogy', 'population' => 57300],
            ['name' => 'Marcali', 'county' => 'Somogy', 'population' => 11200],
            ['name' => 'Fonyód', 'county' => 'Somogy', 'population' => 5800],
            ['name' => 'Siófok', 'county' => 'Somogy', 'population' => 25100],
            ['name' => 'Szekszárd', 'county' => 'Tolna', 'population' => 33100],
            ['name' => 'Dombóvár', 'county' => 'Tolna', 'population' => 18200],
            ['name' => 'Bonyhád', 'county' => 'Tolna', 'population' => 13700],
            ['name' => 'Paks', 'county' => 'Tolna', 'population' => 19700],
            ['name' => 'Miskolc', 'county' => 'Borsod-Abaúj-Zemplén', 'population' => 151600],
            ['name' => 'Kazincbarcika', 'county' => 'Borsod-Abaúj-Zemplén', 'population' => 27800],
            ['name' => 'Tiszaújváros', 'county' => 'Borsod-Abaúj-Zemplén', 'population' => 26700],
            ['name' => 'Ózd', 'county' => 'Borsod-Abaúj-Zemplén', 'population' => 34900],
            ['name' => 'Eger', 'county' => 'Heves', 'population' => 54900],
            ['name' => 'Gyöngyös', 'county' => 'Heves', 'population' => 28700],
            ['name' => 'Hatvan', 'county' => 'Heves', 'population' => 21200],
            ['name' => 'Salgótarján', 'county' => 'Nógrád', 'population' => 32900],
            ['name' => 'Balassagyarmat', 'county' => 'Nógrád', 'population' => 15400],
            ['name' => 'Pásztó', 'county' => 'Nógrád', 'population' => 9400],
            ['name' => 'Debrecen', 'county' => 'Hajdú-Bihar', 'population' => 202600],
            ['name' => 'Hajdúböszörmény', 'county' => 'Hajdú-Bihar', 'population' => 31600],
            ['name' => 'Hajdúszoboszló', 'county' => 'Hajdú-Bihar', 'population' => 23800],
            ['name' => 'Berettyóújfalu', 'county' => 'Hajdú-Bihar', 'population' => 14900],
            ['name' => 'Szolnok', 'county' => 'Jász-Nagykun-Szolnok', 'population' => 71900],
            ['name' => 'Jászberény', 'county' => 'Jász-Nagykun-Szolnok', 'population' => 26400],
            ['name' => 'Karcag', 'county' => 'Jász-Nagykun-Szolnok', 'population' => 19500],
            ['name' => 'Törökszentmiklós', 'county' => 'Jász-Nagykun-Szolnok', 'population' => 20700],
            ['name' => 'Nyíregyháza', 'county' => 'Szabolcs-Szatmár-Bereg', 'population' => 117800],
            ['name' => 'Kisvárda', 'county' => 'Szabolcs-Szatmár-Bereg', 'population' => 16400],
            ['name' => 'Nyírbátor', 'county' => 'Szabolcs-Szatmár-Bereg', 'population' => 12700],
            ['name' => 'Mátészalka', 'county' => 'Szabolcs-Szatmár-Bereg', 'population' => 17100],
            ['name' => 'Kecskemét', 'county' => 'Bács-Kiskun', 'population' => 112300],
            ['name' => 'Baja', 'county' => 'Bács-Kiskun', 'population' => 36000],
            ['name' => 'Kiskunfélegyháza', 'county' => 'Bács-Kiskun', 'population' => 29700],
            ['name' => 'Kalocsa', 'county' => 'Bács-Kiskun', 'population' => 16600],
            ['name' => 'Békéscsaba', 'county' => 'Békés', 'population' => 58800],
            ['name' => 'Gyula', 'county' => 'Békés', 'population' => 29000],
            ['name' => 'Orosháza', 'county' => 'Békés', 'population' => 28500],
            ['name' => 'Szarvas', 'county' => 'Békés', 'population' => 16700],
            ['name' => 'Szeged', 'county' => 'Csongrád-Csanád', 'population' => 157800],
            ['name' => 'Hódmezővásárhely', 'county' => 'Csongrád-Csanád', 'population' => 42000],
            ['name' => 'Makó', 'county' => 'Csongrád-Csanád', 'population' => 21700],
            ['name' => 'Csongrád', 'county' => 'Csongrád-Csanád', 'population' => 16100],
        ];

        foreach ($cities as $city) {
            $countyId = DB::table('counties')
                ->where('name', $city['county'])
                ->value('id');

            if (! $countyId) {
                continue; // skip if county not found
            }

            DB::table('cities')->insert([
                'name' => $city['name'],
                'county_id' => $countyId,
                'population' => $city['population'],
            ]);
        }
    }
}
