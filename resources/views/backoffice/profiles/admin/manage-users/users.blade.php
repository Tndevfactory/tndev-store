@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')
{{-- <x-breadcrumb/> --}}
 <h3 class="text-muted ff-oswald d-inline-block me-2">manage users </h3> <span class="small ">  ({{count($users)}}) users found</span>

            <table class="table table-hover mt-2 shadow-sm">
                    <thead class="bg-dark bg-opacity-50 bg-gradient">
                    <tr class=" text-white">
                        <th>ID </th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Manage</th>

                    </tr>
                    </thead>

                    <tbody class="">

                        @if (isset($users) && count($users) > 0)

                            @forelse ( $users  as $user )

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <img src="{{$user->img_uri}}"  class="img-fluid rounded-circle" alt=""
                                        style="height: 50px"
                                        >
                                    </td>
                                    <td>{{$user->name}}</td>

                                    <td>
                                        <div class="d-flex  gap-2">
                                            <form action="{{ route('update-user', $user->id) }}" method="POST">
                                                     @csrf
                                                     @method('path')
                                               <button  type="submit" class="btn btn-warning btn-sm">update</button>
                                            </form>

                                            <form action="{{ route('delete-user', $user->id) }}" method="POST">
                                                     @csrf
                                                     @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                            </form>
                                        </div>

                                    </td>

                                </tr>

                            @empty
                                <h3>no users found</h3>
                            @endforelse

                        @endif

                    </tbody>

            </table>

@endsection
