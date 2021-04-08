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

<form class="row g-3 needs-validation" novalidate action="/admin/messages/{{$message->id}}" method="post">
    @csrf
    @method('put')
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Имя</label>
        <input type="text" class="form-control"  required name="first_name" value="{{$message->first_name}}">
    </div>
    <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Email </label>
        <input type="email" class="form-control" required name="email"  value="{{$message->email}}">
    </div>
    <div class="col-md-8" >
        <label for="exampleFormControlTextarea1" class="form-label" >Example textarea</label>
        <textarea class="form-control" required name="message"  rows="3">{{$message->message}}</textarea>
    </div>
    <div style="margin-top: 10px" class="col-md-10">
        <button class="btn btn-primary" type="submit">UPDATE</button>
    </div>
</form>

</body>
</html>
