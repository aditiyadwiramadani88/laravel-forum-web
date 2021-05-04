@extends('layout.nav')

@section('conten')

<section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="main">
                        <input id="tab1" type="radio" name="tabs" checked>
                    
                        @foreach($row as $data)
                        <section id="content1" class="your_question">
                        <p class="id_q">{{$data->id}}</p>
                    
                            <div class="question-type2033">

                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="left-user12923 left-user12923-repeat">
                                            <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="right-description893">
                                            <div id="que-hedder2983">
                                                <h3>{{$data->question_name}}</h3> </div>
                                            <div class="ques-details10018">
                                                <p class="content">{{$data->content}}</p>
                                            </div>
                                    </div>
                          
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endforeach
                    </div>
                </div>
    </section>
 
        <div class="container">
            <div class="row">
            <div>
                       <nav aria-label="Page navigation">
                        <ul class="pagination">
                        @if($row->previousPageUrl())
                            <li class="page-item"><a class="page-link" href="{{$row->previousPageUrl()}}">Previous</a></li>
                        @else
                        <li class="page-item disabled"><a class="page-link" href="{{$row->previousPageUrl()}}">Previous</a></li>
                        @endif
                        @if($row->nextPageUrl())
                            <li class="page-item"><a class="page-link" href="{{$row->nextPageUrl()}}">Next</a></li>
                        @else
                        <li class="page-item disabled"><a class="page-link" href="{{$row->nextPageUrl()}}">Next</a></li>
                        @endif
                            
                        </nav>
                       </div>
                    </div>
                </div>
            </div>
        </div>

@endsection