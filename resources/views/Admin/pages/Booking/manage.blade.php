@extends('Admin.layout.template')
@section('body')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">booking List</h4>
            <p class="card-description"> Add class <code>.table</code></p>
            <div class="d-flex justify-content-end mb-3">
                <a class="nav-link d-inline-block btn btn-primary create-new-button" href="{{route('booking.create')}}">+ Create New Project</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th>Sub Title</th>
                            <th>Head Title</th> --}}
                            <th>Image</th>
                            <th>Book Title</th>
                            <th>Book Description</th>
                            <th>Cart Title</th>
                            <th>All People</th>
                            <th>Cart Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            {{-- <td>{{ $booking->book_sub_title }}</td>
                            <td>{{ $booking->book_head_title }}</td> --}}
                            <td>
                                @if($booking->image)
                                    <img src="{{ asset($booking->image) }}" alt="booking image">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>{{ $booking->book_title }}</td>
                            <td>{{ $booking->book_des }}</td>
                            <td>{{ $booking->card_title }}</td>
                            <td>{{ $booking->all_people }}</td>
                            <td>{{ $booking->cart_des }}</td>
                            <td>
                                <!-- Add action buttons for Edit and Delete -->
                                <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?');">
                                        Delete
                                    </button>
                                </form>
                                
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