@extends('Doctor.layout.Doc.header')
@section('title','View Diet Plans')
@section('content')

<div class="container mt-4">
    <h3 class="mb-4"><i class="bi bi-journal-medical"></i> Diet Plans</h3>

    @forelse($plans as $plan)
        <div class="card shadow-lg mb-4 border-0">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{ ucfirst($plan->plan_name) }}</h5>
                <small>
                    <i class="bi bi-person-circle"></i> Patient: 
                    <strong>{{ $plan->patient->name ?? 'Unknown' }}</strong> |
                    Created: {{ $plan->created_at->format('d M Y') }}
                </small>
            </div>

            <div class="card-body">
                <p class="text-muted">{{ $plan->description ?? 'No description provided.' }}</p>

                <table class="table table-hover table-bordered align-middle text-center">
                    <thead class="table-success">
                        <tr>
                            <th>Food</th>
                            <th>Quantity</th>
                            <th>Meal Time</th>
                            <th>Calories</th>
                            <th>Protein</th>
                            <th>Fat</th>
                            <th>Carbs</th>
                            <th>Fiber</th>
                            <th>Dosha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plan->items as $item)
                            <tr>
                                <td>{{ $item->food->name ?? 'N/A' }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->meal_time }}</td>
                                <td>{{ $item->food->calories ?? '-' }}</td>
                                <td>{{ $item->food->protein ?? '-' }} g</td>
                                <td>{{ $item->food->fat ?? '-' }} g</td>
                                <td>{{ $item->food->carbs ?? '-' }} g</td>
                                <td>{{ $item->food->fiber ?? '-' }} g</td>
                                <td>{{ $item->food->dosha ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <div class="alert alert-warning text-center">
            <i class="bi bi-exclamation-triangle"></i> No diet plans found for this patient.
        </div>
    @endforelse
</div>

@endsection
