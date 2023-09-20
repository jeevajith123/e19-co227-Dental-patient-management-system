@extends('backend.layouts.app')

@section('title', __('Manage'))

@section('content')
    <div>
        <x-backend.card>
            <x-slot name="header">
                Patient Basics
            </x-slot>

            @if (1)
                <x-slot name="headerActions">
                    <x-utils.link icon="c-icon cil-plus" class="card-header-action" :href="route('admin.patient_basic.create')" :text="__('Create Patient Basics')">
                    </x-utils.link>
                </x-slot>
            @endif

            <x-slot name="body">

                @if (session('Success'))
                    <div class="alert alert-success">
                        {{ session('Success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <livewire:backend.patient_basics />
            </x-slot>
        </x-backend.card>
    </div>
@endsection
