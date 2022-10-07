<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Http\Resources\CampaignResource;
use App\Repository\Interfaces\CampaignInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CampaignController extends Controller
{
    private CampaignInterface $campaign;

    public function __construct(CampaignInterface $campaign)
    {
        $this->campaign = $campaign;
    }

    public function index()
    {
        return responseJson('200', 'advertising campaign ',
            CampaignResource::collection($this->campaign->getAllCampaign()));
    }

    public function store(StoreCampaignRequest $request)
    {
        $model = $this->campaign->createCampaign($request);
        if ($model)
            return responseJson(Response::HTTP_OK, 'Model Was Created');
    }

    public function update($id, UpdateCampaignRequest $request)
    {
        $model = $this->campaign->updateCampaign($id,$request);
        if($model)
            return responseJson(Response::HTTP_OK,'Model Was Updated');
    }

    public function destroy($id){
      $model = $this->campaign->deleteCampaign($id);
      if($model)
          return responseJson(Response::HTTP_OK,'Model Was Updated');

    }

}
