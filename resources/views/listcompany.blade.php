@extends('layouts.app')

@section('content')
    @foreach($companies as $c)
        <ul class="list-group p-2">
            <li class="list-group-item">{{ $c->company_nm }}</li>
            <li class="list-group-item">{{ $c->tax_cd }}</li>
            <li class="list-group-item">{{ $c->company_addr }}</li>
            <li class="list-group-item">{{ $c->city }}</li>
            <li class="list-group-item">{{ $c->public_dt }}</li>
            <li class="list-group-item">{{ $c->desc }}</li>
        </ul>
    @endforeach
@endsection