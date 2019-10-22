<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Multiple Image Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="bg-dark text-center text-white">Form to insert multiple images</h1>
    <form method="POST" action="{{ route('Hello') }}" enctype="multipart/form-data">
        @csrf
        {{--        <div class="row mt-5">--}}

        {{--            <div class="col8">--}}
        {{--                <input type="file" name="filename[]" class="form-control">--}}
        {{--            </div>--}}
        {{--            <div class="col-1"></div>--}}
        {{--            <div class="col-3">--}}
        {{--                <div>--}}
        {{--                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add--}}
        {{--                    </button>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row py-3"></div>--}}
        {{--        <div class="row">--}}

        {{--            <div class="col8">--}}
        {{--                <input type="file" name="filename[]" class="form-control">--}}
        {{--            </div>--}}
        {{--            <div class="col-1"></div>--}}
        {{--            <div class="col-3">--}}
        {{--                <div >--}}
        {{--                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove--}}
        {{--                    </button>--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row mt-3">--}}
        {{--            <div class="col-12">--}}
        {{--                <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>--}}
        {{--            </div>--}}
        {{--        </div>--}}


        <div class="input-group control-group increment">
            <input type="file" name="images[]" class="form-control" multiple>

            <div class="input-group-btn">
{{--                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>--}}
            </div>
            <div>{{ $errors->first('images') }}</div>
        </div>


{{--        <div class="clone hide">--}}
{{--            <div class="control-group input-group" style="margin-top:10px">--}}
{{--                <input type="file" name="filename[]" class="form-control">--}}
{{--                <div class="input-group-btn">--}}
{{--                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

    </form>


{{--    @if (count($errors) > 0)--}}
{{--        <div class="alert alert-danger">--}}
{{--            <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
</div>


{{--<script type="text/javascript">--}}

{{--    $(document).ready(function () {--}}

{{--        $(".btn-success").click(function () {--}}
{{--            var html = $(".clone").html();--}}
{{--            $(".increment").after(html);--}}
{{--        });--}}

{{--        $("body").on("click", ".btn-danger", function () {--}}
{{--            $(this).parents(".control-group").remove();--}}
{{--        });--}}

{{--    });--}}

{{--</script>--}}
</body>
</html>
