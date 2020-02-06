<!-- 
Copyright ValyTGV
-->
<html>

<head>
    <title>Time Tracker App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add online Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <script src="{{url('js/home.js')}}"></script>
</head>


<body id="body">


    @foreach($students as $student)

    @endforeach
    <div class="container">


        <select name="names">
            @foreach($students as $student)
            <option value=""><button class="btn btn-primary" onclick="openForm()">{{$student->name}}</button></option>
            @endforeach
        </select>
        <br><br>



        <form id="message" action="{{url('stores',$student->id)}}" method="post">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <a onclick="clockin()" class="btn btn-primary" id="clin" >Clock in</a>
            <p id="ci" name="clock_in"></p>
            <a onclick="breakout()" class="btn btn-primary" id="brout" >Break Out</a>
            <p id="bo" name="break_out"></p>
            <a onclick="breakin()" class="btn btn-primary" id="brin" disabled>Break In</a>
            <p id="bi" name="break_end"></p>
            <button onclick="clockout()" class="btn btn-primary" type="submit" id="clout" disabled>Clock Out</button>
            <p id="co" name="clock_out"></p>
        </form>




    </div>

    <div id="div1">
        <h1 id="time"></h1>
        <!-- <p id="date"></p> -->
    </div>
    <div>
        <h1>Total Time Worked:</h1>
        <h1>Hour Left Before:</h1>
        <h1>Total Breaks:</h1>
    </div>





    </div>





    <!-- Add online jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
    </script>
    <script>
   
    const d = new Date()

    function openForm(){

 document.getElementById("clin").disabled = false;

    }

    function clockin() {
        const d = new Date()
        var h = d.getHours();
        var m = d.getMinutes();
        document.getElementById("ci").innerHTML = h + ":" + m;
        document.getElementById("brout").disabled = false;

        document.getElementById("clout").disabled = false;

        
    }

    function breakin() {
        const d = new Date()
        var h = d.getHours();
        var m = d.getMinutes();
        document.getElementById("bi").innerHTML = h + ":" + m;
        document.getElementById("brin").disabled = true;
        document.getElementById("brout").disabled = false;

    }

    function breakout() {
        const d = new Date()
        var h = d.getHours();
        var m = d.getMinutes();
        document.getElementById("bo").innerHTML = h + ":" + m;
        document.getElementById("brout").disabled = false;
        
       
    }

    function clockout() {
        const d = new Date()
        var h = d.getHours();
        var m = d.getMinutes();
        document.getElementById("co").innerHTML = h + ":" + m;
    }
    </script>
    <script>
    $(document).on("click", ".save", function() {
        $.ajax({
            type: "post",
            url: '/Users/message',
            data: $(".message").serialize(),
            success: function(store) {

            },
            error: function() {}
        });
    });
    </script>
</body>

</html>