@extends('layouts.mainlayout')

@section('content')
@parent



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @if($errors->count() > 1)
                    <h5>Oops, looks like we have a couple of problems...</h5>
                @else
                    <h5>Just one problem...</h5>
                @endif
                @foreach ($errors->all() as $error)
                    <li class="text-decoration-none">{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif
    <div class="container">

        <div>

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
                       {{$question->answers->count()}} Answers
                   </div>
               </div>


               <div class="d-flex flex-md-wrap">
                   @foreach($question->answers as $answer)
                   <div class="card mt-3 shadow-sm d-flex col-12">
                       <div class="col-12">
                           <div class="align-text-top text-secondary small mt-1">
                               {{$answer->created_at->format('d-m-Y H:i')}}
                           </div>
                           <div class="blockquote">
                               {{$answer->answer_text}}
                           </div>
                           @include('layouts.upvotelayout')
                       </div>


                   </div>

                   @endforeach
                   <div class="card col-12 shadow-sm mb-2 mt-3 pt-3 justify-content-between">
                       <form method="post" action="{{route('answer.store', ['question' => $question->id])}}">
                           @csrf
                           <div class="form-group">
                               <input type="text" name="answer_text" class="form-control" placeholder="Answer this question here..."></input>
                           </div>
                           <div class="form-group">
                               <button  class="btn-primary rounded shadow-none">Submit</button>
                           </div>
                       </form>
                   </div>

                </div>




               </div>
        </div>
    </div>
<script >
    function upvote(img) {
        var id = document.getElementById(img).value;
        id.src.toggle('public\\assets\\images\\upvote_icons\\cow_orange.png')
    }

    function downvote(img) {
        var id = document.getElementById(img).value;
        id.src.toggle('public\\assets\\images\\upvote_icons\\burger_blue.png');
    }
</script>
@endsection
