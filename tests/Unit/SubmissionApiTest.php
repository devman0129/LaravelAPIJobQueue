<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\Submission; 

class SubmissionApiTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    public function test_submission_api()  
    {  
        $data = [  
            'name' => 'John Doe',  
            'email' => 'john.doe@example.com',  
            'message' => 'This is a test message.'  
        ];  

        $response = $this->postJson('/api/submit', $data);  

        $response->assertStatus(200)  
                 ->assertJson(['message' => 'Submission job dispatched successfully.']);  
    }  
}
