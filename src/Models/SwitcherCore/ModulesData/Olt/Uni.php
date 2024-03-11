<?php

namespace Meklis\WildcoreApiClient\Models\SwitcherCore\ModulesData\Olt;

class Uni
{
    /**
     * @var int|null
     */
    protected $num;

    /**
     * @var string | null
     */
    protected $admin_state;

    /**
     * @var string | null
     */
    protected $status;

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(?int $num): Uni
    {
        $this->num = $num;
        return $this;
    }

    public function getAdminState(): ?string
    {
        return $this->admin_state;
    }

    public function setAdminState(?string $admin_state): Uni
    {
        $this->admin_state = $admin_state;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): Uni
    {
        $this->status = $status;
        return $this;
    }


}