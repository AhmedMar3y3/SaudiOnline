<?php

namespace Modules\Categories\Entities\Helpers;

trait CategoryHelpers
{
    /**
     * The user profile image url.
     *
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->getFirstMediaUrl();
    }

    /**
     * Check if category is active.
     *
     * @return string
     */
    public function isActive(): bool
    {
        return (bool) $this->active;
    }
}
