<div>
    <form method="POST" action="/store">
        @csrf
        <input name="name" type="text">
        <input name="description" type="text">
        <button type="submit">add</button>
    </form>
    @foreach ($tasks as $task)
        <div>
            <p>
                name : {{$task->name}}
            </p>
            <p>
                description : {{$task->name}}
            </p>
            <hr>    
        </div>
    @endforeach
</div>