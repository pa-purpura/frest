<x-app>
    <div hidden>
        @if ( Request::url()==='http://127.0.0.1:8000/cars/create' )
        {{ $action='http://127.0.0.1:8000/cars'}}
        {{ $method = 'POST'}}
        @else
        {{ $method='PATCH'}}
        {{ $action='http://127.0.0.1:8000/cars/' . $car->id}}
        @endif
    </div>
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>
                @if ( Request::url()==='http://127.0.0.1:8000/cars/create' )
                <h5 class="mb-0">Crea Nuovo</h5>
                @else
                <h1><i class="fa fa-edit"></i> Modifica macchina</h1>
                @endif
            </div>

        </div>
        <div class="card-body">
            <x-form.form method={{$method}} action={{$action}}>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="text" label="Brand" name="brand"
                            value="{{ old('brand', isset($car) ? $car->brand : '') }}">
                            </x-form.inputs.input1>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="text" label="Modello" name="model"
                            value="{{ old('model', isset($car) ? $car->model : '') }}">
                            </x-form.inputs.input1>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="date" label="Year" name="year"
                            value="{{ old('year', isset($car) ? $car->year : '') }}">
                            </x-form.inputs.input1>
                    </div>
                </div>
            </x-form.form>
        </div>
    </div>
</x-app>
