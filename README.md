# MyDay

## Description
Have an overview of the important things you want to be done by the end of the day.

## Features
- Overview of tasks
- Create a task
    - set title
    - set category
- Delete a task
- Mark a task as done
- Start a new day (delete all tasks)

## Models and relations
- Task
    - title: string
    - completed: boolean
    - category_id: unsigned integer
- Categorie
    - title: string
    - icon: string

## Flow
- Start the day by removing all task from the previous day
- Create all tasks you want to be done by the end of the day
- Check tasks off that are done


## Design
- clean, spacious modern design
- big header with
    -  an overview of completed vs uncompleted tasks
    -  day of the week
    -  inspirational quote
-  action bar
    -  create a new task
- the main content, a flexbox with white boxes with a soft shadow and green text and icon

## Categories
- coding: basic-pencil-ruler
- workout: basic-accelerator
- guitar: music-note-multiple
- home: basic-home
- other: basic-signs
