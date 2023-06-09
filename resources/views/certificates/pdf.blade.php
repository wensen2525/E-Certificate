<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    @vite('resources/js/app.js' , 'vendor/courier/build')
    <style type="text/css">
        /* To remove margin while generating PDF. */
        * {
            margin:0;
            padding:0;
            
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 8.26772in;
            width: 11.6929in;
            /* background: url('storage/certificates/NEO-2022-baru.png'); */
            /* background-size: 11.6929in 8.26772in; */
            /* Not sure whether it works with DOMPDF. So, using a background of actual size. */
            /* background-repeat: no-repeat; */
        }

        main{
            position: relative;
        }

        .introduction{
            text-transform: uppercase;
            color: #ffffff;
            letter-spacing: .033in;
            font-size: .207in;
            font-weight: 500;
            text-align: center;
            margin-top: 2.42in;
        }
        .long_name {
            font-size: .4in;
            line-height: .45in;
            font-weight: 600;
            /* text-transform: capitalize; */
            color: #ffffff;
            margin-bottom: .135in;
            text-align: center;
            margin-top: 2.7in;
        }
        .long_name1 {
            font-size: .4in;
            line-height: .55in;
            font-weight: 600;
            /* text-transform: capitalize; */
            color: #ffffff;
            margin-bottom: .23in;
            text-align: center;
            margin-top: 2.7in;
        }
        .short_name {
            font-size: .5in;
            line-height: .45in;
            font-weight: 600;
            /* text-transform: capitalize; */
            color: #ffffff;
            margin-bottom: .135in;
            text-align: center;
            margin-top: 2.7in;
        }
        .short_name1 {
            font-size: .5in;
            line-height: .55in;
            font-weight: 600;
            /* text-transform: capitalize; */
            color: #ffffff;
            margin-bottom: .23in;
            text-align: center;
            margin-top: 2.7in;
        }
        .position {
            line-height: .4cm;
            padding: 0;
            margin: 0;
            font-size: .215in;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            
            margin-bottom: 0.1in;
        }
        .position1 {
            line-height: .4cm;
            padding: 0;
            margin: 0;
            font-size: .215in;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            margin-bottom: 0.1in;
        }
        .event {
            line-height: .4cm;
            padding: 0;
            margin: 0;
            font-size: .215in;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
        }

        .general_president {
            font-size: .17in;
            font-weight: 500;
            color: #ffffff;
            text-align: center;

            position: relative;
            top: 69.5px;
            right: 245px;
        }
        .rector {
            font-size: .17in;
            font-weight: 500;
            color: #ffffff;
            text-align: center;

            position: relative;
        }
        .project_manager {
            font-size: .17in;
            font-weight: 500;
            color: #ffffff;
            text-align: center;

            position: relative;
            bottom: 70px;
            left: 242px;
        }
    </style>
    <title>Certificate NEO 2022 | {{ $participant->name }}</title>
</head>



<body>
    <img src="../public/storage/certificates/NEO-2022-full.jpg" alt="NEO-2022-full" style="position:absolute; width: 11.6929in; top:0;left:0">
        <main>
            @if($participant->competition === 'Speech (Junior High School Category)' || $participant->competition === 'Speech (Open Category)' || $participant->competition === 'Logistic, Accommodation, and Equipment')
                @if($length_name > 28)
                    <p class="long_name">
                        {{ $participant->name }}
                    </p>
                @else
                    <p class="short_name">
                        {{ $participant->name }}
                    </p>
                @endif
                <p class="position">
                    @if($participant->position === 'Liaison Officer')
                        As the <a style="font-weight: 600;">{{ $participant->position }} of {{ $participant->competition }} Division</a> in
                    @else
                        As the <a style="font-weight: 500;">{{ $participant->position }} of {{ $participant->competition }} Competition</a> in
                    @endif
                    <br>
                    <div class="event">
                        The 2022 National English Olympics 
                    </div>
                </p>
            @else
                @if($length_name > 28)
                    <p class="long_name1">
                        {{ $participant->name }}
                    </p>
                @else
                    <p class="short_name1">
                        {{ $participant->name }}
                    </p>
                @endif
                <p class="position1">
                    @if($participant->position === 'Liaison Officer')
                        As the <a style="font-weight: 600;">{{ $participant->position }} of {{ $participant->competition }} Division</a> in
                    @else
                        As the <a style="font-weight: 500;">{{ $participant->position }} of {{ $participant->competition }} Competition</a> in
                    @endif
                    <br>
                    <div class="event">
                        The 2022 National English Olympics 
                    </div>
                </p>
            @endif
        </main>
</body>
</html>