@extends('layouts.main')

@section('content')
    <table>
        @if ($item->exists)

            <div class="blog-post">

            <tr>
                <td><h2 class="blog-post-title">{{$item->title}}</h2></td>
            </tr>

            <tr>
                <td><p class="blog-post-meta text-muted display-6">{{$item->published_at}}</p></td>
            </tr>

            <tr>
                <td><p><u>{{$item->excerpt}}</u></p></td>
            </tr>

            <tr>
                <td><p>{{$item->content_raw}}</p></td>
            </tr>
            </div>

        @endif
    </table>
@endsection
