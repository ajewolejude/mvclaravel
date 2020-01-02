@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 col-md-offset-2 col-lg-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Companies</h3>
            <a class="btn btn-primary btn-sm" href="/companies/create">Create new</a>
        </div>
        <br>
        <div class="panel-body">
            <ul class="list-group">
                @foreach($companies as $company)
                <li class="list-group-item" ><a href="/companies/{{$company->id}}">{{$company->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection