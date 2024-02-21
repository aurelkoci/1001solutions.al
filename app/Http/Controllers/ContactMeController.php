<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactMeRequest;

class ContactMeController extends Controller
{
    public function build(ContactMeRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);

        return to_route('web.home')->with('success', 'Faleminderit që na kontaktuat, ne do ju kontaktojmë së shpejti.');
    }
}
