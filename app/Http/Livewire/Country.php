<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Countrie;
use App\Models\City;
use App\Models\Rue;

class Country extends Component
{
    public $Countries;
    public $cities;
    public $rues;

    public $selectedState = NULL;
    public $selectedRue = NULL;

    public function init()
    {
        $this->selectedRue = NULL;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        $this->Countries = Countrie::all();
        $this->cities = collect();
        $this->rues = collect();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.country');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedSelectedState($country)
    {
        if (!is_null($country)) {
            $this->cities = City::where('country_id', $country)->get();
            $this->rues = Null;
        }
    }
    public function updatedSelectedRue($city)
    {
        if (!is_null($city)) {
            $this->rues = Rue::where('city_id', $city)->get();
        }
    }
}
