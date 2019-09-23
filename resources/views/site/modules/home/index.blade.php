@extends('site.template.template')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-4 border border-left-0 border-top-0 border-bottom-0">
            @foreach ($json as $item)
                <menu-side :itemenu="{{$item}}"></menu-side>
            @endforeach
        </div>

        <div class="col-8">
            <div class="container-fluid">
                @foreach ($json as $field)
                    <cards-component :itemenu="{{$field}}"></cards-component>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @push('js')
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '1759562694272477',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v4.0'
        });

        FB.login(function(response) {
            if (response.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function(response) {
            console.log('Good to see you, ' + response.id + '.');
                let endpoint = '/' + response.id + '/friends';
            FB.api(
                endpoint,
                'GET',
                {},
                function(response) {
                    console.log(response)
                }
            );

            });
            } else {
            console.log('User cancelled login or did not fully authorize.');
            }
        },{
            scope: 'user_friends',
            return_scopes: true
        });
    };

  </script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
@endpush --}}
