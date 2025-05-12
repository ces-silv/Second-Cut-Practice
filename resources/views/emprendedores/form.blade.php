<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $emprendedore->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="phone_number" class="form-label">Teléfono</label>
    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $emprendedore->phone_number ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="product" class="form-label">Producto</label>
    <input type="text" name="product" class="form-control" value="{{ old('product', $emprendedore->product ?? '') }}" required>
</div>
