<x-livewire-tables::table.cell>
    @if ($row->area == App\Models\Patient\PatientBasic::TYPE_FRONTEND)
        Frontend
    @elseif($row->area == App\Models\Patient\PatientBasic::TYPE_BACKEND)
        Backend
    @else
        Both
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ App\Domains\Announcement\Models\Announcement::types()[$row->type] }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->reg_number }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->name }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->dob }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->initial_visit }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->gender }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->ethinicity }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->honorific }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->district }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->contact_address }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->contact_tele }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->guardian_name }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->guardian_tele }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->guardian_address }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->guardian_relationship }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->presenting_complain_co }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->presenting_complain_ho }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->medical_history }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->current_medications }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->special_referrals }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->entered_by }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->created_by }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->updated_at }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    <div class="d-flex px-0 mt-0 mb-0">
        <div class="btn-group" role="group" aria-label="">
            <a href="{{ route('admin.patient_basic.edit', $row) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"
                    title="Edit"></i>
            </a>
            <a href="{{ route('admin.patient_basic.delete', $row) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"
                    title="Delete"></i>
            </a>
        </div>
    </div>
</x-livewire-tables::table.cell>
