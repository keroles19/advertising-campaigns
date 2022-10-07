<?php

namespace Tests\Feature;

use App\Models\Campaign;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CampaignTest extends TestCase
{
    use RefreshDatabase;


    public function test_show_all_campaigns(){

        $response  = Campaign::factory(10)->create();

        $response = $this->get('/campaign');
        $response->assertStatus(200)
            ->assertDontSee('No data available in table');
    }

    public function test_create_new_campaign(){

        $response  =  $this->call('post','/campaign',[
            'name'=> 'keroles',
            'from'=> '1-12-2022',
            'to'=>  '1-6-2023',
            'total'=> 12.22,
            'daily_budget'=> 12.22
        ]);
      $response->assertRedirect('/campaign');
    }

   public function test_update_campaign(){
        $campaign = Campaign::factory()->create();
        $response = $this->put("/campaign/$campaign->id",[
            'name'=> 'keroles',
            'from'=> '1-12-2022',
            'to'=>  '1-6-2023',
            'total'=> 12.22,
            'daily_budget'=> 12.22
        ])->assertRedirect('/campaign');

   }

   public function test_destroy_campaign()
   {
       $campaign = Campaign::factory()->create();
       $this->delete( "/campaign/$campaign->id")
           ->assertStatus(302);
   }
}
