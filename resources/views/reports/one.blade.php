@extends('layouts.print')
@section('contentPrint')
    <div class="container receipt mt-5">
        <div class="text-center py-3">
            <h4>Receiptify</h4>
        </div>
        <div class="d-flex justify-content-between">
            <p>Order #001 For</p>
            <p>{{ $borrowing->users->name }}</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Now Date</p>
            <p>{{ $borrowing->start_date }}</p>
        </div>
        <hr class="hr">
        <table class="table table-borderless mt-4 text-end">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book</th>
                    <th style="text-align:end">Qty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $borrowing->books->title }}</td>
                    <td style="text-align:end">{{ $borrowing->quantity }}</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr">
        <p>Bookholder: {{ $borrowing->users->name }}</p>
        <p>Booktify: Auth Name</p>
        <p>Borrow Date: {{ $borrowing->start_date }}</p>
        <p>Return Date: {{ $borrowing->end_date }}</p>
        {{-- </div> --}}
    </div>
@endsection
