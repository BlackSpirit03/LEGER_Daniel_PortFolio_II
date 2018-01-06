@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">@lang('Dashboard')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div text-center>@lang('Welcome')&nbsp;-&nbsp;@lang('You are logged in')&nbsp;!<br></div>
                    <hr> 
                    
                    <ul style="list-style-type:none">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;-&nbsp;@lang('Messages') : @lang('Read all messages sent by the guest of the web site')</li>
                        <li><i class="fa fa-gears" aria-hidden="true"></i>&nbsp;-&nbsp;@lang('Skills') : @lang('Show all skills (in all languages) showned in the skill part of the portfolio')</li>
                        <li><i class="fa fa-industry" aria-hidden="true"></i>&nbsp;-&nbsp;@lang('Professionals') : @lang('Show all profesional activities of the owner of the portfolio')</li>
                        <li><i class="fa fa-photo" aria-hidden="true"></i>&nbsp;-&nbsp;@lang('Projects') : @lang('Show all project realized by the owner of the portfolio')</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i></i>&nbsp;-&nbsp;@lang('Personals') : @lang('Show all personal values about the owner of the portfolio')</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
