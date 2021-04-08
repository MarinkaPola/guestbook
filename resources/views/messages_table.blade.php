<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GBOOK</title>
   <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="favicon.ico" rel="icon" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
          rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel = "stylesheet" >
</head>
<body style="margin-left: 10%">
@if($messages->count())
    @foreach($messages as $message)
        <div style="display: flex; flex-direction: row; align-items: baseline; justify-content: flex-end">
            <div style="border: solid 1px #99e6e6; padding: 2px; margin: 2px">{{$message->first_name}}</div>
            <div style="border: solid 1px #99e6e6; padding: 2px; margin: 2px">{{$message->message}}</div>
            <div style="border: solid 1px #99e6e6; padding: 2px; margin: 2px">{{$message->email}}</div>
            <div style="border: solid 1px #99e6e6; padding: 2px; margin: 2px">{{$message->created_at}}</div>
            <form action="/admin/messages/{{$message->id}}/edit" method="get">
                <button type="submit"  class="btn btn-primary" >EDIT</button>
            </form>
            <form action="/admin/messages/{{$message->id}}" method="post">
                @csrf
                @method('delete')
            <button type="submit"  class="btn btn-danger" >DELETE</button>
            </form>
        </div>
    @endforeach
@endif

</body>
</html>
