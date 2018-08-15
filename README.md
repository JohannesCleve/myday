# MyDay

## Description
Have an overview of the important things you want to be done by the end of the day.

## Features
- Overview of tasks
- Create a task
    - set title
    - set category (only important for the icon and ordering)
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
- View and order tasks to see what still needs to be done

