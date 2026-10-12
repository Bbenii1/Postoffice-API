<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\County;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocationSearchTest extends TestCase
{
    use RefreshDatabase;

    public function test_city_name_search_filters_results(): void
    {
        $county = County::create([
            'name' => 'Pest',
            'population' => 1270000,
        ]);
        City::create(['name' => 'Budapest', 'county_id' => $county->id, 'population' => 1752000]);
        City::create(['name' => 'Szeged', 'county_id' => $county->id, 'population' => 160000]);

        $response = $this->getJson('/api/cities?name=Bud');

        $response->assertOk()
            ->assertJsonCount(1, 'cities')
            ->assertJsonPath('cities.0.name', 'Budapest');
    }

    public function test_county_name_search_filters_results(): void
    {
        County::create(['name' => 'Pest', 'population' => 1270000]);
        County::create(['name' => 'Baranya', 'population' => 380000]);

        $response = $this->getJson('/api/counties?name=est');

        $response->assertOk()
            ->assertJsonCount(1, 'counties')
            ->assertJsonPath('counties.0.name', 'Pest');
    }
}
