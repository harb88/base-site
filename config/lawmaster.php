<?php
/**
 * LawMaster configuration details
 */
return [

    "host" => "http://fclsrv8.fclawyers.local/",
    "service" => (env('APP_ENV', "development") == "production" ? "LawMaster.Integration.Service.Production" : "LawMaster.Integration.Service.Training"),
    "username" => 'FREEDOM',
    "password" => 'M0DeeRf',
    "dms_fclsrv3" => (env('APP_ENV', "development") == "production" ? "http://fclsrv3.fclawyers.local/LawMasterDMS.Production.MAIN" : "http://fclsrv3.fclawyers.local/LawMasterDMS.Training.MAIN"),
    "dms_fclsrv6" => (env('APP_ENV', "development") == "production" ? "http://fclsrv6.fclawyers.local/LawMasterDMS.Production.BRIS" : "http://fclsrv6.fclawyers.local/LawMasterDMS.Training.BRIS"),
    "api_login" => "/account/loginapi/",
    "api_userprofile" => "/api/userprofile",
    "api_resources" => "/api/resources",
    "api_matters" => "/api/matters",
    "api_folios" => "/api/folios",
    "api_matterfolios" => "/api/matterfolios",
    "api_matterevents" => "/api/matterevents",
    "api_mattersummary" => "/api/mattersummary",
    "api_matterbringups" => "/api/matterbringups",
    "api_mattermessage" => "/api/mattermessage",
    "api_client" => "/api/client",
    "api_clienter" => "/api/clientrelationship",
    "api_entities" => "/api/entities",
    "api_entityrelationships" => "/api/entityrelationships",
    "api_newclientenquiry" => "/api/newclientenquiry",
    "api_attributes" => "/api/attributes"

    ];