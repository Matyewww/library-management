<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div clas="col-12">
            <table class="table table-hover table-stripped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>ISBN</th>
                <th>Published_Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Books as $book)
            <tr>
                <td>{{ $Book->title }}</td>
                <td>{{ $Book->author}}</td>
                <td>{{ $Book->description }}</td>
                <td>{{ $Book->isbn }}</td>
                <td>{{ $Book->published_year }}</td>
                <td>
                    <a href="{{  url('Books', $Books->isbn)  }}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                    <form action="{{  url('Books', $book->isbn) }}" method="POST">
                        @method('delete')
                        @csrf
                    <button type="submit"class="btn btn-outline-danger btn-sm" onclick="return confirm('Sure kana ba?')">Delete</button>
                 </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>