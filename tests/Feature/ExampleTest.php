<?php\n\nnamespace Tests\Feature;\n\nuse Illuminate\Foundation\Testing\RefreshDatabase;\nuse Illuminate\Foundation\Testing\WithFaker;\nuse Tests\TestCase;\n\nclass ExampleTest extends TestCase\n{\n    /**\n     * A basic test example.\n     *\n     * @return void\n     */\n    public function test_example()\n    {\n         = ->get('/');\n\n        ->assertStatus(200);\n    }\n}
