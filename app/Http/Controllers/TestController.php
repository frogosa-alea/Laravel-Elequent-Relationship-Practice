<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Post;
use App\Models\Country;

class TestController extends Controller
{
    public function index(){

        //***ONE TO ONE
        // contact comes from the function name in models
        //SHOW CONTACT TABLE FROM USER
        // $user = User::with('contact')->first();
        // return $user->contact;

        //SHOW USER TABLE FROM CONTACT
        // $contact = Contact::with('user')->first();
        // dd($contact->toArray());

        //***ONE TO MANY
        // $user = User::with('contact','posts')->find(1);
        // // return $user->toArray();
        // dd($user->toArray());

        //***MANY TO MANY
        // $categories = Category::all();
        // $post = Post::with('categories')->first();
        // $post->categories()->attach($categories);

        // dd($post->toArray());

        // hasOneThorough
        // $user = User::with('contactContactinformation')->first();
        // dd($user->toArray());

        // hasManyThorough
        $country = Country::with('stateCity')->first();
        dd($country->toArray());
    }
}
