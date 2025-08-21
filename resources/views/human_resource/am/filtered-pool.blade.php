@extends('layouts.app')

@section('content')
    <div @class(['container', 'bg-white', 'p-5'])>

        {{--header --}}
        <h1 @class(['mb-5'])>Filtered Pool</h1>


        {{-- cotent --}}
        <div>
                {{--  accoditon table --}}
                <div @class(['accordion']) id="accordionExample">
                    <div @class(['accordion-item'])>

                        {{-- header --}}
                        <h2 @class(['accordion-header'])>
                            <button @class(['accordion-button', 'd-flex', 'justify-content-between', 'align-items-center']) type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">

                                    {{-- name --}}
                                    <span>
                                        Renzemark M. Olea
                                    </span>

                                    {{-- status --}}
                                    <span @class(['bg-success', 'p-2', 'text-white', 'rounded-2', 'text-center', 'ms-auto', 'me-3'])
                                    style="width: 100px;">
                                        Good
                                    </span>

                            </button>
                        </h2>

                        {{--body --}}
                        <div id="collapseOne" @class(['accordion-collapse collapse show']) data-bs-parent="#accordionExample">
                            <div @class(['accordion-body']) >
                                <p><strong>Aplicant Name:</strong> asdjkbsdbaslkjbdlalksdb</p>
                                <p><strong>Aplicant Name:</strong> asdjkbsdbaslkjbdlalksdb</p>
                                <p><strong>Aplicant Name:</strong> asdjkbsdbaslkjbdlalksdb</p>
                                <p><strong>Aplicant Name:</strong> asdjkbsdbaslkjbdlalksdb</p>
                                <p><strong>Aplicant Name:</strong> asdjkbsdbaslkjbdlalksdb</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
@endsection
