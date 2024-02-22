@extends('layouts.main')
@section('content')
    <div class="my-font">
        <div class="container">
            {{-- heading --}}
            <div class="row my-5">
                <div class="col-12 col-md-7 left align-items-center pt-5">
                    <h3 class="extra-bold">Ready to Embark on a Reading Adventure?</h3>
                    <p>Browse through our extensive collection and find hidden gems! Become a part of our vibrant reading
                        community. Share your thoughts, discuss books, and connect with fellow readers!</p>
                    <a href="/login" class="text-link">Explore Now <i class="bi bi-arrow-up-right-circle"></i></a>
                </div>
                <div class="col-12 col-md-5 right justify-content-end d-flex">
                    <img src="{{ asset('assets/right.svg') }}" alt="" width="400" class="heading-img">
                </div>
            </div>
            {{-- Feature --}}
        </div>
        <div class="feature">
            <div class="bg-purple">
                <div class="text-center pt-5">
                    <h4 class="bold">Explore a World of Books</h4>
                </div>
                <div class="container">
                    <div class="row py-5">
                        <div class="col-12 col-md-4">
                            <img src="{{ asset('assets/pic_1.svg') }}" alt="feature" width="245" class="feature-img">
                        </div>
                        <div class="col-12 col-md-8 pt-4 feature-padding">
                            <div class="container">
                                <h5 class="bold pb-3">See Our Extensive <u>Book</u> Collection!</h5>
                                <p>Dive into a vast collection of books covering every genre imaginable. Whether you're into
                                    fiction,
                                    non-fiction, mystery, or romance, we've got something for everyone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-pink">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-12 col-md-8 pt-5 ">
                            <div class="contai ner">
                                <h5 class="bold pb-3">Browse by <u>Categories</u>!</h5>
                                <p>Navigate effortlessly through our library with a diverse range of categories. From
                                    classics
                                    to
                                    contemporary, our carefully curated categories make finding your next favorite book a
                                    breeze.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 justify-content-end d-flex">
                            <img src="{{ asset('assets/pic_2.svg') }}" alt="feature" width="270" class="feature-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-purple">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-12 col-md-4">
                            <img src="{{ asset('assets/pic_3.svg') }}" alt="feature" width="270" class="feature-img">
                        </div>
                        <div class="col-12 col-md-8 pt-3">
                            <div class="container">
                                <h5 class="bold pb-3"><u>Share</u> Your Thoughts!</h5>
                                <p>Dive into a vast collection of books covering every genre imaginable. Whether you're into
                                    fiction,
                                    non-fiction, mystery, or romance, we've got something for everyone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- review --}}
        <div class="review">
            <div class="container my-5">
                <div class="text-center">
                    <h4 class="bold">Review</h4>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/book.png') }}" alt="" width="120" class="book-img">
                        </div>
                    </div>
                    {{-- hidden --}}
                    <div class="col-md-1 hidden">
                        <div class="vl"></div>
                    </div>
                    <div class="col-12 col-md-7 pt-4">
                        <h4 class="extra-bold">User 1</h4>
                        <h5 class="bold">book</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, assumenda odit? Harum repellendus
                            iure
                            fugiat omnis vel? Est in cupiditate voluptatibus modi hic omnis, illum sapiente, a, beatae
                            commodi
                            officiis.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Register Persuasif --}}
        <div class="bg-dark-purple text-center pb-3">
            <div class="container pt-5">
                <h4 class="pt-5 bold">Join Our Community</h4>
                <p>Don’t have an account yet? <span class="text-white">Register Now</span></p>
                <button class="btn btn-color-light px-4">Register</button>
            </div>
        </div>
    </div>
@endsection
