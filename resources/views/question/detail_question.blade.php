@extends('layout.nav')

@section('conten')

@php 
use App\Models\User;
$user = User::where('email', $row->user)->first()->name;
try { 
    $user2 = auth()->user()->name; 

}catch(Exception $e) { 
    $user2 = null;
}
@endphp 

    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="post-details">
                        <div class="details-header923">
                            <div class="row">
                   
                        <div class="author-img202l"> <img src="{{url('image/images.png')}}" alt="image">
                            <div class="au-image-overlay text-center"> <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a> </div>
                        </div> 
                                <div class="col-md-8">
                                <h5>{{$user}}</h5>
                                    <div class="post-title-left129">
                                        <h3>{{$row->question_name}}</h3> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-details-info1982">
                            <p>{{$row->content}}</p>
                            <hr>
                          
                        </div>
                    </div>

                    <h2>Answere</h2>
  
                    @foreach($ans as $data)           
                    @if($data->user == $user2)
                    <div class="answere_12" onclick="action_answere('{{$data->id}}','{{$data->contet}}', '{{$data->question}}')">

                    <div class="author-details8392" style="padding-top: 50px; padding-bottom: 60px;">
                        <div class="author-img202l mt-5">
                         <img src="{{url('image/images.png')}}" alt="image">
                        <hr>
                        </div>
                         <span class="author-deatila04re">
                   <h5 class="answere_user">{{$data->user}}</h5>
                    <p class="content_12">{{$data->contet}}</p>
                </span>                 
                </div>
                </div>

            @else
            <div class="author-details8392 det_q" style="padding-top: 50px; padding-bottom: 60px;">
                        <div class="author-img202l mt-5"> <img src="{{url('image/images.png')}}" alt="image">
                        <hr>
                        </div> <span class="author-deatila04re">
                   <h5 class="answere_12">{{$data->user}}</h5>
                    <p>{{$data->contet}}</p>
                </span> 
                </div>
            
            @endif 
            
                @endforeach
                    <div class="comment289-box">
                        <h3>Leave A Reply</h3>
                        <hr>
                        <form method="POST" action="{{url('new_answere')}}">
                        @csrf
                            <div class="post9320-box">
                            <input type="hidden" name="question" value="{{$row->id}}">
                                <input type="text" id="content" name="contet" class="comment-input219882" placeholder="Enter Your Post">
                                 </div>
                            <button type="button mb-4 mt-4" class="pos393-submit">Post Your Answer</button>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </section>
    @endsection
@section('conten')