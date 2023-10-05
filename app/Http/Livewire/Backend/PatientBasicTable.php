<?php

namespace App\Http\Livewire\Backend;

use App\Models\Patient\PatientBasic;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class PatientBasicTable extends DataTableComponent
{
    public array $perPageAccepted = [25, 50, 100];
    public bool $perPageAll = true;

    public function columns(): array
    {
        return [
            Column::make("Registration Number", "reg_number")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Actions")
        ];
    }

    //pasan made
    public function query(): Builder
    {
        return PatientBasic::query()
        ->when($this->getFilter('gender'), fn ($query, $status) => $query->where('gender', $status))
        ->when($this->getFilter('ethnicity'), fn ($query, $type) => $query->where('ethnicity', $type))
        ->when($this->getFilter('honorific'), fn ($query, $status) => $query->where('honorific', $status))
        ->when($this->getFilter('district'), fn ($query, $status) => $query->where('district', $status))
        ->when($this->getFilter('guardian_relationship'), fn ($query, $status) => $query->where('guardian_relationship', $status))
        ->when($this->getFilter('entered_by'), fn ($query, $status) => $query->where('entered_by', $status));
    }

    // TODO
    //pasan made
    public function filters(): array
    {
        $gender = ["" => "Any"];
        foreach (PatientBasic::genders() as $key => $value) {
            $gender[$key] = $value;
        }

        $ethnicity = ["" => "Any"];
        foreach (PatientBasic::ethnicities() as $key => $value) {
            $ethnicity[$key] = $value;
        }

        $honorific = ["" => "Any"];
        foreach (PatientBasic::honorifics() as $key => $value) {
            $honorific[$key] = $value;
        }

        $district = ["" => "Any"];
        foreach (PatientBasic::districts() as $key => $value) {
            $district[$key] = $value;
        }

        $guardian_relationship = ["" => "Any"];
        foreach (PatientBasic::guardian_relationships() as $key => $value) {
            $guardian_relationship[$key] = $value;
        }

        $entered_by = ["" => "Any"];
        foreach (PatientBasic::entered_bys() as $key => $value) {
            $entered_by[$key] = $value;
        }

        return [
            'gender' => Filter::make('Display gender')
                ->select($gender),
        ];
    } 
    

    public function rowView(): string
    {
        return 'backend.patient_basic.index-table-row';
    }
}
