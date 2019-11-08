@extends('layouts.master')

@section('title')
	Get Appointment | Patient
@endsection

@section('content')
	<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Get Appointment</h3>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
        </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
      <form action="/store-appointment" method="POST">
        {{ csrf_field() }}
          <div class="form-group">
            <label>Date :</label>
            <input type="date" name="date" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label>Time :</label>
            <input type="time" name="time" class="form-control" id="recipient-name">
          </div>
          <button type="submit" class="btn btn-secondary">Submit</button>
      </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection

@section('scripts')
	
@endsection