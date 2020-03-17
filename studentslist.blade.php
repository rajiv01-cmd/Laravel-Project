
<div class="card mb-3">
  <img src="https://www.educationalappstore.com/images/best-apps-for-education.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all the informations about students in the system</p>
  
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Faculty</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>


  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{ $student->cne }}</td>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->secondName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->faculty }}</td>
      <td>
        
        <a href=" {{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

  </div>
</div>



