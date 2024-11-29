@extends('Admin.layout.template')
@section('body')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">destination List</h4>
            <p class="card-description"> Add class <code>.table</code></p>
            <div class="d-flex justify-content-end mb-3">
                <a class="nav-link d-inline-block btn btn-primary create-new-button" href="{{route('destination.create')}}">+ Create New Project</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sub Title</th>
                            <th>Head Title</th>
                            <th>Image</th>
                            <th>Card Title</th>
                            <th>Price</th>
                            <th>Days Trip</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($destinations as $destination)
                        <tr>
                            <td>{{ $destination->des_sub_title }}</td>
                            <td>{{ $destination->des_head_title }}</td>
                            <td>
                                @if($destination->image)
                                    <img src="{{ asset($destination->image) }}" alt="destination image">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>{{ $destination->des_card_title }}</td>
                            <td>{{ $destination->price }}</td>
                            <td>{{ $destination->days_trip }}</td>
                            <td>
                                <!-- Add action buttons for Edit and Delete -->
                                <a href="{{ route('destination.edit', $destination->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('destination.destroy', $destination->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this destination?');">
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