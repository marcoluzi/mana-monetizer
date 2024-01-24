<div>
    @if($step == 1)
	<form wire:submit="submit">
		<label for="csv-file" class="block text-sm font-medium leading-6">CSV File</label>
		<div class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
			<div class="text-center">
				<svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
				</svg>
				<div class="mt-4 flex text-sm leading-6 text-gray-600">
					<label for="csv_file" class="relative rounded bg-indigo-500 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
						<span>{{ __('Upload a file') }}</span>
						<input id="csv_file" name="csv_file" wire:model="csv_file" type="file" class="sr-only">
					</label>
					<p class="pl-1">{{ __('or drag and drop') }}</p>
				</div>
				<p class="text-xs leading-5 text-gray-600">{{ __('CSV File') }}</p>
			</div>
		</div>
		<div class="flex justify-center">
			<button type="submit" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 mt-8">Submit</button>
		</div>
	</form>
    @endif

    @if($step == 2)
        <div>
            <h3>Map CSV Columns</h3>
            @foreach($columns as $column)
                <div>
                    <label>{{ $column }}</label>
                    <select wire:model="mappings.{{ $column }}">
                        <option value="">Select a mapping</option>
                        <!-- Populate with your specific set of keys -->
                        <option value="key1">Key 1</option>
                        <option value="key2">Key 2</option>
                        <!-- etc. -->
                    </select>
                </div>
            @endforeach
            <button wire:click="submitMapping">Submit Mapping</button>
        </div>
    @endif
</div>
