@extends('layouts.app')

@section('content')

    <div @class(['container', 'p-5', 'bg-white'])>

        {{-- hedaer title --}}
        <div @class(['mb-5'])>
            <h2>Employee Recognition Wall</h2>
        </div>

        {{-- content --}}
        <div @class(['row'])>

            {{-- card --}}
            <div @class(['col-3', 'border', 'rounded-3', 'p-3'])>

                <div>

                    {{-- header--}}
                    <div @class(['row', 'align-items-center'])>

                        {{--img --}}
                        <div @class(['col-auto'])
                        style="width: 80px; height: 80px;">
                            <img src="https://i.pinimg.com/736x/81/0c/74/810c7414ea6541dd35f9629bbd428874.jpg"
                            alt="" @class(['img-fluid', 'rounded'])>
                        </div>

                        {{-- name --}}
                        <div @class(['col'])>
                            <h6>Renzemark Olea</h6>
                        </div>

                        {{-- icon --}}
                        <div @class(['col-auto'])>
                            <i class="bi bi-star-fill"></i>
                        </div>

                    </div>

                    {{-- line --}}
                    <hr>

                    {{-- recognition --}}
                    <div>
                        <p @class(['border', 'text-center', 'p-2', 'rounded-2']) style="background-color: #FCD975">sfjlkdfjlskdjfsk</p>
                    </div>

                    {{-- descrption --}}
                    <div>
                        <p style="word-break: break-word;">sdfjlksdflskjfslkfslknflsdnflsknfsf
                            VXKJXDJKFKXDFKJSDFJXDFKJXDKJFBXDJKBFKXJDBFKJBDXJKBFJKXBDFKJBXDKJFBXDFJKDBFXBFDKXNFLXDFKJsflknsdflknsdklfnslkdnfsnflskdnflsklknlksndfsdf</p>
                    </div>

                    {{-- date --}}
                    <div>
                        <p>10-10-10</p>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection
