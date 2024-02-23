@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-header mb-2">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">
                        Borrowing List
                    </h5>
                    <div class="ml-auto">
                        <a href="/borrowings/create" class="btn btn-primary add-button"><span>Add Data</span></a>
                        <a href="/reports/generate/all" class="btn btn-warning back-button"><span>Generate Report</span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Borrower</th>
                                <th>Book</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrowings as $borrowing)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $borrowing->users->name }}</td>
                                    {{-- <td>{{ dd($borrowing->books->title) }}</td> --}}
                                    <td>{{ $borrowing->books->title ?? '' }}</td>
                                    <td>{{ $borrowing->start_date }}</td>
                                    <td>{{ $borrowing->end_date }}</td>
                                    <td>    @if ($borrowing->status == 0)
                                        <button type="submit" class="btn btn-secondary disabled">Returned</button>
                                    @elseif($borrowing->status == 2)
                                        <button type="submit" class="btn btn-warning disabled">Late Return</button>
                                        @elseif($borrowing->status == 1)
                                        <form action="/borrowings/edit/{{ $borrowing->id }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-primary">Return</button>
                                        </form>
                                        @else 
                                        <button type="submit" class="btn btn-danger disabled">Not Defined</button>
                                    @endif</td>
                                    <td>
                                        <div class="btn-group mr-2" role="group" aria-label="Action Button">
                                            {{-- <a href="/borrowings/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a> --}}
                                            <a href="/report/generate/{{ $borrowing->id }}" class="btn btn-success"><i class="bi bi-cloud-download"></i></a>
                                        
                                            {{-- <a href="/borrowings/edit" class="btn btn-warning"><i
                                                    class="bi bi-pencil-square"></i></a> --}}
                                            {{-- <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button> --}}
                                        </div>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
