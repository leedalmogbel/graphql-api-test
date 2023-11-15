<?php

namespace App\GraphQL\Queries;

use App\Models\Contact;

class ViewContactQuery
{
    public function resolve($rootValue, array $args): Contact
    {
        return Contact::findOrFail($args['id']);
    }
}