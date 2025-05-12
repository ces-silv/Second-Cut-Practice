<div class="mb-6">
    <label for="name" class="block text-sm font-medium text-white mb-2">Nombre</label>
    <input type="text" name="name" id="name"
        class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        value="{{ old('name', $emprendedore->name ?? '') }}" required>
</div>

<div class="mb-6">
    <label for="phone_number" class="block text-sm font-medium text-white mb-2">Teléfono</label>
    <input type="text" name="phone_number" id="phone_number"
        class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        value="{{ old('phone_number', $emprendedore->phone_number ?? '') }}" required>
</div>

<div class="mb-6">
    <label for="product" class="block text-sm font-medium text-white mb-2">Producto</label>
    <input type="text" name="product" id="product"
        class="w-full px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        value="{{ old('product', $emprendedore->product ?? '') }}" required>
</div>
