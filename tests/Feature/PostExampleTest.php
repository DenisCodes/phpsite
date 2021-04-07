<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $post = Post::factory()->create();
        $post->title = 'Test Title';
        $post->save();

        $user = User::find(1);
        $user->name = 'Denis Smirnov';
        $user->save();
        $this->assertEquals('Denis Smirnov',$user->name);
        $post = $user->post;
        dd($post);
    }
}
