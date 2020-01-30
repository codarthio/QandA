@extends('layouts.mainlayout')

@section('content')




    <div class="container">

        <a href="{{route('question.index')}}">
            <div class="text-danger offset-2">
                Back
            </div>
        </a>
        <div class="row">

           <div class="col-lg-8 offset-2 card shadow-lg p-2">
               <div class="bg-primary p-2 d-flex justify-content-between jumbotron">
                   <div class="text-white  text-center pt-2">
                        <h2>{{$question->question_text}}</h2>
                    </div>
                   <div class="bg-white small text-primary card align-content-center align-items-sm-center m-2 pt-2 col-2">
                       23 Answers
                   </div>
               </div>


               <div class="d-flex flex-md-wrap">
                   @foreach($answers as $answer)
                   <div class="card col-12 mt-3 shadow-sm">
                       <div class="align-text-top text-secondary small mt-1">
                           Answered on {{$answer->created_at}}
                       </div>
                       <div class="blockquote align-content-center">
                           {{$answer->answer_text}}
                       </div>
                   </div>
                   @endforeach
                   <div class="card col-12 shadow-sm mb-2 mt-3 pt-3 justify-content-between">
                       <div class="form-group">
                           <textarea class="form-control" placeholder="Answer this question here..."></textarea>
                       </div>
                       <div class="form-group">
                           <button  class="btn-primary rounded shadow-none">Submit</button>
                       </div>
                   </div>

                </div>




               </div>
        </div>
    </div>
@endsection
