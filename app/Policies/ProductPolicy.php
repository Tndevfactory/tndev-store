<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    //override policy method for admin
    public function before(User $user, $ability)
    {


        $role = auth()->user()->roles()->first()->name;

        // if( $role === 'admin' && ($ability === 'delete' || $ability === 'create')){
        //     return  $role == 'admin';
        // }
        
        if( $role === 'admin'){
            return  $role == 'admin';
        }
         
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        $role = auth()->user()->roles()->first()->name;
        
        // $role == 'admin'
        // $role == 'employee'
        // $role == 'client'
        // $role == 'vendeur'
        return  $role == 'employee'; 
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Product $product)
    {
       $role = auth()->user()->roles()->first()->name;
        
        // $role == 'admin'
        // $role == 'employee'
        // $role == 'client'
        // $role == 'vendeur'
        return  $role == 'admin';
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        $role = auth()->user()->roles()->first()->name;
        
        // $role == 'admin'
        // $role == 'employee'
        // $role == 'client'
        // $role == 'vendeur'
        return  $role == 'admin';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Product $product)
    {
        $role = auth()->user()->roles()->first()->name;
        
        // $role == 'admin'
        // $role == 'employee'
        // $role == 'client'
        // $role == 'vendeur'
        return  $role == 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Product $product)
    {
         $role = auth()->user()->roles()->first()->name;
        
        // $role == 'admin'
        // $role == 'employee'
        // $role == 'client'
        // $role == 'vendeur'
        return  $role == 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Product $product)
    {
        $role = auth()->user()->roles()->first()->name;
        
        // $role == 'admin'
        // $role == 'employee'
        // $role == 'client'
        // $role == 'vendeur'
        return  $role == 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Product $product)
    {
        $role = auth()->user()->roles()->first()->name;
        
        // $role == 'admin'
        // $role == 'employee'
        // $role == 'client'
        // $role == 'vendeur'
        return  $role == 'admin';
    }
}
