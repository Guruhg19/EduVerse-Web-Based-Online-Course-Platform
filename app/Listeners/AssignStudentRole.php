<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;

class AssignStudentRole
{
    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $event->user->assignRole('student');
    }
}
