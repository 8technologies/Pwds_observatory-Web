<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{
    public $search;
    public $results = [];

    public function render()
    {
        $this->results = []; // Clear previous results

        if (!empty($this->search)) {
            // Perform search logic here and populate $this->results
            // For demonstration purposes, let's assume the results are fetched from a database
            $this->results = ['Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1', 'Result 2', 'Result 3','Result 1',];
        }

        return view('livewire.search-component');
    }
}
