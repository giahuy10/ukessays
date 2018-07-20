<?php

namespace App\Policies;

use App\User;
use App\Assignment;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssignmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the assignment.
     *
     * @param  \App\User  $user
     * @param  \App\Assignment  $assignment
     * @return mixed
     */
    public function view(User $user, Assignment $assignment)
    {
        if($assignment->status != 1) {
            if ($user->id == $assignment->created_by || $user->id == $assignment->taken_by) {
                return true;
            }     
        }else {
            return true;
        }
        
        return false;
    }

    /**
     * Determine whether the user can create assignments.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the assignment.
     *
     * @param  \App\User  $user
     * @param  \App\Assignment  $assignment
     * @return mixed
     */
    public function update(User $user, Assignment $assignment)
    {
        //
    }

    /**
     * Determine whether the user can delete the assignment.
     *
     * @param  \App\User  $user
     * @param  \App\Assignment  $assignment
     * @return mixed
     */
    public function delete(User $user, Assignment $assignment)
    {
        //
    }
   
    public function pick(User $user, Assignment $assignment)
    {
        if ($assignment->taken_by || $user->user_type == 1 || $user->level->maximum_order < $assignment->price * 0.4) {
            return false;
        }
        return true;
    }
    public function complete(User $user, Assignment $assignment)
    {
        return $user->id == $assignment->created_by;
    }
    public function finished(User $user, Assignment $assignment)
    {
        return $user->id == $assignment->taken_by;
    }
    public function revise(User $user, Assignment $assignment)
    {
        return $user->id == $assignment->created_by;
    }
    public function review(User $user, Assignment $assignment)
    {
        return $user->id == $assignment->created_by;
    }
}
