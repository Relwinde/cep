<?php

namespace App\Livewire\Elements;

use Livewire\Component;
use App\Models\Affectation;
use Livewire\WithPagination;


class AffectationTable extends Component
{

    public $pv;
    public $nom;
    public $prenom;
    public $sex;
    public $date;
    public $lieu;
    public $ecole;
    public $etablissement;

    use WithPagination;
    public function render()
    {

        $affectations = Affectation::where('pv', 'like', "%{$this->pv}%")->where('nom', 'like', "%{$this->nom}%")->where('prenom', 'like', "%{$this->prenom}%")->where('sex', 'like', "%{$this->sex}%")->where('date', 'like', "%{$this->date}%")->where('lieu', 'like', "%{$this->lieu}%")->where('ecole', 'like', "%{$this->ecole}%")->where('etablissement', 'like', "%{$this->etablissement}%")->orderBy('pv', 'ASC')->paginate(12);

        return view('livewire.elements.affectation-table', ['affectations'=>$affectations]);
    }
}
