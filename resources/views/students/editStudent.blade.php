@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Game Data
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
      <form method="post" action="{{ route('students.update', $student->id ) }}">
          <div class="form-group">
              @csrf
              @method('PUT')
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" name="firstname" value="{{ $student->firstname }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email" value="{{ $student->email }}"/>
          </div>
          <div class="form-group">
              <label for="mobile">Mobile :</label>
              <input type="text" class="form-control" name="mobile" value="{{ $student->mobile }}"/>
          </div>
          <div class="form-group">
              <label for="city">Email :</label>
              <input type="text" class="form-control" name="city" value="{{ $student->city }}"/>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Update Student</button>
      </form>
  </div>
</div>
@endsection