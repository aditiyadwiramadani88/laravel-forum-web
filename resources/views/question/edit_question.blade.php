@extends('layout.nav')
@section('conten')
    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="">
                <div class="ask-question-input-part032">
                      <h4>Edit Question</h4>
                 <hr>
                    <form method="POST">
                    @csrf
                        <div class="question-title39">
                            <span class="form-description433">Question-Title* </span>
                            <input type="text"  class="question-ttile32" name="question_name" placeholder="Write Your Question Title" value="{{$row->question_name}}">
                            @error('question_name')
                            <small class="ml-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>       
                        <div class="question-title39">
                            <span class="form-description433">Tag* </span>
                            <input type="text" class="question-ttile32" name="tag" placeholder="Your Tag" value="{{$row->tag}}">
                        </div>       
                        <div class="post9320-box">
                                <textarea  name="content" class="comment-input219882">{{$row->content}}</textarea> 
                                @error('content')
                            <small class="ml-2 text-danger">{{ $message }}</small>
                            @enderror
                                </div>     
                 <div class="publish-button2389">
                    <button type="submit" class="publis1291">Publish your </button>
                </div>
</form>
                </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection



    
  