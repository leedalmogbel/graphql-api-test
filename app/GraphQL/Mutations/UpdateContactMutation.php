<?php

namespace App\GraphQL\Mutations;

use App\Models\Contact;

class UpdateContactMutation
{
    public function resolve($rootValue, array $args): Contact
    {
        $contact = Contact::findOrFail($args['id']);
        $contact->update($args['input']);

        return $contact;
    }
}