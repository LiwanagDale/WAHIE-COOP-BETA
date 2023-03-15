@extends('layouts.app')
@section('content')
<head>
    <title>Laravel Update User Status Using Toggle Button Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row mb-3">
    <h1>Journal Entry</h1>
    <div class="col-md-6">
      <label for="journal_date">Journal Date</label>
      <input type="date" name="journal_date" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label for="journalEntry_number">Journal Entry No:</label>
      <input type="number" name="journalEntry_number" class="form-control" required>
    </div>
    </div>
    <table class="table table-bordered">
        <thead>
           <tr>
              <th></th>
              <th>No.</th>
              <th>Account</th>
              <th>Debit</th>
              <th>Credit</th>
              <th>Description</th>
              <th>Name</th>
           </tr> 
        </thead>
        <tbody>
              <tr>
                <td></td>
                 <td></td>
                 <td>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Journal Entry</option>
                    @foreach($journals as $journal)
                        <option>{{$journal->journal_number}} {{$journal->journal_name}} {{$journal->journal_type}}</option>
                    @endforeach
                  </select>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add+</button>
                 </td>
                 <td>
                    <input type="text" inputmode="numeric" name="debit" class="form-control" required>
                 </td>
                 <td>
                    <input type="text" inputmode="numeric" name="credit" class="form-control" required>
                 </td>
                 <td>
                  <input type="text"  name="description" class="form-control" required>
                </td>
                <td>
                  <input type="text" name="name" class="form-control" required>
                </td>
              </tr>
        </tbody>
    </table>
    <tfoot>
      <button type="button" class="btn btn-primary" >Cancel</button>
      <button type="button" class="btn btn-primary" >Save</button>
      <button type="button" class="btn btn-primary" >Save and New</button>
    </tfoot>
</div>
<div class="container">
    <div class="wrapper">



  <!-- Button trigger modal -->





</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ URL::to('save') }}" id="addForm">
                <div class="mb-3">
                    <label for="journal_number">Journal No:</label>
                    <input type="text" inputmode="numeric" name="journal_number" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="journal_name">Journal Name:</label>
                    <input type="text" name="journal_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="journal_type">Journal Type:</label>
                    <input type="text" name="journal_type" class="form-control" required>
                </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add Journal Accounts</button></form>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
    const myModal = document.getElementById('exampleModal')
const myInput = document.getElementById('exampleModal')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
@endsection
