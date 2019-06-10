@include('student.layouts.head')
<body>
<section class="body">

    @include('student.layouts.header')

        <h1 style="margin-top: 100px">Showing Student {{ $student->name }}</h1>

        <div class="jumbotron text-center">
            <p>
                <strong>Task Title:</strong> {{ $student->name }}
                <br>
                <strong>Description:</strong> {{ $student->email }}
            </p>
        </div>

</section>

@include('student.layouts.footer')
</body>
