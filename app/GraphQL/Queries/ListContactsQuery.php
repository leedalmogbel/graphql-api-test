<?php

namespace App\GraphQL\Queries;

use App\Models\Contact;

class ListContactsQuery
{
    public function resolve(): array
    {
        return Contact::all()->toArray();
    }
}