@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card px-3">
            <div class="card-header mb-2">
                <br>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="{{ asset('assets/book.png') }}" alt="" width="200">
                        </div>
                        <div class="col-12 col-md-8">
                            <h4>{{ $book->title }}</h4>
                            <div class="table-responsive">
                                <table class="table table-hover p-0 m-0">
                                    <tbody>
                                        <tr>
                                            <th class="pl-0">ISBN</th>
                                            <td>{{ $book->isbn }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Author</th>
                                            <td>{{ $book->author }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Publisher</th>
                                            <td>{{ $book->publisher }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Published</th>
                                            <td>{{ $book->published }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Language</th>
                                            <td>{{ $book->language }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Availability</th>
                                            <td>{{ $book->availability }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0">Category</th>
                                            <td>@foreach ($book->categories as $category)
                                                {{ $category->name }},
                                            @endforeach</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless p-0 m-0">
                                    <thead>
                                        <tr>
                                            <th class="pl-0">Synopsis:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-0">
                                                <td><p>{{$book->description ? $book->description : "This Book doesn't have description"}}</p></td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/books" class="btn btn-warning back-button"><span>Back</span></a>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
           
    </script> --}}
@endsection
