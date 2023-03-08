@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{  session('id') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <p>OTP SENT TO EMAIL</p>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Enter OTP</div>
                    
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="code" class="col-md-4 col-form-label text-md-end"></label>
                      
                                                <div class="col-md-13">
                                                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="code">
                                                    <input id="id" type="hidden" class="form-control @error('code') is-invalid @enderror" name="id" value={{  $id = session()->getId() }}>
                                                   
                    
                                                    @error('code')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                    
                    
                                            <div class="row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Submit
                                                    </button>
                 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
