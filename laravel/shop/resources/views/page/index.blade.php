<ul>
    @foreach ($pages as $page)
        <li>
            <a href="{{ route('pages.show',$page->id) }}">{{ $page->title }}</a> 
            <a href="{{ route('pages.edit',$page->id) }}"> Edit </a> 
            <form action="{{ route('pages.destroy',$page->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button>Delete Page</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('pages.create') }}"> Create </a>