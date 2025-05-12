<div class="space-y-6 text-white">

    <div>
        <label for="name" class="block mb-2 text-sm font-medium">Nombre del evento</label>
        <input type="text" name="name" value="{{ old('name', $feria->name ?? '') }}" required
            class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
    </div>

    <div>
        <label for="date" class="block mb-2 text-sm font-medium">Fecha</label>
        <input type="date" name="date" value="{{ old('date', $feria->date ?? '') }}" required
            class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
    </div>

    <div>
        <label for="place" class="block mb-2 text-sm font-medium">Lugar</label>
        <input type="text" name="place" value="{{ old('place', $feria->place ?? '') }}" required
            class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
    </div>

    <div>
        <label for="address" class="block mb-2 text-sm font-medium">Dirección</label>
        <input type="text" name="address" value="{{ old('address', $feria->address ?? '') }}" required
            class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
    </div>

    <div>
        <label for="description" class="block mb-2 text-sm font-medium">Descripción</label>
        <textarea name="description" rows="4"
            class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('description', $feria->description ?? '') }}</textarea>
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium">Emprendedores participantes</label>
        <div class="grid md:grid-cols-2 gap-4">
            @foreach($emprendedores as $emp)
                <label class="flex items-center justify-between p-3 bg-gray-800 rounded-lg border border-gray-600 hover:border-indigo-400 transition duration-200">
                    <span>{{ $emp->name }}</span>
                    <input type="checkbox" name="emprendedores[]" value="{{ $emp->id }}"
                        @if(isset($feria) && $feria->emprendedores->contains($emp->id)) checked @endif
                        class="form-checkbox h-5 w-5 text-indigo-600 bg-gray-700 border-gray-500 rounded focus:ring-indigo-500" />
                </label>
            @endforeach
        </div>
    </div>

</div>
