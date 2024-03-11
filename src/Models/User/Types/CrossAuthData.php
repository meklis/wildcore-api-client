<?php

namespace Meklis\WildcoreApiClient\Models\User\Types;

use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\User\User;
use Meklis\WildcoreApiClient\Models\UserRoles\UserRole;

class CrossAuthData extends Model
{
    protected User $user;
    protected string $expired_at;
    protected string $auth_key;

    public function getUser(): User
    {
        return $this->user;
    }

    public function getExpiredAt(): string
    {
        return $this->expired_at;
    }

    public function getAuthKey(): string
    {
        return $this->auth_key;
    }

}