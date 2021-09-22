@extends('backoffice.profiles.employee.employee')


@section('right-side-content-employee')
{{-- <x-breadcrumb/> --}}
  <h3 class="text-muted ff-oswald d-inline-block me-2">manage products by employee </h3> <span class="small ">  ({{count($products)}}) products found</span>


            <table class="table  table-striped mt-2 shadow-sm">
                    <thead class="bg-dark bg-opacity-50 bg-gradient">
                    <tr class=" text-white">
                        <th>ID </th>
                        <th>Products</th>
                        <th>Designation</th>
                        <th>Manage</th>

                    </tr>
                    </thead>

                    <tbody class="table-light">

                        @if (isset($products))

                            @forelse ( $products  as $product )

                                {{-- @can('viewAny', $product )
                                use directly bases on ProductPolicy method
                                @endcan --}}

                                {{-- @can('user-view-product' , $product)
                                    use as gate route in authservice provider
                                 @endcan --}}

                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{$product->img_uri}}"  class="img-fluid rounded" alt=""
                                                 style="height: 50px" >
                                       </td>
                                        <td>{{$product->name}}</td>
                                        <td>
                                            <button class="btn btn-warning">update</button>

                                            @can('delete', $product )
                                                <button class="btn btn-danger">remove</button>
                                            @endcan

                                        </td>

                                    </tr>


                            @empty
                                   <div class=" p-3 bg-danger text-white fs-5">
                                        <span>Sorry No products found OR 🔴 you are not allowed to view</span>

                                   </div>

                            @endforelse

                        @endif

                    </tbody>

            </table>

@endsection
