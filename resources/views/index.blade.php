@extends('layouts.mainlayout')

@section('content')
    <h1 class="text-center pt-4 display-3 ">Ask a Vegan</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form class="d-flex justify-content-between border-bottom">
                    <div class="form-group col-10">
                        <textarea class="form-control align-content-baseline" placeholder="Test"></textarea>
                    </div>
                    <div class="form-group col-2">
                        <button class="btn btn-primary font-weight-bold align-baseline">Ask Veegs</button>
                    </div>

                </form>


                    <h2 class="bg-primary text-center text-white mt-3 p-3">Questions</h2>

                <div class="d-flex pt-3 border-bottom">
                    <div class="col-10">
                        <h5 class="text-primary font-weight-bolder pb-3">Post Title</h5>

                    </div>
                    <div class="bg-primary text white text-white justify-content-between col-2 m-3">2 Answers</div>
                </div><div class="d-flex pt-3 border-bottom">
                    <div class="col-10">
                        <h5 class="text-primary font-weight-bolder pb-3">Post Title</h5>

                    </div>
                    <div class="bg-primary text white text-white justify-content-between col-2 m-3">2 Answers</div>
                </div><div class="d-flex pt-3 border-bottom">
                    <div class="col-10">
                        <h5 class="text-primary font-weight-bolder pb-3">Post Title</h5>

                    </div>
                    <div class="bg-primary text white text-white justify-content-between col-2 m-3">2 Answers</div>
                </div>

            </div>
        </div>
    </div>
@endsection
