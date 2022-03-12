@extends('layouts.app')
    @section('content')

    @php
        use App\Http\Controllers\PostsController;
        use App\Http\Controllers\PagesController;
    @endphp


            
        <!--MAIN-->
        <div class="">
                
                @if(count($posts)>=1)
                    @foreach($posts as $post)
                            <div class="w3-center">

                                    <a href="/posts/{{$post->id}}"><b class="post-topic w3-center"><u>@php echo strToUpper("$post->title"); @endphp</u></b></a>
                                    <br />
                                    
                                    <i class="">{{$post->content}}</i>
                            </div>
                            <hr />
                    @endforeach
                @else
                        <div class="w3-center"><b>no post created</b></div>
                @endif

                <div style="">
                    <div class="border-center">
                    </div>
                </div>


        </div>
        
        

    @endsection