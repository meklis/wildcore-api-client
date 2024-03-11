<?php

namespace Meklis\WildcoreApiClient\Models\SystemActionsLogs;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\SystemActionsLogs\Types\ActionsParameters;
use Meklis\WildcoreApiClient\Models\User\User;

class SystemActionLogs extends Model
{
    /**
     * @param ActionsParameters|null $actionsParameters
     * @return SystemActionLog[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    public function listByParameters(?ActionsParameters $actionsParameters = null)
    {
        $params = [];
        if($actionsParameters) {
            $params = [RequestOptions::JSON => $actionsParameters->getAsArray()];
        }
        $data = json_decode($this->httpClient->post('logs/actions', $params)->getBody(), true)['data'];
        return array_map(function ($d) {
            return $this->mapper->map($d, SystemActionLog::class);
        }, $data);
    }

    /**
     * @param SystemActionLog $actionLog
     * @return SystemActionLog
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    public function create(SystemActionLog $actionLog)
    {
        $data = json_decode($this->httpClient->post('logs/action', [
            RequestOptions::JSON => $actionLog->getAsArray(),
        ])->getBody(), true)['data'];
        return  $this->mapper->map($data, SystemActionLog::class);
    }

    /**
     * @return string[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSupportedActions()
    {
        $data = json_decode($this->httpClient->get('logs/actions-list')->getBody(), true)['data'];
        return  $data;
    }
}