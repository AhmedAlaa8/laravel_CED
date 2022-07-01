@include('layouts.header')

@include('layouts.nav')

<div class="container my-5">

    <form method="POST" action="{{ route('user.store') }}">

        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">salary</label>
            <input type="text" class="form-control" id="salary" name="salary">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('layouts.footer')
