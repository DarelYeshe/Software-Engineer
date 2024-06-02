<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill page</title>
</head>
<body>
    <form class="mx-3 my-3" method="POST" action="{{ route('skills.store') }}" action="/skill">
        @csrf
        <div class="form-group">
            <label for="selected_skills">Select Skills:</label>
            <select class="form-control" id="selected_skills" name="selected_skills[]" multiple>
                @foreach ($skills as $skill)
                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>    
</body>
</html>