@include('layouts.header')
@include('layouts.nav')

<div class="container my-5">

    <form method="POST" action="{{ route('book.store') }}">

        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@include('layouts.footer')
