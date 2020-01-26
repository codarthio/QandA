@extends('layouts.mainlayout')

@section('content')
    <h1>Ask a Vegan</h1>

    <div class="container">
        <div class="row">
            <form >
                <div class="form-group">
                    <textarea class="form-control" placeholder="Test"></textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-primary">Ask Veegs</button>
                </div>

            </form>
            <h2 class="bg-primary text-white">Questions</h2>
        </div>
    </div>
@endsection
