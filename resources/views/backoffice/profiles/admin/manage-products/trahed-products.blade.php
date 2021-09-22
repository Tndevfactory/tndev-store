@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')
{{-- <x-breadcrumb/> --}}
 <h3 class="text-muted ff-oswald d-inline-block me-2">Restore products </h3> <span class="small ">  ({{count($productsTrashed )}}) products found</span>


            <table class="table  table-striped mt-2 shadow-sm">
                    <thead class="bg-dark bg-opacity-50 bg-gradient">
                    <tr class=" text-white">
                       <th>ID</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Manage</th>


                    </tr>
                    </thead>

                    <tbody class="table-light">

                        @if (isset($productsTrashed))

                            @forelse ( $productsTrashed  as $product )

                                <tr>
                                    <td>{{$product->id}}</td>

                                    <td><img src="{{$product->img_uri}}"  class="img-fluid rounded" alt=""
                                        style="height: 50px"
                                        >
                                    </td>
                                      <td>{{$product->name}}</td>
                                    <td>

                                        <div class="d-flex  gap-2">


                                       <form action="{{ route('update-product', $product->slug) }}" method="POST">
                                                @csrf
                                                @method('path')
                                          <button  type="submit" class="btn btn-warning btn-sm">update</button>
                                       </form>

                                       <form action="{{ route('delete-product', $product->slug) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                           <button type="submit" class="btn btn-danger btn-sm">Force delete</button>
                                       </form>

                                       <form action="{{ route('restore-product', $product->slug) }}" method="POST">
                                                @csrf
                                           <button  type="submit" class="btn btn-success btn-sm">restore</button>
                                       </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty
                                <h3>no products found</h3>
                            @endforelse

                        @endif

                    </tbody>

            </table>

@endsection
