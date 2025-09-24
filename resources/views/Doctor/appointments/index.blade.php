@extends('Doctor.layout.Doc.header')
@section('title','Appointments')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">📅 Appointment List</h3>

    <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>S.NO</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($appointments as $index => $apt)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $apt->name }}</td>
                    <td>{{ $apt->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($apt->time)->format('d M Y, h:i A') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No appointments yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
