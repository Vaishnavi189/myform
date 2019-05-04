@extends('template')
@section('content')
<main role="main">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <br/>
                <h1>Project Specifications</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat a, totam quidem sed tempore voluptas aut deleniti sit illo assumenda omnis aliquid minima, debitis ad. Praesentium saepe qui nostrum voluptatibus?
                </p>

            </div>
            <div class="col-md-6">
                    <h1>Edit a Project</h1>
                    <fieldset>
                        <legend>Project Specifications</legend>
                        <form method="post" action="/projects/{{ $project->id }}">
                            {{ method_field('PATCH') }}
                             {{ csrf_field() }}
                            Project Title:<br/>
                            <input type="text" name="title" value="{{ $project->title }}" placeholder="Title of the project"/>
                            <br/>
                            Project Description:<br/>
                            <textarea name="description" rows="10" cols="60" placeholder="Project Description write here">
                                {{ $project->description }}
                            </textarea>
                            <br/>
                            <button name="btn1">Update Project</button>


                        </form>

                    </fieldset>
            </div>
        </div>

    </div>
</main>
@endsection('content')
