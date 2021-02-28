
        <nav class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                @isset($second)
                <li class="breadcrumb-item ">
                    @isset($second_url)
                    <a href="{{$second_url}}">{{$second}}</a>
                    @else
                    {{$second}}
                    @endisset
                </li>
                @endisset
                @isset($third)
                <li class="breadcrumb-item "> @isset($third_url)
                    <a href="{{$third_url}}">{{$third}}</a>
                    @else
                    {{$third}}
                    @endisset</li>
                @endisset
            </ol>
        </nav>
