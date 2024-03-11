<?php

namespace Meklis\WildcoreApiClient\Models\User;

use GuzzleHttp\RequestOptions;
use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\User\Types\CrossAuthData;

class Users extends Model
{
    /**
     * @param $username
     * @param $expireSeconds
     * @param $userIpAddress
     * @return CrossAuthData
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    public function crossAuth($username, $expireSeconds = 86400, $userIpAddress = '127.0.0.1')
    {
        $data = json_decode($this->httpClient->post('system/cross-auth', [
            RequestOptions::JSON => [
                'login' => $username,
                'expire_sec' => $expireSeconds,
                'user_ip' => $userIpAddress,
            ]
        ])->getBody(), true)['data'];
        return $this->mapper->map($data, CrossAuthData::class);
    }

    /**
     * @return User[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    function list()
    {
        $data = json_decode($this->httpClient->get('user')->getBody(), true)['data'];

        return array_map(function ($d) {
            return $this->mapper->map($d, User::class);
        }, $data);
    }

    function getById(int $userId)
    {
        $data = json_decode($this->httpClient->get("user/{$userId}")->getBody(), true)['data'];
        return $this->mapper->map($data, User::class);
    }
}