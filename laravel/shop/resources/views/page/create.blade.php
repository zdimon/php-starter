<form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div>
        <strong>title:</strong>
        <input type="text" name="title">
    </div>

    <div>
        <strong>content:</strong>
        <textarea name="content">

        </textarea>
    </div>

    <div>
        <strong>is_active:</strong>
        <input type="checkbox" name="is_active" value="1" /> 
    </div>

    <div>
        <strong>file:</strong>
        <input type="file" name="image" /> 
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
  
</form>