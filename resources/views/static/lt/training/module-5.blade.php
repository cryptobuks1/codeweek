@extends('layout.base') @section('content')<section>

        <div class="container">

            <div class="content-wrap nopadding">


                <div class="container clearfix ">


                    <div class="flex flex-col justify-center text-center w-full mb-8 uppercase">
                        <h1>Robotų gamyba ir tinkinimas klasėje</h1><span>Tullia Urschitz</span></div>

                    <hr>

                    <p>Programavimo, tinkinimo, robotikos ir mikroelektronikos kaip mokymo ir mokymosi priemonių įtraukimas į mokyklų ugdymo programas yra esminis XXI&nbsp;a. &scaron;vietimo uždavinys.</p>

                    <p>Tinkinimo ir robotikos naudojimas mokyklose yra labai naudingas mokiniams, nes padeda ugdyti pagrindines jų kompetencijas, kaip antai problemų sprendimo, komandinio darbo ir bendradarbiavimo. Be to, tokia veikla didina mokinių kūrybi&scaron;kumą ir pasitikėjimą savimi, o i&scaron;&scaron;ūkių akivaizdoje gali padėti jiems įgyti i&scaron;tvermės ir ryžtingumo. Robotika taip pat yra sritis, skatinanti įtraukimą, nes ji yra lengvai prieinama mokiniams, turintiems skirtingų talentų ir įgūdžių (tiek berniukams, tiek mergaitėms), ir turi teigiamo poveikio autizmu sergantiems mokiniams.</p>

                    <p>Pasižiūrėkite &scaron;į vaizdo įra&scaron;ą, kuriame projekto &bdquo;Scientix&ldquo; ambasadorė Italijoje ir gamtos mokslų, technologijų, inžinerijos ir matematikos mokytoja Sant&rsquo;Ambrogio Di Valpolicella (Italija) pateikia prakti&scaron;kų pavyzdžių, kaip mokytojai gali įtraukti tinkinimą ir robotiką į pamoką ir paversti pasyvius mokinius entuziastingais kūrėjais.</p>

                    @include('static.youtube', ['video_id' => '5V9G-vWWSik'])

                    <p><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/LT/CNECT-2018-00222-00-20-LT-TRA-00.DOCX">Atsisiųsti vaizdo įra&scaron;o scenarijų</a></p>

                    <h2>Ar pasiruo&scaron;ę su savo mokiniais pasidalyti tuo, ką sužinojote?</h2>

                    <p>Pasirinkite vieną i&scaron; toliau pateiktų pamokos planų ir įgyvendinkite jį su savo mokiniais.</p>

                    <ul>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/LT/CNECT-2018-00222-00-13-LT-TRA-00.DOCX">1&nbsp;veikla. Kaip sukurti mechaninę ranką i&scaron; kartono&nbsp;&ndash; pradinės mokyklos mokiniams</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/LT/CNECT-2018-00222-00-14-LT-TRA-00.DOCX">2&nbsp;veikla. Kaip sukurti mechaninę arba roboto ranką&nbsp;&ndash; jaunesnių klasių vidurinės mokyklos mokiniams</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/LT/CNECT-2018-00222-00-15-LT-TRA-00.DOCX">3&nbsp;veikla. Kaip sukurti mechaninę arba roboto ranką&nbsp;&ndash; vyresnių klasių vidurinės mokyklos mokiniams</a></li>
                    </ul>@if(view()->exists('static.'.App::getLocale().'.training.footer')) @include('static.'.App::getLocale().'.training.footer') @else @include('static.en.training.footer') @endif</div>

            </div>

        </div>

    </section>@endsection