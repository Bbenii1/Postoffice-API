<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counties = [
            ['name' => 'Budapest', 'population' => 1752000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/4/43/Coa_Hungary_Town_Budapest_big.svg/3840px-Coa_Hungary_Town_Budapest_big.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Pest', 'population' => 1270000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/1/18/HUN_Pest_megye_COA.svg/1920px-HUN_Pest_megye_COA.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Fejér', 'population' => 425000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/c/c8/HUN_Fej%C3%A9r_megye_COA.png/1920px-HUN_Fej%C3%A9r_megye_COA.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Komárom-Esztergom', 'population' => 308000, 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/e/ef/HUN_Kom%C3%A1rom-Esztergom_megye_COA.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail_unscaled'],
            ['name' => 'Veszprém', 'population' => 358000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/f/f3/Coa_Hungary_County_Veszpr%C3%A9m.svg/1920px-Coa_Hungary_County_Veszpr%C3%A9m.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Győr-Moson-Sopron', 'population' => 459000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/4/48/HUN_Gy%C5%91r-Moson-Sopron_megye_COA.png/1280px-HUN_Gy%C5%91r-Moson-Sopron_megye_COA.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Vas', 'population' => 257000, 'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/87/HUN_Vas_megye_COA.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail_unscaled'],
            ['name' => 'Zala', 'population' => 287000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/1/1b/Coa_Hungary_County_Zala_%282010-%29.svg/1920px-Coa_Hungary_County_Zala_%282010-%29.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Baranya', 'population' => 384000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/3/30/HUN_Baranya_megye_COA.png/1920px-HUN_Baranya_megye_COA.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Somogy', 'population' => 317000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/c/cc/HUN_Somogy_megye_COA.svg/1920px-HUN_Somogy_megye_COA.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Tolna', 'population' => 229000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/1/1c/HUN_Tolna_megye_COA.png/1920px-HUN_Tolna_megye_COA.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Borsod-Abaúj-Zemplén', 'population' => 643000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/8/87/Borsod-Aba%C3%BAj-Zempl%C3%A9n_departemento_blazono.svg/1920px-Borsod-Aba%C3%BAj-Zempl%C3%A9n_departemento_blazono.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Heves', 'population' => 298000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/8/82/Coa_Hungary_County_Heves.svg/1920px-Coa_Hungary_County_Heves.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Nógrád', 'population' => 196000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/0/06/Coa_Hungary_County_N%C3%B3gr%C3%A1d.svg/1920px-Coa_Hungary_County_N%C3%B3gr%C3%A1d.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Hajdú-Bihar', 'population' => 546000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/c/c9/HUN_Hajd%C3%BA-Bihar_COA.svg/3840px-HUN_Hajd%C3%BA-Bihar_COA.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Jász-Nagykun-Szolnok', 'population' => 369000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/d/d1/HUN_J%C3%A1sz-Nagykun-Szolnok_megye_COA.png/1920px-HUN_J%C3%A1sz-Nagykun-Szolnok_megye_COA.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Szabolcs-Szatmár-Bereg', 'population' => 559000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/2/20/HUN_Szabolcs-Szatm%C3%A1r-Bereg_megye_COA.svg/3840px-HUN_Szabolcs-Szatm%C3%A1r-Bereg_megye_COA.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Bács-Kiskun', 'population' => 523000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/1/1f/Bacs-kiskun-megye.svg/1280px-Bacs-kiskun-megye.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Békés', 'population' => 348000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/9/97/COA_B%C3%A9k%C3%A9s_County.svg/1920px-COA_B%C3%A9k%C3%A9s_County.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
            ['name' => 'Csongrád-Csanád', 'population' => 403000, 'logo_url' => 'https://thumb.wikimedia.org/wikipedia/commons/thumb/4/4c/HU_Csongr%C3%A1d_megye_COA.svg/3840px-HU_Csongr%C3%A1d_megye_COA.svg.png?utm_source=hu.wikipedia.org&utm_campaign=imageinfo&utm_content=thumbnail'],
        ];

        foreach ($counties as $county) {
            DB::table('counties')->insert(array_merge($county, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
