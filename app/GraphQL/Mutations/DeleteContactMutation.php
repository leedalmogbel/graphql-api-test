<?php

namespace App\GraphQL\Mutations;

use App\Models\Contact;

class DeleteContactMutation
{
    public function resolve($rootValue, array $args): Contact
    {
        $contact = Contact::findOrFail($args['id']);
        $contact->delete();

        return $contact;
    }
}