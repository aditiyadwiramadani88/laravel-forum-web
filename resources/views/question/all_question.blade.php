@extends('layout.nav')
@section('conten')

<section class="welcome-part-one">
        <div class="container">
            <div class="welcome-demop102 text-center">
                <h2>Welcome To</h2>
                <div class="button0239-item">
                    <a href="#">
                        <button type="button" class="aboutus022">About Us</button>
                    </a>
                    <a href="#">
                        <button type="button" class="join92">Join Now</button>
                    </a>
                </div>
                <div class="form-style8292">
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-pencil-square" aria-hidden="true"></i></span>
                        <input type="text" class="form-control form-control8392" placeholder="Ask any question and you be sure find your answer ?"> <span class="input-group-addon"><a href="#">Ask Now</a></span> </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="main">
                        <input id="tab1" type="radio" name="tabs" checked>
                    
                        @foreach($row as $data)
                        <section id="content1">
                            <div class="question-type2033">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="left-user12923 left-user12923-repeat">
                                            <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                                    </div>

                                  
                                    <div class="col-md-9">
                                        <div class="right-description893">
                                            <div id="que-hedder2983">
                                                <h3><a href="{{url('detail_question/'. $data->id)}}" target="_blank">{{$data->question_name}}</a></h3> </div>
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
                <aside class="col-md-3 sidebar97239">
                    <div class="tags-part2398">
                        <h4>Tags</h4>
                        <ul>
                            <li><a href="#">analytics</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Developer</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Interview</a></li>
                            <li><a href="#">Programmer</a></li>
                            <li><a href="#">Salary</a></li>
                            <li><a href="#">University</a></li>
                            <li><a href="#">Employee</a></li>
                        </ul>
                    </div>
                </aside>
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