<?php

namespace Meklis\WildcoreApiClient\Models\SystemActionsLogs\Types;

use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\User\User;

class ActionsParameters extends Model
{
    /**
     * @var string | null
     */
    protected $start;

    /**
     * @var string | null
     */
    protected $stop;

    /**
     * @var array | null
     */
    protected $actions;

    /**
     * @var User[] | null
     */
    protected $users;

    /**
     * @var string | null
     */
    protected $status;

    /**
     * @var string | null
     */
    protected $query;

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): ActionsParameters
    {
        $this->start = $start;
        return $this;
    }

    public function getStop(): ?string
    {
        return $this->stop;
    }

    public function setStop(?string $stop): ActionsParameters
    {
        $this->stop = $stop;
        return $this;
    }

    public function getActions(): ?array
    {
        return $this->actions;
    }

    public function setActions(?array $actions): ActionsParameters
    {
        $this->actions = $actions;
        return $this;
    }

    public function getUsers(): ?array
    {
        return $this->users;
    }

    public function setUsers(?array $users): ActionsParameters
    {
        $this->users = $users;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): ActionsParameters
    {
        $this->status = $status;
        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): ActionsParameters
    {
        $this->query = $query;
        return $this;
    }


}