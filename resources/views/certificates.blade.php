@extends('layout.base')

@section('content')


    <section>

        <div class="container">
            <h1 style="display: inline-block;">@lang('certificates.certificates_for'){{ Auth::user()->fullName }}</h1>
            <hr>

            @if($reported_events->isEmpty() && $excellence->isEmpty() && $participation->isEmpty())
                <div class="row">
                    <p>@lang('certificates.no_certificates')</p>
                </div>
            @endif

            @if(!$participation->isEmpty())
                <table class="table table-striped table-hover">
                    <thead class="bg-orange-light text-white">
                    <tr>
                        <th scope="col">@lang('event.title.label')</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participation as $certificate_of_participation)


                        @if(!is_null($certificate_of_participation->event_name))
                            <tr>

                                <td width="*" scope="row">{{$certificate_of_participation->event_name}}</td>
                                <td>{{$certificate_of_participation->event_date}}</td>
                                <td><a title="Download your certificate" href="{{$certificate_of_participation->participation_url}}"><i
                                                class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                        @endif


                    @endforeach
                    </tbody>
                </table>
            @endif

            @if(!$excellence->isEmpty())
                <table class="table table-striped table-hover">
                <thead class="bg-orange-light text-white">
                <tr>
                    <th scope="col">@lang('report.name_for_certificate.label')</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($excellence as $certificate_of_excellence)


                    @if(!is_null($certificate_of_excellence->name_for_certificate))
                    <tr>

                        <td width="*" scope="row">Certificate of Excellence {{$certificate_of_excellence->edition}} ({{$certificate_of_excellence->name_for_certificate}})</td>
                        <td></td>
                        <td><a title="Download your certificate" href="{{$certificate_of_excellence->certificate_url}}"><i
                                        class="fa fa-download" aria-hidden="true"></i></a></td>
                    </tr>
                    @else
                        <tr>

                            <td width="*" scope="row"><a href="{{route('certificate_excellence_report', ['edition'=>$certificate_of_excellence->edition])}}">Claim your certificate of excellence for {{$certificate_of_excellence->edition}}</a></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif


                @endforeach
                </tbody>
                </table>
            @endif

            @if(!$reported_events->isEmpty())


                <table class="table table-striped table-hover">
                    <thead class="bg-orange text-white">
                    <tr>
                        <th scope="col">{{ucfirst(__('search.event'))}}</th>
                        <th scope="col">@lang('report.name_for_certificate.label')</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reported_events as $event)
                        <tr>
                            <td scope="row"><a href="{{$event->certificate_url}}">{{$event->title}}</a></td>
                            <td width="*" scope="row">{{$event->name_for_certificate}}</td>
                            <td><a title="Edit your certificate" href="{{route('report_event',$event->id)}}"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a title="Download your certificate" href="{{$event->certificate_url}}"><i
                                            class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

                {{ $reported_events->links() }}
            @endif

        </div>

    </section>


@endsection