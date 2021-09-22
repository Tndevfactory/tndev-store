@extends('backoffice.profiles.vendeur.vendeur')


@section('right-side-content-vendeur')

 <h1>manage products</h1>

            <table class="table  table-striped mt-2 shadow-sm">
                    <thead class="bg-dark bg-opacity-50 bg-gradient">
                    <tr class=" text-white">
                        <th>id </th>
                        <th>name</th>
                        <th>img </th>
                        <th>img </th>

                    </tr>
                    </thead>

                    <tbody class="table-light">

                        @if (isset($products))

                            @forelse ( $products  as $product )

                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->img_uri}}</td>
                                    <td>
                                        <button class="btn btn-warning">update</button>
                                        <button class="btn btn-danger">remove</button>
                                    </td>

                                </tr>

                            @empty
                                <h3>no products found</h3>
                            @endforelse

                        @endif

                    </tbody>

            </table>

@endsection
