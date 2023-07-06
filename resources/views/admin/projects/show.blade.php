@extends('admin.layouts.base')

@section('contents')

<h1>{{  $project->title }}</h1>
<p>{{  $project->description }}</p>
<h2>{{  $project->repo }}</h2>

@endsection