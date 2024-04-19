@extends('layout.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register Agence</div> 

                <div class="card-body">
                    <form action="{{ route('registerAgence.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control"  name="nomAgence" placeholder="Enter your name">
                        </div>

                        @error('nomAgence')
                                    <p class="text-danger fs-6 mb-3">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label for="nom">Adress</label>
                            <input type="text" class="form-control" id="nom" name="adress" placeholder="Enter your adress">
                        </div>

                        @error('adress')
                                    <p class="text-danger fs-6 mb-3">{{ $message }}</p>
                        @enderror
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>

                        @error('email')
                                    <p class="text-danger fs-6 mb-3">{{ $message }}</p>
                        @enderror
                        
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Enter your phone number">
                        </div>

                        @error('telephone')
                                    <p class="text-danger fs-6 mb-3">{{ $message }}</p>
                        @enderror
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>

                        @error('password')
                                    <p class="text-danger fs-6 mb-3">{{ $message }}</p>
                        @enderror
                        
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
