@extends('main')

@section('content')
    <h2>Novo produto</h2>
    <form action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('produtos.form')
    </form>

@endsection
