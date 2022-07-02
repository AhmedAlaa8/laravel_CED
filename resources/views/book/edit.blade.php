@include('layouts.header')
@include('layouts.nav')

<div class="container my-5">

    <form method="POST" action="{{ route('book.update') }}">

        @csrf
        @method('PUT')

        <input type="hidden" value="{{ $book->id }}" name="id">
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" value="{{ $book->name }}" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" value="{{ $book->title }}" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" value="{{ $book->description }}" id="description"
                name="description">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@include('layouts.footer')
