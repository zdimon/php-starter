<form action="{{ route('pages.update',$page->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div>
        <strong>title:</strong>
        <input type="text" name="title" value="{{ $page->title }}">
    </div>

    <div>
        <strong>content:</strong>
        <textarea name="content">
           {{ $page->content }}
        </textarea>
    </div>

    <div>
        <strong>is_active:</strong>
        <input type="checkbox" name="is_active" value="1" @if($page->is_active) checked @endif /> 
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  
</form>