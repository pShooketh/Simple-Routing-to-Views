<h1>Tasks</h1>
<a href="{{ route('tasks.create') }}">Create New Task</a>
<ul>
    @foreach ($tasks as $task)
        <li>
            <strong>{{ $task->title }}</strong>
            <p>{{ $task->description }}</p>
            <p>Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
            <a href="{{ route('tasks.show', $task->id) }}">View</a> |
            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
