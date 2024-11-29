@extends('Admin.layout.template')
@section('body')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Service List</h4>
            <p class="card-description"> Add class <code>.table</code></p>
            <div class="d-flex justify-content-end mb-3">
                <a class="nav-link d-inline-block btn btn-primary create-new-button" href="{{route('service.create')}}">+ Create New Project</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Service Name</th>
                            <th>Service Title</th>
                            <th>Image</th>
                            <th>Card Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{ $service->ser_name }}</td>
                            <td>{{ $service->ser_title }}</td>
                            <td>
                                @if($service->ser_img)
                                    <img src="{{ asset($service->ser_img) }}" alt="service image">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>{{ $service->ser_card_title }}</td>
                            <td>{{ $service->ser_card_des }}</td>
                            <td>
                                <!-- Add action buttons for Edit and Delete -->
                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">
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