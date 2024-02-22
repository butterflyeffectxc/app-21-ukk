@extends('layouts.main')
@section('content')
    <div class="background-main">
        <div class="container my-5">
            <div class="d-flex pt-5 justify-content-between">
                <h4 class="p-3 bold">User Collections</h4>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="col">
                        <button class="btn btn-color" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
            <div class=" justify-content-between d-flex vh-auto mt-5 p-0">
                <div class="container">
                    {{-- @foreach ($data as $book) --}}
                    <a href="#" class="card-link">
                        <div class="card border-light mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <div class="justify-content-center d-flex">
                                        <img src="{{ asset('assets/book.png') }}" alt="cover" width="130">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Title</h5>
                                        <p class="card-text"><small class="text-muted">Category</small></p>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- @endforeach --}}
                    </adiv>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    @endsection
