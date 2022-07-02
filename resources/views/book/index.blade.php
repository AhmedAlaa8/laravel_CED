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
                <th scope="col">description</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($books as $kay => $book)
                <tr>

                    <th scope="row">{{ ++$kay }}</th>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->created_at }}</td>
                    <td>{{ $book->updated_at }}</td>
                    <td>
                        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-info"> Edit </a>

                    </td>
                    <td>
                        <form action="{{ route('book.delete') }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $book->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@include('layouts.footer')
