<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CsvForm extends Component
{
	use WithFileUploads;

	public $csv_file;

	public function submit() {}

	public function render()
	{
		return view('livewire.csv-form');
	}
}
