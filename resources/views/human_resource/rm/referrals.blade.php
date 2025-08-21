@extends('layouts.app')

@section('content')
    <div @class(['container', 'bg-white', 'p-5', ])>
        <div @class(['row'])>

            {{-- header --}}
            <div @class(['col-md-12', 'mb-4'])>
                <h2>Refferrer Details:</h2>
            </div>

            {{--full name--}}
            <div @class(['col-md-12', 'mb-4'])>
                <div>
                    <div @class(['form-group'])>
                        <label for="full_name">Full Name:</label>
                        <div @class(['input-group'])>
                            <input type="text" @class(['form-control']) placeholder="Last name">
                            <input type="text" @class(['form-control']) placeholder="First name">
                            <input type="text" @class(['form-control']) placeholder="MI">
                        </div>
                    </div>
                </div>
            </div>

            {{-- email --}}
            <div @class(['col-md-6', 'mb-4'])>
                <div>
                    <label for="">Email Address:</label>
                    <input type="email" @class(['form-control'])>
                </div>
            </div>

            {{-- Phone --}}
            <div @class(['col-md-6', 'mb-4'])>
                <div>
                    <label for="">Phone Number:</label>
                    <input type="tel" @class(['form-control'])>
                </div>
            </div>

            {{-- Department/position --}}
            <div @class(['col-md-12', 'mb-4'])>
                <div>
                    <label for="">Department/Position:</label>
                    <input type="text" @class(['form-control'])>
                </div>
            </div>

            {{--- Referral letter --}}
            <div @class(['col-md-12', 'mb-4'])>
                <div>
                    <label for="">Referral Letter</label>
                    <textarea @class(['form-control'])
                    style="height: 200px;"
                    placeholder="type here">

                    </textarea>
                </div>
            </div>

            {{--line --}}
            <hr @class(['my-5', 'shadow-lg'])>

            {{--Full name--}}
            <div @class(['col-md-12', 'mb-4'])>
                <div>
                    <label for="">Full Name:</label>
                    <input type="text" @class(['form-control'])>
                </div>
            </div>

            {{-- Email --}}
            <div @class(['col-md-6', 'mb-4'])>
                <div>
                    <label for="">Email:</label>
                    <input type="email" @class(['form-control'])>
                </div>
            </div>

            {{-- Phone --}}
            <div @class(['col-md-6', 'mb-4'])>
                <div>
                    <label for="">Phone Number:</label>
                    <input type="tel" @class(['form-control'])>
                </div>
            </div>

            {{-- Referral Letter --}}
            <div @class(['col-md-12', 'mb-2'])>
                <div>
                    <label for="">Referral Letter</label>
                    <textarea @class('form-control')
                    style="height: 150px;">

                    </textarea>
                </div>
            </div>

            {{-- Terms & Policy --}}
            <div @class(['col-md-12', 'mb-5'])>
                <div @class(['form-check'])>
                    <input type="checkbox" @class(['form-check-input'])>
                    <label @class(['form-check-label'])>
                        By submitting this form, I agree to the
                        <strong @class(['text-primary'])>Terms & Policy</strong>
                    </label>
                </div>
            </div>

            {{-- --button --}}
            <div @class(['col-md-12'])>
                <div class="d-flex justify-content-end">
                    <button @class(['btn btn-primary'])
                    style="width: 150px">
                        Submit
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
