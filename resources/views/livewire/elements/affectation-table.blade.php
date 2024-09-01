<div>
    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
        <thead>
            <tr>
                <th class="wd-15p border-bottom-0"><span>N°PV</span><input wire:model.live.debounce="pv" style="width: auto !important;" type="text" class="form-control"></th>
                <th class="wd-15p border-bottom-0"><span>Nom</span><input wire:model.live.debounce="nom" style="width: auto !important;" type="text" class="form-control"> </th>
                <th class="wd-20p border-bottom-0"><span>Prénoms</span><input wire:model.live.debounce="prenom" style="width: auto !important;" type="text" class="form-control">  </th>
                <th class="wd-15p border-bottom-0"><span>Sexe</span><input wire:model.live.debounce="sex" style="width: auto !important;" type="text" class="form-control"></th>
                <th class="wd-10p border-bottom-0"><span>Lieu de naissance</span><input wire:model.live.debounce="lieu" style="width: auto !important;" type="text" class="form-control"> </th>
                <th class="wd-10p border-bottom-0"><span>Date de naissance</span><input wire:model.live.debounce="lieu" style="width: auto !important;" type="text" class="form-control"> </th>
                <th class="wd-25p border-bottom-0"><span>Ecole</span><input wire:model.live.debounce="ecole" style="width: auto !important;" type="text" class="form-control"> </th>
                <th class="wd-25p border-bottom-0"><span>Etablissement d'affectation</span><input wire:model.live.debounce="etablissement" style="width: auto !important;" type="text" class="form-control"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($affectations as $affectation)
                <tr>
                    <td>{{ $affectation->pv }}</td>
                    <td>{{ $affectation->nom }}</td>
                    <td>{{ $affectation->prenom }}</td>
                    <td>{{ $affectation->sex }}</td>
                    <td>{{ $affectation->lieu }}</td>
                    <td>{{ $affectation->date }}</td>
                    <td>{{ $affectation->ecole }}</td>
                    <td>{{ $affectation->etablissement }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{ $affectations->links()}}
</div>
