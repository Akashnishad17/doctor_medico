@extends('layouts.master')

@section('title')
	Appointment Notification | Doctor
@endsection

@section('content')
	<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>My Appointment</h3>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
        </div>
        <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Patient</th>
                      <th>Date</th>
                      <th>Time</th>
                    </thead>
                    <tbody>
                      @foreach ($appointments as $appointment)
                      <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->patient_id }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
    </div>
    </div>
  </div>
@endsection

@section('scripts')
	
@endsection