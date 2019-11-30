<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test **/
    public function a_user_can_create_a_project()
    {
        // Pour explication régarder le dernier cour de Laravel 5.7 from scratch
        // Indiquer si le route est non trouvable
        $this->withoutExceptionHandling();

        $attributes = [
            'title'         => $this->faker->sentence,
            'description'   => $this->faker->paragraph
        ];

        $this->post('/projects', $attributes)->assertRedirect('/projects');

        // Inssert in DB
        $this->assertDatabaseHas('projects', $attributes);

        // Get from DB and show
        $this->get('/projects')->assertSee($attributes['title']);
    }

    /** @test **/
    public function a_project_requires_a_title()
    {
        // Créée dans le dossier database/factories/ProjectsFactory.php
        $attributes = factory('App\Project')->raw(['title' => '']);

        $this->post('/projects', $attributes)->assertSessionHasErrors('title');
    }

    /** @test **/
    public function a_project_requires_a_description()
    {
        $attributes = factory('App\Project')->raw(['description' => '']);

        $this->post('/projects', $attributes)->assertSessionHasErrors('description');
    }
}
