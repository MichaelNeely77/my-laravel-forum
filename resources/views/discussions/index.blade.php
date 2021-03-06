@extends('layouts.app')

@section('content')


@foreach ($discussions as $discussion)

<div class="card mb-4">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <div>
                <img width="40px" height="40px" style="border-radius: 50%;" src="{{ Gravatar::src($discussion->author->email) }}" alt="">
                <span>
                    <strong class="ml-2">{{$discussion->author->name }}</strong>
                </span>
            </div>
            <div>
            <a href="{{ route('discussions.show', $discussion->slug) }}" class="btn btn-success btn-sm">View</a>
            </div>
        </div>
    </div>

    <div class="card-body" >
        <div class="text-center">
                <strong>{{ $discussion->title }}</strong>
        </div>
        
    </div>
</div>
    
@endforeach
{{ $discussions->appends(['channel' => request()->query('channel') ])->links() }}
@endsection
