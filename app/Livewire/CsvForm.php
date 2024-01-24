<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\SimpleExcel\SimpleExcelReader;

class CsvForm extends Component
{
	use WithFileUploads;

	public $csv_file;
	public $parsedCsv;
	public $loading = false;
	public $step = 1; // New property to track the current step
	public $columns = []; // To store CSV column headers
	public $mappings = []; // To store user mappings
	public $resultData = [];
	public $errorMessage = '';

	public function updatedCsvFile()
	{
		// Load CSV headers for mapping once a file is uploaded
		// try {
		// 	$path = $this->csv_file->getRealPath();
		// 	$csv = Reader::createFromPath($path, 'r');
		// 	$csv->setHeaderOffset(0);

		// 	$this->columns = $csv->getHeader(); // Get CSV headers
		// 	$this->step = 2; // Move to mapping step
		// } catch (\Exception $e) {
		// 	$this->errorMessage = 'Error reading file: '.$e->getMessage();
		// }
	}

	public function submitMapping()
	{
		// Validate mappings here if necessary
		// ...

		$this->step = 3; // Move to processing step
		$this->submit(); // Call the original submit function for processing
	}

	public function submit()
	{
		$this->validate([
			'csv_file' => 'required|file|mimes:csv,txt', // validate for CSV file
		]);

		$this->loading = true;

		$this->parsedCsv = SimpleExcelReader::create($this->csv_file->getRealPath());
		$this->columns = $this->parsedCsv->getHeaders(); // Get CSV headers

		dd($this->columns);
	}

	public function render()
	{
		return view('livewire.csv-form', [
			'loading' => $this->loading,
			'resultData' => $this->resultData,
			'errorMessage' => $this->errorMessage,
		]);
	}
}
