@include('layouts.header')

@include('layouts.nav')


<div class="container my-5">

    <form method="POST" action="{{ route('user.updite') }}">

        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name">
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">salary</label>
            <input type="text" class="form-control" id="salary" value="{{ $user->salary }}" name="salary">
        </div>
        <div class="mb-3">
            <label for="brithday" class="form-label">birthday</label>
            <input type="date" class="form-control" id="brithday" value="{{ $user->brithday }}" name="brithday">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('layouts.footer')
