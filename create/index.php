<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title>Create note</title>
            <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="random-hub.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <form class="form-control" action="../write.php" method="POST" accept-charset="utf-8">
            <input class="form-control mb-2" type="text" name="judulNote" id="judulNote" value="" placeholder="input title" />
            <input class="form-control mb-2" type="text" name="urlGambar" id="urlGambar" value="" placeholder="insert url gambar here ..." />
            <textarea class="mb-2 form-control" name="isinote" id="isinote" rows="8" cols="40" placeholder="write your note here .."></textarea>
            <button class="btn btn-outline-primary" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>