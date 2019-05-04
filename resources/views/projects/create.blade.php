@extends('template')
@section('content')
<div class="container-fluid">
    <div class="container jumbotron">
        <h1>Create a Project</h1>
        <fieldset>
            <legend>Project Specifications</legend>
            <form method="post" action="/projects">
                 {{ csrf_field() }}
                Project Title:<br/>
                <input type="text" name="title" id="title" placeholder="Title of the project" value = '{{ old('title') }}' />
                <br/>
                Project Description:<br/>
                <textarea name="description" id="description" rows="10" cols="60"  placeholder="Project Description write here">
                       {{ old('description') }}
                </textarea>
                <br/>
                <button name="btn1">Create Project</button>


            </form>
        </fieldset>


        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        </div>
    </div>
    @endsection('content')

