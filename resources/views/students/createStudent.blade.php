<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Student Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('student.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name">Firstname :</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="mobile">Mobile :</label>
              <input type="text" class="form-control" name="mobile"/>
          </div>
          <div class="form-group">
              <label for="city">City :</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="state">State :</label>
              <input type="text" class="form-control" name="state"/>
          </div>
          <div class="form-group">
              <label for="country">Country :</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <button type="submit" class="btn btn-primary mt-4">Add Student</button>
      </form>
  </div>
</div>
@endsection