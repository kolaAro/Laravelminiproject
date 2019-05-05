@extends('todo.create')

@section('editId',$item->id)

@section('editTitle',$item->title)
@section('editBody',$item->body)

@section('editMethod')
      {{method_field('PUT')}}
@endsection
