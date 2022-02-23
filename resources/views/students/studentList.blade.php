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
          <td>FirstName</td>
          <td>Email</td>
          <td>Mobile</td>
          <td>City</td>
          <td>State</td>
          <td>Country</td>
          <td colspan="2">Action</td>
          <td><a href="{{route('createStudent')}}" class="btn btn-success">ADD</a></td>
        </tr>
    </thead>
      <tbody>
      @foreach($students as $stu)
        <tr>
            <td>{{$stu->id}}</td>
            <td>{{$stu->firstname}}</td>
            <td>{{$stu->email}}</td>
            <td>{{$stu->mobile}}</td>
            <td>{{$stu->city}}</td>
            <td>{{$stu->state}}</td>
            <td>{{$stu->country}}</td>
            <td><a href="{{ route('students.editStudent', $stu->id)}}" class="btn btn-primary">Edit</a></td>
            <td colspan="2">
                <form action="#" method="post">
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