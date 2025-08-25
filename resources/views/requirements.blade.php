@extends('layouts.app')

@section('content')

    <div @class(['card', 'p-5'])>

        <div @class(['row'])>

            <div @class(['col-6'])>

                {{-- title --}}
                <div @class(['mb-5'])>
                    <h2>Onboarding Message</h2>
                    <p>please fill up the following details listed below.</p>
                </div>

                {{-- message --}}
                <div @class(['mb-3'])>
                    <h5>Tour Guide/Core 1 Dept.</h5>
                    <p>John Doe</p>
                    <p>johndoe@gmail.com</p>
                </div>

                {{-- -date --}}
                <div @class(['col-6', 'mb-3'])>
                    <x-input-label for="requirements_deadeline" :value="__('Requirements Deadline')" />
                    <x-text-input type="date" id="requirements_deadline" name="requirements_deadline" />
                </div>

                {{-- list --}}
                <div @class(['mb-3'])>
                    <p>List of Requirements need to pass:</p>

                    <ul>
                        <li>Medical</li>
                        <li>ID picture 2x2</li>
                    </ul>

                    <p><strong>Note: </strong>Kindly pass the requirements beore or on the given deadline:</p>

                </div>

                {{-- instruction --}}
                <div @class(['col-md-12', 'mb-3'])>
                    <x-input-label for="instructions" :value="__('Instructions')" />
                    <x-text-input id="instructions"/>
                </div>

                {{-- dress code --}}
                <div @class(['col-md-12', 'mb-3'])>
                    <x-input-label for="dress_code" :value="__('Dress Code')" />
                    <x-text-area id="dress_code" />
                </div>

                {{-- Welcoming Message --}}
                <div @class(['col-md-12', 'mb-3'])>
                    <x-input-label for="welcome_message" :value="__('Welcoming Message')" />
                    <x-text-area id="welcome_message" />
                </div>

                {{-- button --}}
                <div @class(['col-md-12', 'd-flex', 'justify-content-end'])>
                    <button @class(['btn', 'btn-primary', 'text-center', 'text-white'])>Submits</button>
                </div>

            </div>

        </div>

    </div>

@endsection
