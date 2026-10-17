<?php

use App\Models\User;

test('users can create a support ticket with an affected service', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('tickets.store'), [
        'affected_service' => 'General account inquiry',
        'subscription_id' => null,
        'subject' => 'Provisioning help',
        'priority' => 'normal',
        'message' => 'Please help with my server.',
    ]);

    $response->assertRedirect(route('tickets.index'));

    $this->assertDatabaseHas('tickets', [
        'user_id' => $user->id,
        'affected_service' => 'General account inquiry',
        'subject' => 'Provisioning help',
        'priority' => 'normal',
    ]);

    $this->assertDatabaseHas('ticket_messages', [
        'user_id' => $user->id,
        'message' => 'Please help with my server.',
    ]);
});
