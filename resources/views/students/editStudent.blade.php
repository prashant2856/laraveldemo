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
      <form method="post" action="{{ route('students.update', $stu->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">FirstName:</label>
              <input type="text" class="form-control" name="name" value="{{ $stu->firstname }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Email :</label>
              <input type="text" class="form-control" name="email" value="{{ $stu->email }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Mobile :</label>
              <input type="text" class="form-control" name="mobile" value="{{ $stu->mobile }}"/>
          </div>
          <div class="form-group">
              <label for="cases">City :</label>
              <input type="text" class="form-control" name="city" value="{{ $stu->city }}"/>
          </div>
          <div class="form-group">
              <label for="cases">State :</label>
              <input type="text" class="form-control" name="state" value="{{ $stu->state }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Country :</label>
              <input type="text" class="form-control" name="country" value="{{ $stu->country }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Student</button>
      </form>
  </div>
</div>
@endsection