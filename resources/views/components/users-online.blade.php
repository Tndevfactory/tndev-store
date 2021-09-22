<div class="users_online users_online_reduced_height">

    <div class="row d-flex justify-content-end">
        <button class="col-5 me-3 user_online_toggle btn btn-primary btn-sm ">Voir user-status 👁️‍🗨️</button>
    </div>

     <table class="table  bg-transparent">
        <thead class="bg-transparent border border-0">
            <tr class=" text-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Role</th>
                <th>Last seen</th>
            </tr>
        </thead>
        <tbody class="bg-transparent">

            @foreach ( $users as $user )

                @if ($user->isOnline())
                    <tr>
                        <td class="{{$user->isOnline() ? 'text-success' : 'text-muted'}}">
                            {{$user->id}}
                        </td>

                        <td class="{{$user->isOnline() ? 'text-success' : 'text-muted'}}">
                            {{$user->name}}
                        </td>

                        <td>
                            @if ($user->isOnline())
                                <span class="text-success"> online</span>
                            @else
                                <span class="text-muted"> offline</span>
                            @endif
                        </td>

                        <td>
                            @if ($user->isOnline())
                                <span class="text-success">{{ Str::ucfirst($user->roles()->first()->name)}} </span>
                            @else
                                <span class="text-muted "> </span>
                            @endif
                        
                        </td>

                        <td class="{{$user->isOnline() ? 'text-success' : 'text-muted'}}">
                            {{ $user->isOnline() ? $user->lastSeen(): "" }}
                        </td>

                    </tr>
                @endif

                
            @endforeach

        
        

        </tbody>
     </table>
</div>