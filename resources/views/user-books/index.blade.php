@extends('layouts.main')
@section('content')
    <div class="">
        <div class="container px-0 pt-5 d-flex justify-content-between">
            <h4 class="p-3 bold">Book List</h4>
            <div class="form-row py-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="col">
                    <button class="btn btn-color" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
        <div class="background-dashboard justify-content-between d-flex vh-auto mt-5 ">
            <div class="container py-2">
                <div class="row justify-content-center">
                    {{-- @foreach ($data as $book) --}}
                    <div class="col-6 col-md-3 pb-5">
                        <img src="{{ asset('assets/book.png') }}" alt="cover" width="130">
                        <h5 class="pt-2">title</h5>
                        <small>Category</small>
                        <div class="justify-content-center d-flex">
                            <a type="button" href="/user/books/detail" class="btn btn-color btn-sm">Detail</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('assets/book.png') }}" alt="cover" width="130">
                        <h5 class="pt-2">title</h5>
                        <small>Category</small>
                        <div class="justify-content-center d-flex">
                            <a type="button" href="/user/books/detail" class="btn btn-color btn-sm">Detail</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('assets/book.png') }}" alt="cover" width="130">
                        <h5 class="pt-2">title</h5>
                        <small>Category</small>
                        <div class="justify-content-center d-flex">
                            <a type="button" href="/user/books/detail" class="btn btn-color btn-sm">Detail</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('assets/book.png') }}" alt="cover" width="130">
                        <h5 class="pt-2">title</h5>
                        <small>Category</small>
                        <div class="justify-content-center d-flex">
                            <a type="button" href="/user/books/detail" class="btn btn-color btn-sm">Detail</a>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                    </adiv>
                </div>
            </div>
        </div>
    @endsection
