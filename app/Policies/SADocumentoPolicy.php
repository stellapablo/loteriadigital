<?php

namespace App\Policies;

use App\User;
use App\SADocumento;
use Illuminate\Auth\Access\HandlesAuthorization;

class SADocumentoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the sADocumento.
     *
     * @param  \App\User  $user
     * @param  \App\SADocumento  $sADocumento
     * @return mixed
     */
    public function view(User $user, SADocumento $sADocumento)
    {
        return true;
    }

    /**
     * Determine whether the user can create sADocumentos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the sADocumento.
     *
     * @param  \App\User  $user
     * @param  \App\SADocumento  $sADocumento
     * @return mixed
     */
    public function update(User $user, SADocumento $documento)
    {
        return $documento->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the sADocumento.
     *
     * @param  \App\User  $user
     * @param  \App\SADocumento  $sADocumento
     * @return mixed
     */
    public function delete(User $user, SADocumento $sADocumento)
    {
        //
    }
}
