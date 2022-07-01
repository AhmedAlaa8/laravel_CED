@include('layouts.header')

@include('layouts.nav')

<div class="container  my-5">

    <table class="table table-success table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">title</th>
                <th scope="col">brithday</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $kay => $user)
                <tr>

                    <th scope="row">{{ ++$kay }}</th>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->brithday }}</td>
                    <td>{{ $user->salary }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info"> Edit </a>

                    </td>
                    <td>
                        <form action="{{ route('user.delete') }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@include('layouts.footer')
