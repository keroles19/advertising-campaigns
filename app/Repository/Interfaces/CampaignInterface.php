<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

interface CampaignInterface
{
    public function getAllCampaign();
    public function createCampaign(FormRequest $request);
    public function updateCampaign($id, FormRequest $request);
    public function getCampaignById($id);
    public function deleteCampaign($id);
}
