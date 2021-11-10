<!DOCTYPE html>
<html lang="en">

<head>
    <title>JQuery Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <h1 class="text-center">JQuery Events</h1>
    <div class="row" id="this">
        <div class="col-12 text-center">
            <button id="a">click</button>
            <script>
                $(document).ready(function () {
                    $("#1").hide();
                    $("#a").click(function () {
                        $("#1").toggle(1000);
                    });
                });
            </script>
            <button id="b">mouseenter/leave</button>
            <script>
                $(document).ready(function () {
                    $("#2").hide();
                    $("#b").click(function () {
                        $("#2").toggle(1000);
                    });
                });
            </script>
            <button id="c">mouseup/down</button>
            <script>
                $(document).ready(function () {
                    $("#3").hide();
                    $("#c").click(function () {
                        $("#3").toggle(1000);
                    });
                });
            </script>
            <button id="d">hover</button>
            <script>
                $(document).ready(function () {
                    $("#4").hide();
                    $("#d").click(function () {
                        $("#4").toggle(1000);
                    });
                });
            </script>
            <button id="e">focus</button>
            <script>
                $(document).ready(function () {
                    $("#5").hide();
                    $("#e").click(function () {
                        $("#5").toggle(1000);
                    });
                });
            </script>

        </div>
    </div>


    <div class="container" id="all">
        <div class="row" id="1">
            <div class="col-12">
                <br>
                <br>
                <div class="text-center">
                    <h5>Click the text below to make it disappear!</h5>
                    <p id="single">Spooky</p>
                    <script>
                        $(document).ready(function () {
                            $("#single").click(function () {
                                $(this).hide();
                            });
                        });
                    </script>
                    <br>
                    <h5>Double click the text below to make it disappear!</h5>
                    <p id="double">I'm going to haunt you~</p>
                    <script>
                        $(document).ready(function () {
                            $("#double").dblclick(function () {
                                $(this).hide();
                            });
                        });
                    </script>
                    <br>
                </div>

            </div>
        </div>
        <div class="row" id="2">
            <div class="col-12 text-center">
                <h5>Hover the mouse to the text below!</h5>
                <p id="pop">Thanks!</p>
                <script>
                    $(document).ready(function () {
                        $("#pop").mouseenter(function () {
                            alert("You're welcome!");
                        });
                    });
                </script>
                <br>
                <h5>Hover the mouse to the text below and leave(?)</h5>
                <p id="popup">Don't run!</p>
                <script>
                    $(document).ready(function () {
                        $("#popup").mouseleave(function () {
                            alert("You've succesfully escaped!");
                        });
                    });
                </script>

            </div>
        </div>

        <div class="row" id="3">
            <div class="col-12 text-center">
                <h5>Click on the text below!</h5>
                <p id="down">See to unseen</p>
                <script>
                    $(document).ready(function () {
                        $("#down").mousedown(function () {
                            alert("https://youtu.be/dQw4w9WgXcQ!");
                        });
                    });
                </script>
                <br>
                <h5>Click on the text below!</h5>
                <p id="up">I don't feel so good</p>
                <script>
                    $(document).ready(function () {
                        $("#up").mouseup(function () {
                            alert("Mouse up over I don't feel so good");
                        });
                    });
                </script>
            </div>
        </div>
        <div class="row" id="4">
            <div class="col-12 text-center">
                <h5>Try to hover the text below</h5>
                <p id="ok">There's a burglar in the house!</p>
                <script>
                    $(document).ready(function () {
                        $("#ok").hover(function () {
                            alert("You are the burglar!");
                        },
                            function () {
                                alert("Now you've escaped");
                            });
                    });
                </script>
            </div>
        </div>

        <div class="row" id="5">
            <div class="col-12 text-center">
                Name: <input type="text" name="fullname"><br>
                Email: <input type="text" name="email">

                <script>
                    $(document).ready(function () {
                        $("input").focus(function () {
                            $(this).css("background-color", "yellow");
                        });
                        $("input").blur(function () {
                            $(this).css("background-color", "green");
                        });
                    });
                </script>


            </div>
        </div>



    </div>

</body>

</html>
