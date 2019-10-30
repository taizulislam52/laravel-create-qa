@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">All Questions</div>

                    <div class="card-body">
                        @forelse($questions as $question)
                            <div class="media mb-1">
                                <div class="media-body">
                                    <h3 class="mt-1">{{$question->title}}</h3>
                                    {{Str::limit($question->body,250)}}
                                </div>
                            </div>
                            @endforeach
                            <hr>
                        <div class="d-flex justify-content-center">
                            {{$questions->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
