<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Email</td>
          <td>Mobile</td>
          <td>City</td>
          <td colspan="2">Action</td>
         <td><a href="{{ route('students.create') }}" class="btn btn-success">ADD</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->firstname}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->city}}</td>
            <td><a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary">Edit</a></td>
            <td colspan="2">
                <form action="{{ route('students.destroy', $student->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection