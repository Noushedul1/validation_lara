@extends('master')
@section('title')
 Form   
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Form Validation</h4>
                </div>
                <div class="card-body">
                    <div>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <form action="{{ route('validation') }}" method="POST">
                        @csrf
                        <div class="row my-2">
                            <div class="col-md-3">
                                <label for="" class="form-control">Name: </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-3">
                                <label for="" class="form-control">Email: </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>   
                                @enderror
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-3">
                                <label for="" class="form-control">Password: </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-3">
                                
                            </div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection