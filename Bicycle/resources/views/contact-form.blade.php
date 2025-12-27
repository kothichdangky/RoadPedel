@extends('layouts.nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                @session('success')
                    <div class="alert alert-success" role="alert">
                        {{ $value }}
                    </div>
                @endsession
                {{--  --}}
                <form action="{{ route('contact.sendEnquiry') }}" method="POST">
                    @csrf <!-- Bảo vệ form bằng CSRF token -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Name">
                        @error('name')
                            <p class="text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Email">
                        @error('email')
                            <p class="text-danger"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Enter Your Message"></textarea>
                        @error('message')
                            <p class="text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
