@extends ('app')

@section ('content')
	
	Home Page

    @if(Session::has('message'))
        <div class="alert alert-info">
            {{Session::get('message')}}
        </div>
    @endif



    @foreach ($projects as $project)
        {{ $project }}
    @endforeach
@stop
