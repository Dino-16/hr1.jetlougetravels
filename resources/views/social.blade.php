@extends('layouts.app')

@section('content')

    <div @class(['container', 'p-5', 'bg-white'])>

        {{-- header --}}
        <div @class(['mb-5'])>
            <h2>Create New Shout-out</h2>
        </div>

        <div @class(['row'])>

            {{-- Name --}}
            <div @class(['col-md-12'])>
                <div @class(['mb-5'])>
                    <label for="">Name</label>
                    <input type="text" @class(['form-control'])>
                </div>
            </div>

            {{-- Recognition type --}}
            <div @class(['col-md-6'])>
                <div @class(['mb-5'])>
                    <label for="">Recognition type</label>
                    <input type="text" @class(['form-control'])>
                </div>
            </div>

            {{-- Date --}}
            <div @class(['col-md-6'])>
                <div @class(['mb-5'])>
                    <label for="">Date</label>
                    <input type="text" @class(['form-control'])>
                </div>
            </div>

            {{-- Message --}}
            <div @class(['col-md-12'])>
                <div @class(['mb-5'])>
                    <label for="">Message</label>
                    <textarea @class(['form-control'])
                    style="height: 150px;"
                    ></textarea>
                </div>
            </div>

            {{-- button --}}
            <div @class(['col-md-12'])>
                <div @class(['d-flex', 'justify-content-end', 'mb-5'])>
                    <button @class(['btn btn-primary', 'text-white',
                    'text-center', 'p-2']) style="width: 100px"
                    >Submit</button>
                </div>
            </div>

        </div>

        {{-- hr line --}}
        <div @class('my-5')>
            <hr @class(['p-2'])>
        </div>

        {{-- recogniton header --}}
        <div @class(['mb-5'])>
            <h2>Recent Recognition</h2>
        </div>

        <div @class(['row'])>

            <div @class(['col-md-12'])>

                {{-- card --}}
                <div @class([ 'row', 'align-items-center', 'border', 'p-3'])>

                    {{-- employee img --}}
                    <div @class(['col-sm-2', 'justify-center-content', 'align-items-center'])>
                        <img src="https://i.pinimg.com/736x/81/0c/74/810c7414ea6541dd35f9629bbd428874.jpg"
                        @class(['img-fluid']) style="width: 100px; height: 100px;" alt="">
                    </div>

                    {{-- name, recognition, description, date --}}
                    <div @class(['col-sm-7'])>
                        <h5>Renz</h5>
                        <h6>dgkdjgh dkhfgkdf</h6>
                        <p>
                            jhdfljkgdh djhgsdfkjg
                            hfg dfghs dfgdkjgh sdgh dkfjhg dgfsjhsdg h
                        </p>
                        <p>10-10-10</p>
                    </div>

                    {{-- edit, delete --}}
                    <div @class(['col-sm-3'])>
                        <button @class(['btn', 'border', 'p-2']) style="width: 100px;">Edit</button>
                        <button @class(['btn btn-danger', 'p-2']) style="width: 100px;">Delete</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

