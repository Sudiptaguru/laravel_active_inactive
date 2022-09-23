<html>

<head>
    <title>Edit</title>
</head>

<body>
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <select class="form-control" name="status" required>
                    <option value="">--Select--</option>
                    <option value="1" {{ $user->status==1 ? 'selected="selected"' : '' }}>Active</option>
                    <option value="0" {{ $user->status==0 ? 'selected="selected"' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>