@extends('Doctor.layout.Doc.header')
@section('title', 'Add Food')
@section('content')

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-success text-white d-flex align-items-center">
            <i class="bi bi-egg-fried me-2 fs-5"></i>
            <h4 class="mb-0">🍎 Add New Food Item</h4>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('food.store') }}" method="POST">
                @csrf

                {{-- Food Name --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🥗 Food Name</label>
                    <input type="text" name="name" class="form-control shadow-sm" placeholder="Enter food name" required>
                </div>

                {{-- Calories --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🔥 Calories (kcal)</label>
                    <input type="number" step="0.01" name="calories" class="form-control shadow-sm" placeholder="e.g. 52">
                </div>

                {{-- Protein --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">💪 Protein (g)</label>
                    <input type="number" step="0.01" name="protein" class="form-control shadow-sm" placeholder="e.g. 1.2">
                </div>

                {{-- Fat --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🥑 Fat (g)</label>
                    <input type="number" step="0.01" name="fat" class="form-control shadow-sm" placeholder="e.g. 0.5">
                </div>

                {{-- Carbs --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🍞 Carbs (g)</label>
                    <input type="number" step="0.01" name="carbs" class="form-control shadow-sm" placeholder="e.g. 14.0">
                </div>

                {{-- Fiber --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🌾 Fiber (g)</label>
                    <input type="number" step="0.01" name="fiber" class="form-control shadow-sm" placeholder="e.g. 2.4">
                </div>

                {{-- Dosha --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🌀 Dosha Effect</label>
                    <select name="dosha" class="form-select shadow-sm">
                        <option value="Vata">Vata</option>
                        <option value="Pitta">Pitta</option>
                        <option value="Kapha">Kapha</option>
                        <option value="Vata/Pitta">Vata / Pitta</option>
                        <option value="Tridosha">Tridosha</option>
                    </select>
                </div>

                {{-- Taste (Rasa) --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🍯 Rasa (Taste)</label>
                    <input type="text" name="rasa" class="form-control shadow-sm" placeholder="e.g. Madhura (Sweet)">
                </div>

                {{-- Virya --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🔥 Virya (Potency)</label>
                    <input type="text" name="virya" class="form-control shadow-sm" placeholder="e.g. Ushna (Hot)">
                </div>

                {{-- Vipaka --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">🌿 Vipaka (Post-digestive effect)</label>
                    <input type="text" name="vipaka" class="form-control shadow-sm" placeholder="e.g. Madhura (Sweet)">
                </div>

                {{-- Submit --}}
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-success px-4 shadow-sm">
                        <i class="bi bi-plus-circle me-1"></i> Save Food
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
