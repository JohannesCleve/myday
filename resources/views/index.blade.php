<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>MyDay</title>
    </head>
    <body>
        <header class="header">
            <p class="day">{{ today()->format('l') }}</p>
            <div class="status">
                <div class="status__completed">
                    <span>{{ count($tasks->where('completed', true)) }}</span>
                    <span class="status__completed--label">completed</span>
                </div>
                <div class="status__divider">
                    <span>/</span>
                </div>
                <div class="status__total">
                    <span>{{ count($tasks) }}</span>
                    <span class="status__completed--label">from total</span>
                </div>
            </div>
            <p class="quote">{{ $quote }}</p>
            <a href="/tasks/delete_all" class="delete_all"><i class="icon-basic-target" title="Delete all tasks"></i></a>
        </header>
        <section class="create__task">
            <form method="POST" action="/tasks">
                @csrf
                <input type="text" name="title" placeholder="Task title" autocomplete="off">
                <select name="category_id">
                    <option value="">-- Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>

                <input type="submit" value="Add Task">
            </form>
        </section>
        <section class="tasks">
            @foreach ($tasks as $task)
                <div class="task__card @if($task->completed) completed @endif">
                    <div class="task__card__side task__card--front">
                        <i class="icon-{{ $task->category->icon }}"></i>
                        <h3>{{ $task->title }}</h3>                
                    </div>
                    <div class="task__card__side task__card--back">
                        <h3>Task Completed</h3>
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" name="completed" @if ($task->completed) checked @endif onchange="this.form.submit()">
                        </form>
                        <form action="/tasks/{{ $task->id }}" method="POST" class="remove">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="icon-basic-trashcan"></i></buttton>
                        </form>
                    </div>
                </div>
            @endforeach
        </section>
    </body>
</html>
