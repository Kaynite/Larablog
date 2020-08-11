<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Post</title>
</head>
<body>
    <div class="row">
        <div class="container">
            <form method="POST" action="{{route("store")}}">
                @csrf
                <input type="text" placeholder="Post Title" name="title" value="{{ old('title') }}">
                @error('title')
                    <small>{{ $message }}</small>
                @enderror
                <textarea name="body" placeholder="Post Body">{{ old('body') }}</textarea>
                @error('body')
                    <small>{{ $message }}</small>
                @enderror
                <select name="category_id">
                        <option selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>