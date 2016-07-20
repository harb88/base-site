<?php namespace app\Library\FCLawyers\LawMaster;

class Entity extends IntegrationService
{
    public function getEntity($id)
    {
        $response = $this->get(config('lawmaster.api_entities').'/'.$id);
        if($response->getStatusCode() == '200')
        {
            return json_decode($response->getBody(),true);
        }
        else
        {
            return false;
        }
    }

    public function addEntity($entity)
    {

    }

    public function updateEntity($entity)
    {
        $response = $this->put(config('lawmaster.api_entities').'/'.$entity['EntityID'], $entity);
        if($response->getStatusCode() == '200')
        {
            return $response;
        }
        else
        {
            return false;
        }
    }
}