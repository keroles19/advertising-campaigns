<?php

namespace Tests\Feature;

use App\Models\Campaign;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;

class CampaignApiTest extends TestCase
{
    use RefreshDatabase;


    public function test_list_all_campaigns(){

        $this->json('get', 'api/v1/advertisement')
            ->assertStatus(ResponseAlias::HTTP_OK);
    }

    public function test_api_create_campaign(){
        $campaign = [
            'name'=> fake()->name,
            'from'=> fake()->dateTimeBetween('1-1-2023','1-6-2023')->format('d-m-Y'),
            'to'=> fake()->dateTimeBetween('1-1-2024','1-1-2024',)->format('d-m-Y'),
            'total'=> fake()->randomFloat('2',0,2),
            'daily_budget'=> fake()->randomFloat('2',0,2),
        ];
        $this->json('post', 'api/v1/advertisement', $campaign)
            ->assertStatus(ResponseAlias::HTTP_OK);
    }


    public function test_api_update_campaign(){
        $campaign = Campaign::factory()->create();
        $this->json('put', "api/v1/advertisement/$campaign->id", [
            'name'=> 'keroles',
            'from'=> '1-12-2022',
            'to'=>  '1-6-2023',
            'total'=> 12.22,
            'daily_budget'=> 12.22
        ])->assertStatus(ResponseAlias::HTTP_OK);
    }

    public function test_api__destroy_campaign(){

      $model = Campaign::factory()->create();

        $this->json('delete', "/api/v1/advertisement/$model->id")
            ->assertStatus(200);
    }



}
