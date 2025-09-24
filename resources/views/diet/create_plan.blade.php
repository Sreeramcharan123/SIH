@extends('Doctor.layout.Doc.header')
@section('title','Create Diet Plan')
@section('content')

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">🍏 Create New Diet Plan</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('diet.store') }}" method="POST">
                @csrf

                {{-- Select Patient --}}
                <div class="mb-3">
                    <label for="patient" class="form-label fw-bold">👩‍⚕️ Select Patient</label>
                    <select class="form-select shadow-sm" id="patient" name="patient_id" required>
                        <option value="">-- Choose Patient --</option>
                        @foreach($patients as $patient)
                            <option value="{{ $patient->id }}">{{ $patient->name }} ({{ $patient->email }})</option>
                        @endforeach
                    </select>
                </div>

                {{-- Plan Name --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">📌 Plan Name</label>
                    <input type="text" name="plan_name" class="form-control shadow-sm" placeholder="Eg: Weight Loss Plan" required>
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">📝 Description</label>
                    <textarea name="description" class="form-control shadow-sm" rows="3" placeholder="Short notes about this plan"></textarea>
                </div>

                {{-- Select Foods --}}
                <h5 class="mt-4 fw-bold">🥗 Select Foods</h5>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">
                    @foreach($foods as $food)
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0 food-card p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="fw-bold text-success mb-0">
                                        <input type="checkbox" 
                                               name="foods[{{ $food->id }}][id]" 
                                               value="{{ $food->id }}" 
                                               class="form-check-input me-2 toggle-info"
                                               data-target="food-{{ $food->id }}">
                                        {{ $food->name }}
                                    </label>
                                </div>

                                {{-- Hidden Info --}}
                                <div id="food-{{ $food->id }}" class="food-info mt-3" style="display:none;">
                                    <div class="small text-muted mb-2">
                                        <span class="badge bg-primary">🔥 {{ $food->calories }} kcal</span>
                                        <span class="badge bg-info text-dark">💪 {{ $food->protein }} g protein</span>
                                        <span class="badge bg-warning text-dark">🥑 {{ $food->fat }} g fat</span>
                                        <span class="badge bg-success">🌾 {{ $food->carbs }} g carbs</span>
                                        <span class="badge bg-secondary">🌿 {{ $food->fiber }} g fiber</span>
                                    </div>
                                    <div class="small text-muted">
                                        <span class="badge bg-light text-dark">Dosha: {{ $food->dosha }}</span>
                                        <span class="badge bg-light text-dark">Rasa: {{ $food->rasa }}</span>
                                        <span class="badge bg-light text-dark">Virya: {{ $food->virya }}</span>
                                        <span class="badge bg-light text-dark">Vipaka: {{ $food->vipaka }}</span>
                                    </div>

                                    {{-- Meal time + quantity --}}
                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <select name="foods[{{ $food->id }}][meal_time]" class="form-select form-select-sm w-50 me-2">
                                            <option value="Breakfast">Breakfast</option>
                                            <option value="Lunch">Lunch</option>
                                            <option value="Dinner">Dinner</option>
                                            <option value="Snack">Snack</option>
                                        </select>
                                        <input type="number" 
                                               name="foods[{{ $food->id }}][quantity]" 
                                               value="1" 
                                               min="1" 
                                               class="form-control form-control-sm w-25">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Submit --}}
                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-lg btn-success px-5 shadow-sm">✅ Save Plan</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- JS toggle --}}
<script>
    document.querySelectorAll('.toggle-info').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            let target = document.getElementById(this.dataset.target);
            if (this.checked) {
                target.style.display = "block";
            } else {
                target.style.display = "none";
            }
        });
    });
</script>

{{-- Styling --}}
<style>
    .food-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border-left: 5px solid #28a745;
    }
    .food-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    .badge {
        margin: 2px;
        font-size: 0.8rem;
    }
</style>

@endsection
