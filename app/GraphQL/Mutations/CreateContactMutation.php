<?php

namespace App\GraphQL\Mutations;

use App\Models\Contact;

class CreateContactMutation
{
    public function resolve($rootValue, array $args): Contact
    {
        return Contact::create($args['input']);
    }
}