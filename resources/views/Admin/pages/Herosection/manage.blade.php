@extends('Admin.layout.template')
@section('body')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Hero List</h4>
            <p class="card-description">Add class <code>.table</code></p>
            <div class="d-flex justify-content-end mb-3">
                <a class="nav-link d-inline-block btn btn-primary create-new-button" href="{{ route('hero.create') }}">+ Create New Hero</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Subtitle</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Button Text</th>
                            <th>Button Url</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($herosections as $hero)
                        <tr>
                            <td>{{ Str::limit($hero->subtitle, 12, '...') }}</td>
                            <td>{{ Str::limit($hero->title, 12, '...') }}</td>
                            <td>{{ Str::limit($hero->description, 20, '...') }}</td>
                            <td>
                                @if($hero->image)
                                    <img class="hero-image" src="{{ asset($hero->image) }}" alt="Hero image">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>{{ Str::limit($hero->btn_txt, 30, '...') }}</td>
                            <td>{{ Str::limit($hero->btn_url, 50, '...') }}</td>
                            
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('hero.edit', $hero->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <!-- Delete Form -->
                                <form action="{{ route('hero.destroy', $hero->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this hero?');">
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
