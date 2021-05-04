
@include('layout.head')

@php 
use Illuminate\Support\Facades\Auth;
@endphp 
<div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-menu-left-side239">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</a></li>
                            <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i>Support</a></li>
                            @if(Auth::check())
                            <li><a href="{{url('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                            @else
                            <li><a href="{{url('login')}}"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navbar-serch-right-side">
                        <form class="navbar-form" role="search" action="{{url('search')}}">
                            <div class="input-group add-on">
                                <input class="form-control form-control222" placeholder="Search" name="search" name="srch-term" id="srch-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-default2913" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu-bottom932">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="#"><img src="{{url('image/logo.png')}}" alt="Logo"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"> </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="/" target="_blank">Ask Question</a></li>
                        </li>
                        <li><a href="contact_us" target="_blank">Contact us</a></li>
                        <li><a href="{{url('your_question')}}" target="_blank">Your Question</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
<section class="header-descriptin329">
                       <div class="container">
                       <h3>Ask Question</h3>
                        <ol class="breadcrumb breadcrumb839">
  <li><a href="#">Home</a></li>
  <li class="active">Ask Question</li>
</ol>
    </div>
</section>

@section('conten')
@show

 
<div class="footer-search">
        <div class="container">
            <div class="row">
                <div id="custom-search-input">
                    <div class="input-group col-md-12"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <input type="text" class="  search-query form-control user-control30" placeholder="Search here...." /> <span class="input-group-btn">
    <button class="btn btn-danger" type="button">
        <span class=" glyphicon glyphicon-search"></span> </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="footer-social">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Copyright 2021 Ask me | <strong>Aditiya</strong></p>
            </div>
             <div class="col-md-6">
              <div class="social-right2389">
               <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
               <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
               <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
               <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
               <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
               <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
               <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                 </div>
            </div>
        </div>
    </div>
</section>

@include('layout.fot')