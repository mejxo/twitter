{{-- Inluce default layout --}}
@extends('layout.layout')

{{-- This will is start of content section --}}
@section("content")

<div class="row">
    @include('inc.menu')

    <div class="col-6">
        @error('content')
            @include('inc.alert', ["type" => "danger", "message" => $message])
        @enderror
        @if( session()->has('success') )
            @include('inc.alert', ["type" => "success", "message" => session()->get('success')])
        @endif

        <h4> Share yours ideas </h4>
        <div class="row">
            <form action="{{ route("post.store") }}" method="post">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </div>
                <div class="">
                    <button class="btn btn-dark" type="submit"> Share </button>
                </div>
            </form>
        </div>

        <hr>
        @foreach ($posts as $post)
            @include("inc.post-card")
        @endforeach

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
    <div class="col-3">
        @include('inc.search-card')
        @include('inc.follow-box')
    </div>
</div>

{{-- End of content section --}}
@endsection