<?php

namespace Meklis\WildcoreApiClient\Models\SystemActionsLogs;


use Meklis\WildcoreApiClient\Models\Devices\Device;
use Meklis\WildcoreApiClient\Models\Model;
use Meklis\WildcoreApiClient\Models\User\User;

class SystemActionLog extends Model
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var array
     */
    protected $meta;

    /**
     * @var string
     */
    protected $status;


    /**
     * @var null|Device
     */
    protected $device;

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): SystemActionLog
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): SystemActionLog
    {
        $this->action = $action;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): SystemActionLog
    {
        $this->user = $user;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): SystemActionLog
    {
        $this->message = $message;
        return $this;
    }

    public function getMeta(): array
    {
        return $this->meta;
    }

    public function setMeta(array $meta): SystemActionLog
    {
        $this->meta = $meta;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): SystemActionLog
    {
        $this->status = $status;
        return $this;
    }

    public function getDevice(): ?Device
    {
        return $this->device;
    }

    public function setDevice(?Device $device): SystemActionLog
    {
        $this->device = $device;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): SystemActionLog
    {
        $this->id = $id;
        return $this;
    }


}