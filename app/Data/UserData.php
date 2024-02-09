<?php

namespace App\Data;

use Carbon\CarbonInterface;
use Hybridly\Support\Data\DataResource;

final class UserData extends DataResource
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly string $email,
        public readonly ?CarbonInterface $created_at,
    ) {
    }
}
