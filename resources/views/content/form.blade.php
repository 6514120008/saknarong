<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Content</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <h1>Create Content</h1>

        <form action="{{ url('/content') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="topic">Topic</label>
                <input type="text" class="form-control" id="topic" name="topic"
                value="{{ old('topic', $contents->topic) }}">

                @error('topic')
                    <div class="invalid-feedback d-block">{{ $errors->first('topic') }}</div>
                @enderror

            </div>

            <div class="mb+3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>

                @error('description')
                    <div class="invalid-feedback d-block">{{ $errors->first('description') }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags">
                @error('tags')
                    <div class="invalid-feedback d-block">{{ $errors->first('tags') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="links">links</label>
                <input type="links" class="form-control" id="links" name="links">
                @error('links')
                    <div class="invalid-feedback d-block">{{ $errors->first('links') }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-primay">Save</button>
            <a href="{{url('/content')}}" role="button" class="btn btn-sm btn-danger">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>
