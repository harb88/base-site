<?php namespace app\Library\FCLawyers\LawMaster;

use GuzzleHttp\Client;

class IntegrationService
{
    private $client;
    private $token;

    public function __construct()
    {
        $this->init();
    }

    /**
     * Logs into LawMaster API
     * and configures HTTP client
     */
    private function init()
    {
        //log in and get token
        $this->client = new Client(['base_uri' => config('lawmaster.host')]);
        $result = $this->client->request('POST', config('lawmaster.service').config('lawmaster.api_login'), ['json' => ['username' => config('lawmaster.username'), 'password' => config('lawmaster.password')]]);
        $this->token = $result->getBody();
    }

    private function request($method, $api, $data = null)
    {
        if(!is_null($data))
        {
            $submitData['json'] = $data;
        }
        $submitData['headers']['LawMasterAuth'] = $this->token;
        return $this->client->request($method, config('lawmaster.service').$api, $submitData);
    }

    protected function post($api, $data)
    {
        return $this->request("POST", $api, $data);
    }

    protected function put($api, $data)
    {
        return $this->request("PUT", $api, $data);
    }

    protected function get($api)
    {
        return $this->request("GET", $api);
    }
}