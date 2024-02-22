@extends('layouts.admin')
@section('contentTwo')
    <div class="page-heading">
        <h3>Detail Category</h3>
    </div>
    <div class="page-content">
        <div class="card px-3">
            <div class="card-header mb-2">
                <br>
            </div>
            <div class="card-body">
                <div class="container book-detail">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="{{ asset('assets/book-lover.svg') }}" alt="" width="200" class="pb-3">
                        </div>
                        <div class="col-12 col-md-8">
                            <h4>Title</h4>
                            <div class="table-responsive">
                                <table class="table table-hover p-0 m-0">
                                    <tbody>
                                        <tr>
                                            <th class="text-bold-500">Name</th>
                                            <td>{{$category->name}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless p-0 m-0">
                                    <thead>
                                        <tr>
                                            <th>Description:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>{{$category->description ? $category->description : "This Category doesn't have description"}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/categories" class="btn btn-warning back-button"><span>Back</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- DB::unprepared('
CREATE TRIGGER min_stock AFTER INSERT ON borrowing_details
FOR EACH ROW
BEGIN
    
    IF NEW.status = 1 THEN
        UPDATE books SET availability = availability - NEW.quantity WHERE id_book = NEW.id_book;
    
    END IF;
END;
');
DB::unprepared('
CREATE TRIGGER add_stock AFTER UPDATE ON borrowing_details
FOR EACH ROW
BEGIN
    
    IF NEW.status = 0 AND OLD.status != 0 THEN
        UPDATE books SET availability = availability + NEW.quantity WHERE id_book = NEW.id_book;
    
    END IF;
END;
'); --}}