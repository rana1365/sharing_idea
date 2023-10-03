<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use function Symfony\Component\Uid\Factory\create;

class IdeaController extends Controller
{
    public function store() {

        request()->validate([

            'idea' => 'required|min:5|max:240'

        ]);

        $idea = Idea::create(
            [
            'content' => request()->get('idea', ''),
            ]
        );

//        $idea->save();
        return redirect()->route('dashboard')->with('success', 'Idea has created Successfully..!');

    }
}
