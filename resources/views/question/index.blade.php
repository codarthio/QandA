@extends('layouts.mainlayout')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-2 card shadow-lg p-3">

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
                <form class="d-flex justify-content-between border-bottom"  enctype="multipart/form-data" method="post" action="{{route('question.store')}}">
                    @csrf
                    <div class="form-group col-10">
                        <input type="text" name="question_text" value="{{old('question_text')}}" class="input-group" placeholder="{{ucfirst(strtolower(trim($placeholder, '["]')))}}"/>
                    </div>
                    <div class="form-group col-2">
                        <button class="btn btn-primary font-weight-bold text-nowrap">Ask Veegs</button>
                    </div>

                </form>


                    <h2 class="bg-primary text-center text-white mt-3 p-3 ">Questions</h2>
                @foreach($questions as $question)


                    <div class="d-flex pt-3 border-bottom">
                        <div class="col-10">
                            <a href="/Question/{{$question->id}}" class="card-link stretched-link text-decoration-none text-primary font-weight-bolder pb-3">
                                {{$question->question_text}}
                            </a>

                        </div>
                        <div class="bg-primary text white text-white justify-content-between col-2 m-3">2 Answers</div>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
@endsection
