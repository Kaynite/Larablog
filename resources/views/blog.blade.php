@extends('layouts.main')

@section('posts')
    @include('components.posts')
@endsection

@section('widgets')
    @include('widgets.popularposts')
    @include('widgets.instagram')
@endsection

@section('pageHeader')
    @include('includes.hotPosts')
@endsection


@section('scripts')
<script>
    var pageNo = 2;
    $("#getMorePosts").click(function() {
        $.ajax({
            url:"{{ route('ajax.posts') }}" + '?page=' + pageNo,
            type:"GET",
            contentType: false,
            processData: false,
            success:function(dataBack) {
                pageNo++
                $("#blogPosts").append(dataBack);
            }, error: function (xhr, status, error) {
                $("#getMorePosts").prop('disabled', true);
            }
        })
    })
</script>
@endsection