@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>


    <div @class(['card', 'p-5'])>

        <div @class(['row'])>

            <div @class(['col-12'])>

                {{-- title --}}
                <div @class(['mb-5'])>
                    <h2>Automated Email</h2>
                </div>

                {{-- select email template  --}}
                <div @class(['mb-5', 'col-md-12', 'p-3', 'border', 'rounded-3'])>
                    <h6>Select Email Template</h6>
                    <p>Choose base template to configure.</p>

                    {{-- choices --}}
                    <div>
                        <div @class(['border', 'rounded-3', 'p-2', 'mb-1'])>
                            <input type="radio" value="account">
                            <label for="account">Account Setup</label>
                        </div>
                        <div @class(['border', 'rounded-3', 'p-2', 'mb-1'])>
                            <input type="radio" value="welcome">
                            <label for="welcome">Welcome message and Requirements</label>
                        </div>
                        <div @class(['border', 'rounded-3', 'p-2', 'mb-1'])>
                            <input type="radio" value="contract">
                            <label for="contract">Contract Signing</label>
                        </div>
                    </div>

                </div>

                {{-- customize emil --}}
                <div @class(['col-md-12','p-3', 'border', 'mb-5', 'rounded-3'])>

                    {{-- title --}}
                    <div @class(['mb-5'])>
                        <h6>Customize Email content</h6>
                        <p>Adjust the subject and body of your automated email.</p>
                    </div>

                    <div @class(['col-md-12', 'mb-5'])>
                        <x-input-label for="subject" :value="__('Subject Line')"  />
                        <x-text-input type="text" @class(['']) id="subject"/>
                    </div>

                    {{-- message --}}
                    <form method="POST" action="">
                        @csrf

                        <input id="x" type="hidden" name="content">

                        <trix-editor input="x"></trix-editor>

                        <button @class(['btn', 'btn-primary', 'mt-3']) type="submit">Submit</button>

                    </form>

                </div>

                {{-- -Recipient --}}
                <div @class(['col-md-12', 'p-3', 'border', 'rounded-3'])>
                    <h6>Recipient Settings</h6>
                    <p>Subject who will receive this automated emil</p>

                    <div>
                        <input type="checkbox" name="from">
                        <label for="from">From</label>
                    </div>
                    <div>
                        <input type="checkbox" name="to">
                        <label for="to">To</label>
                    </div>
                </div>

            </div>
        </div>

    </div>



@endsection
