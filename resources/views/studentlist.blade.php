<div class="card mb-3">
    <img src="..." class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">List of Students</h5>
        <p class="card-text">
            You can find information about all students in the system
        </p>
        <p class="card-text"><small class="text-muted"></small></p>
                    <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">CNE</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Second Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Speciality</th>
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
                        <td>{{ $student->speciality }}</td>
                        <td>
                            
                            <a href="{{ url('/edit/'.$student->id )}}" class="btn btn-sm btn-info">Edit</a>
                            
                            
                        </td>
                        
                    </tr>
                    @endforeach
            </tbody>
            </table>




    </div>

</div>



   