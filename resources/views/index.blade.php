<!Doctype html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Channel- Administarion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
        
    </head>
    <body> 
        <div class=container>
        <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Channel - Adminstration</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
</header> 
<main> 
    <h3 class="text-primary text-center my-3">Danh sach Channel</h3> 
    <div class="mb-3 text-end">
        <a href="{{ route('show')}}" class="btn btn-primary">Add New Channel</a>
    </div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Channel name</th>
      <th scope="col">Description</th>
      <th scope="col">Subscribers Count</th> 
      <th scope="col">URL</th>
      <th scope="col" colspan="3" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($channel as $channel)
    <tr>
      <th scope="row">{{$channel->channelid}}</th>
      <td>{{$channel->channelname}}</td>
      <td>{{$channel->description}}</td>
      <td>{{$channel->Subscriberscount}}</td>
      <td>{{$channel->url}}</td>
      <td><a href=""><i class="bi bi-eye"></i></a></td>
      <td><a href=""><i class="bi bi-pencil"></i></a></td>
      <td><a href=""><i class="bi bi-trash-fill"></i></a></td>
    </tr>
    @endforeach 
  </tbody>
</table>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>