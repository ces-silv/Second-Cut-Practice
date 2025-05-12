<div class="mb-3">
    <label for="name" class="form-label">Nombre del evento</label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $feria->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="date" class="form-label">Fecha</label>
    <input type="date" class="form-control" name="date" value="{{ old('date', $feria->date ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="place" class="form-label">Lugar</label>
    <input type="text" class="form-control" name="place" value="{{ old('place', $feria->place ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="address" class="form-label">Dirección</label>
    <input type="text" class="form-control" name="address" value="{{ old('address', $feria->address ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Descripción</label>
    <textarea class="form-control" name="description">{{ old('description', $feria->description ?? '') }}</textarea>
</div>
