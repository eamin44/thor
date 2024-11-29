@extends('Admin.layout.template')
@section('body')

<div class="col-md-8 mx-auto grid-margin stretch-card ">
    <div class="card ">
        <div class="card-body mt-5">
            <h4 class="card-title">Booking Section Form</h4>
            <!-- <p class="card-description"> Horizontal form layout </p> -->
            <form class="forms-sample" method="POST" action="{{ route('booking.update', $booking->id) }}" enctype="multipart/form-data">
                @csrf
                <!-- Sub Title -->
                <div class="form-group row">
                    <label for="book_sub_title" class="col-sm-3 col-form-label">Sub Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="book_sub_title" id="book_sub_title" value="{{ $booking->book_sub_title }}" placeholder="Sub Title">
                    </div>
                </div>

                <!-- Head Title -->
                <div class="form-group row">
                    <label for="book_head_title" class="col-sm-3 col-form-label">Head Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="book_head_title" id="book_head_title" value="{{ $booking->book_head_title }}" placeholder="Head Title">
                    </div>
                </div>

                <!-- Image -->
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" class="form-control" id="image">
                        @if($booking->image)
                            <img src="{{ asset($booking->image) }}" alt="booking image" width="100" class="mt-2">
                        @endif
                    </div>
                </div>

                <!-- Book Title -->
                <div class="form-group row">
                    <label for="book_title" class="col-sm-3 col-form-label">Book Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="book_title" id="book_title" value="{{ $booking->book_title }}" placeholder="Book Title">
                    </div>
                </div>

                <!-- Book Description -->
                <div class="form-group row">
                    <label for="book_des" class="col-sm-3 col-form-label">Book Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="book_des" id="book_des" rows="4" placeholder="Book Description">{{ $booking->book_des }}</textarea>
                    </div>
                </div>

                <!-- Card Title -->
                <div class="form-group row">
                    <label for="card_title" class="col-sm-3 col-form-label">Card Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="card_title" id="card_title" value="{{ $booking->card_title }}" placeholder="Card Title">
                    </div>
                </div>

                <!-- All People -->
                <div class="form-group row">
                    <label for="all_people" class="col-sm-3 col-form-label">All People</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="all_people" id="all_people" value="{{ $booking->all_people }}" placeholder="All People">
                    </div>
                </div>

                <!-- Cart Description -->
                <div class="form-group row">
                    <label for="cart_des" class="col-sm-3 col-form-label">Cart Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="cart_des" id="cart_des" rows="4" placeholder="Cart Description">{{ $booking->cart_des }}</textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection
