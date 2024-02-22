@extends('layouts.print');
@section('contentPrint')
    <div class="container receipt mt-5">
        <div class="text-center py-3">
            <h4 class="py-5">Borrowing Report of Bookify</h4>
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Borrower</th>
                        <th scope="col">Book</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($borrowings as $borrowing)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $borrowing->users->name }}</td>
                        <td>{{ $borrowing->books->title }}</td>
                        <td>{{ $borrowing->start_date }}</td>
                        <td>{{ $borrowing->end_date }}</td>
                        @if ($borrowing->status == '1')
                            <td>Borrowed</td>
                        @elseif ($borrowing->status == '2')
                            <td>Late Return</td>
                        @elseif ($borrowing->status == '0')
                            <td>Returned</td>
                            @else <td>Not Defined</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
