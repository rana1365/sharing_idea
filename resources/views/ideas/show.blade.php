@extends('layout.app')

@section('content')
    <div class="row">
        @include('layout.sidebar')
        <div class="col-6">
            @include('shared.success-message')

                <div class="mt-3">
                    @include('ideas.shared.idea-card')
                </div>
        </div>

        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
