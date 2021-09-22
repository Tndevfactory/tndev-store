@extends('layout.app')

@section('title')
    <title>Shopping-tn | Guzzle</title>
@endsection

@section('content')

   
    <div class="container text-white">
         @include('components.breadcrumb', ['current_page'=> 'Guzzle'])
        <h1 class="d-inline-block">guzzle HTTP  </h1> <h3 class="d-inline-block ms-2 text-muted">jsonplaceholder</h3>

        <div class="row min-vh-100">
            <div class="col-3">
                     <a href="{{ route('view-guzzle') }}" class="btn btn-info my-3 "> all http posts request guzzle</a>

                    <form action="{{ route('view-guzzle') }}" method="GET" class="form">
                        <input type="hidden" name="id" value="9">
                        <input type="hidden" name="t" value="8">
                        <button type="submit" class="btn btn-success"> post id 9 request guzzle</button>
                    </form>

            </div>
            <div class="col-9">

                {{-- {{dd(!$response) }} --}}
             

               @if ( isset($response) && count($response) === 4)
 
               <h3 class="ff-oswald text-light">{{$response['title']}}</h3>
               <h4 class="ms-3 text-muted ">{{$response['body']}}</h4>
                   
               @else
                     @foreach ( $response as $k => $v)
                         <h3 class=" ff-oswald text-light">{{$v['title']}}</h3>
                         <h4 class="ms-3 text-muted">{{$v['body']}}</h4>
                         
                     @endforeach
               @endif
              
            </div>
        </div>

        
        
    </div>


@endsection