@extends('layouts.print')
@section('contentPrint')
    <div class="container receipt mt-5">
        <div class="text-center py-3">
            <h4>Receiptify</h4>
        </div>
        <div class="d-flex justify-content-between">
            <p>Order #001 For</p>
            <p>Name</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Now Date</p>
            <p>Start Date</p>
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
                    <td>Mark</td>
                    <td style="text-align:end">1</td>
                </tr>
            </tbody>
        </table>
        <hr class="hr">
        <p>Bookholder: Name</p>
        <p>Booktify: Auth Name</p>
        <p>Borrow Date: Start Date</p>
        <p>Return Date: End Date</p>
        {{-- </div> --}}
    </div>
@endsection
